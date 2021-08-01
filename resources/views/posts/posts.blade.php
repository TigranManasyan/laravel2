@extends("layouts.app")
@section("page-title")All Posts
@endsection
@section("content")
    <div class="container mt-2">
        <h2>All Posts</h2>
        @if(isset($posts))
           @foreach($posts as $post)
               <div>
                   <h2>{{ $post -> title }}</h2>
                   <p><strong>Published</strong> {{ $post-> created_at }}</p>
                   <button class="btn btn-primary">More</button>
               </div>
            @endforeach
        @endif
    </div>
@endsection
