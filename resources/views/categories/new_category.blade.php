@extends('layouts.app')
@section('title-page')New Category
@endsection
@section('content')
    <div class="container mt-3">
        <h2>New category</h2>
        <form action="{{ route('add_category') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="category_name" class="form-label">Category name</label>
                <input type="text" name="category_name" class="form-control" id="category_name" placeholder="Apple">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        @include("includes.messages")
    </div>
@endsection
