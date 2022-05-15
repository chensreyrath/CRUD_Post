@extends('layouts.master')

@section('title','My Post Page')
@section('content')

<br><br><br><br>
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Author</th>
            <th>Image</th>
            <th>Title</th>
            <th>Content Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $post->author}}</td>
            <td><img src="/images/{{ $post->image }}" width="100px"></td>
            <td>{{ $post->title}}</td>
            <td>{{ $post->content2 }}</td>
            <td>
                <form action="{{ route('destroy',$post->id) }}" method="POST">
      
                    <a class="  p-2 btn btn-info" href="{{ route('show',$post->id) }}">Show</a>
       
                    <a class=" p-2 btn btn-primary" href="{{ route('edit',$post->id) }}">Edit</a>
      
                    @csrf
                    @method('DELETE')
         
                    <button type="submit" class=" p-2 btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
     
    {!! $posts->links() !!}


@endsection