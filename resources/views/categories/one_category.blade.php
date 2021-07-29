@extends('layouts.app')
@section('title-page'){{ $category -> category_name }}
    @endsection
@section('content')
    <div class="container mt-2">
        <h2>{{ $category -> category_name }}</h2>
        <p>Published {{ $category -> created_at }}</p>
        <button class="btn btn-danger">
            <a href="{{ route('delete_category', $category -> id) }}" style="color:white;text-decoration: none">Delete</a>
        </button>
        <button class="btn btn-success">
            <a href="" style="color:white;text-decoration: none">Edit</a>
        </button>
    </div>
@endsection
