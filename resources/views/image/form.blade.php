@extends('layouts.app')
@section('page-title')Upload image
@endsection
@section('content')
    <div class="container mt-2">
        <form action="{{ route('add_image') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="image" class="form-label">Chose image</label>
                <input name="image" type="file" class="form-control" id="image">
                <button class="btn btn-success mt-2">Save</button>
            </div>
        </form>
    </div>
@endsection
