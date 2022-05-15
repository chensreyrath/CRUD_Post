@extends('layouts.master')

@section('title','Login Page')
@section('content')

<br><br><br><br>
    <div class="container">
    
            <h2 class="mt-3">Start your post</h2>
            <form method="POST" action="{{ route('users.do_login') }}">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" required class="form-control" name="email" id="email" aria-describedby="emailHelp">
                
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" required class="form-control" name="password" id="password">
              </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <hr>
            <a href="{{ route('users.register') }}">Register</a>
       
    </div>
@endsection