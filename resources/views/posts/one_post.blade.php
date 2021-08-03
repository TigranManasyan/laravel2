@extends('layouts.app')
@section('page-title'){{$post->title}}
@endsection
@section('content')
    <div class="container mt-2">
        <h3>{{$post->title}}</h3>
        <p>Published` {{$post->created_at}}</p>
        <p>Author` {{$post->author}}</p>
        <p>{{$post->content}}</p>
        <p>Lat date updated {{$post->updated_at}}</p>
        <form action="{{route('posts.destroy', $post->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <button class="btn btn-success">
            <a style="color:white" href="{{route('posts.edit', $post->id)}}">
                Edit
            </a>
        </button>
    </div>
@endsection
