<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\User;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    
    public function myPosts()
    {
        $user_login=User::where('id',Auth::id())->first();
        $posts = Posts::where('author','=', $user_login['name'])->paginate(10);
        
        
        return view('posts.my-posts',compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

          
    }
    public function managePosts()
    {
        $posts = Posts::orderBy('id', 'desc')->paginate(10);

        return view('posts.my-posts',compact('posts'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    public function create()
    {
        return view('posts.create-post');
    }
 
    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content1' => 'required',
            'content2' => 'required',
            'author' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
   
        $input = $request->all();
   
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
     
        Posts::create($input);
      
        return redirect()->route('/')
                        ->with('success','Product created successfully.');
    }
 
   
    public function show(Posts $post)
    {
  
        return view('post',compact('post'));
    }
 
    public function edit(Posts $post)
    {
        return view('posts.edit-post',compact('post'));
    }
 
    
    public function update(Request $request, Posts $post)
    {
        $request->validate([
            'title' => 'required',
            'content1' => 'required',
            'content2' => 'required',
            'author' => 'required',
        ]);
   
        $input = $request->all();
   
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
           
        $post->update($input);
     
        return redirect()->route('show',compact('post'))
                        ->with('success','Product updated successfully');
    }
 
    
    public function destroy(Posts $post)
    {
        $post->delete();
      
        return redirect()->route('/')
                        ->with('success','Product deleted successfully');
    }
}
