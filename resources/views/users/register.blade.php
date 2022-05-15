@extends('layouts.master')

@section('title','Register Page')
@section('content')
<br><br><br><br>
    <div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="col-sm-6">
            <h2 class="mt-3">Create a free account</h2>
            <form method="POST" action="{{ route('users.do_register') }}">
              @csrf
              <div class="mb-3">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" required class="form-control" name="name" id="fullname" aria-describedby="emailHelp">
                @if($errors->has('name'))<span>This field is required</span>@endif
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" required class="form-control" name="email" id="email" aria-describedby="emailHelp">
                @if($errors->has('email'))<span>This field is required</span>@endif
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" required class="form-control" name="password" id="password">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <hr>
            <a href="{{ route('users.login') }}">Back to login</a>
        </div>
    </div>
@endsection