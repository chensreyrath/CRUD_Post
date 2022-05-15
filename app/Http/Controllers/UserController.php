<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    //
    public function login()
    {
        return view('users.login');
    }

    public function doLogin(UserLoginRequest $request)
    {
        $queryUser = User::where('email', '=', $request->get('email'))
            ->limit(1)
            ->first();
        if (empty($queryUser)) {
            return back()->withErrors([
                'message' => 'User already existed'
            ]);
        }
        $input_data=$request->all();
        if (Hash::check($request->get('password'), $queryUser->password)) {
            Auth::login($queryUser);
            Session::put('frontSession',$input_data['email']);
            return redirect(route('/'));
        }
        
        return back()->with('message','Account is not Valid!');

    }

    public function register()
    {
        return view('users.register');
    }

    public function doRegister(UserRegisterRequest $request)
    {
        $queryUser = User::where('email', '=', $request->get('email'))
            ->limit(1)
            ->first();
        if (!empty($queryUser)) {
            // return back()-> withErrors($request->all());
            return back()->withErrors([
                'message' => 'User already existed'
            ]);
        }

        $userData = $request->all();
        $userData['password'] = Hash::make($userData['password']);
        User::create($userData);
        
        return redirect(route('users.login'));
    }

    public function logout(){
        Auth::logout();
        Session::forget('frontSession');
        return redirect('/');
    }

    public function account(){
        $user_login=User::where('id',Auth::id())->first();
        return view('users.my-account',compact('user_login'));
    }
}
