@extends('layouts.app')
@section('title-page')All categories
@endsection
@section('content')
    <div class="container mt-2">
        @if(isset($categories))
            @foreach($categories as $category)
                <h2>{{ $category -> category_name }}</h2>
                <button class="btn btn-info">
                    <a href="{{ route('one_category', $category -> id) }}" style="text-decoration: none;color:white">More</a>
                </button>
            @endforeach
        @else
            <div class="alert alert-info">
                Sorry empty list!
            </div>
        @endif
    </div>

@endsection
