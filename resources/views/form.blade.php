@extends('layouts.app')
@section('title-page')Form
@endsection

@section('content')
    <form action="{{ route('form_send') }}" method="post">
        @csrf
        <input type="text" name="username">
        <button type="submit">Send</button>
    </form>

    @if($errors -> any())
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
@endsection
