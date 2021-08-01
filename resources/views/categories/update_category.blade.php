@extends('layouts.app')
@section('title-page')New Category
@endsection
@section('content')
    <div class="container mt-3">
        <h2>Update {{$category->category_name}}</h2>
        <form action="{{ route('update_category', $category -> id) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="category_name" class="form-label">Category name</label>
                <input type="text" value="{{$category->category_name}}" name="category_name" class="form-control" id="category_name" placeholder="Apple">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
        @include("includes.messages")
    </div>
@endsection
