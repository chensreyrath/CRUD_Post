<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
class PageController extends Controller
{
    //
    public function index()
    {
        $latestPosts = Posts::orderBy('id', 'desc')->paginate(10);

        return view('home', [
            'latestPosts' => $latestPosts
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
