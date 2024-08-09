@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>Price: {{ $product->price }}</p>
    <p>Category: {{ $product->category->name }}</p>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Products</a>
</div>
@endsection
