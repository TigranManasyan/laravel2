@extends('layouts.app')
@section('page-title')All products
@endsection
@section('content')
    <div class="container mt-3">
        <h2>All products</h2>

    @if(isset($products))
        <div class="products" style="height: 500px; background-color: #a0aec0">
            <form action="" method="post">
                <select name="category">
                    @foreach($products as $product)
                        <option>{{ $product->category_name }}</option>
                    @endforeach
                </select>
            </form>

            @foreach($products as $product)
                <h4>{{ $product->name }}</h4>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $products -> links() }}
        </div>
    @endif
    </div>
@endsection
