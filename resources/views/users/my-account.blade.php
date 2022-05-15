@extends('layouts.master')
@section('title','My Account Page')

@section('content')


<br><br><br><br><br><br><br>

    <div class="container">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <form action="#" method="#" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        {{method_field('PUT')}}
                        <legend>Account Profile</legend>
                        <div class="form-group {{$errors->has('name')?'has-error':''}}">
                            <input type="text" class="form-control" name="name" id="name" value="{{$user_login->name}}" placeholder="Name">
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        </div>
                        
                        <div class="form-group {{$errors->has('mobile')?'has-error':''}}">
                            <input type="text" class="form-control" name="email" value="{{$user_login->email}}" id="mobile" placeholder="Email">
                            <span class="text-danger">{{$errors->first('email')}}</span>
                        </div>
                        <button type="submit" class="btn btn-primary" style="float: right;">Update Profile</button>
                    </form>
                </div><!--/login form-->
            </div>
           
        </div>
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection