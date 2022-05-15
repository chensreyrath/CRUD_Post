@extends('layouts.master')

@section('title','Post Page')
@section('content')
<!-- Page Header-->
<header class="masthead" style="background-image: url('/images/{{ $post->image }}')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1>{{ $post->title }}</h1>
                            <h2 class="subheading">{{ $post->content1 }}</h2>
                            <span class="meta">
                                Posted by
                                <a href="#!">{{ $post->author }}</a>
                                on August 24, 2022
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 ">
                        <p>{{ $post->content2 }}</p>
                        <p>
                            Posted by
                            <a href="#">{{ $post->author }}</a>
                            
                        </p>
                    </div>
                </div>
            </div>
        </article>
@endsection