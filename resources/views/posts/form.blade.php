@extends('layouts.app')
@section('page-title'){{ (isset($post)) ? ('Update ' . $post->title) : 'New Post'}}
@endsection
@section('content')
    <div class="container mt-2">
        <h3>{{ (isset($post)) ? ('Update ' . $post->title) : 'New Post'}}</h3>
        <form action="{{ (isset($post)) ? route('posts.update', $post->id) : route('posts.store') }}" method="post">
            @csrf
            @if(isset($post))
                @method('put')
            @else
                @method('post')
            @endif
            <div class="mb-3">
                <label for="title" class="form-label">Post title</label>
                <input
                    @if(isset($post))
                        value="{{ $post->title }}"
                    @endif
                    name="title"
                    type="text"
                    class="form-control"
                    id="title"
                    placeholder="My title">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Post author</label>
                <input
                    @if(isset($post))
                    value="{{ $post->author }}"
                    @endif
                    name="author"
                    type="text"
                    class="form-control"
                    id="author"
                    placeholder="My title">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Example textarea</label>
                <textarea
                    name="content"
                    class="form-control"
                    id="content"
                    rows="3">@if(isset($post)) {{ $post->content }}@endif</textarea>


            </div>

            <button type="submit" class="btn btn-success">
                {{(isset($post)) ? 'Update ' : 'Save'}}
            </button>

        </form>
    </div>
@endsection
