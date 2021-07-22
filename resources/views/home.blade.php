@extends('layouts.app')
@section("page-title")Home
@endsection
@section("content")
    <h1>Home page</h1>
    <ul>
        <li>ket</li>
        <li>ket</li>
        <li>ket</li>
        <li>ket</li>
        <li>ket</li>
    </ul>
{{--    @include('includes.NavBar')--}}
{{--    @section('nav-bar')--}}
{{--        @parent--}}
{{--        <h1>Hello</h1>--}}
{{--    @endsection--}}
    @if(10 == 10)
        <h2>hello</h2>
    @else
        <h2>Bye</h2>
    @endif
    <ul>
        @foreach([1,2,3,4] as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
@endsection
