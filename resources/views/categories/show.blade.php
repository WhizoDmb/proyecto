@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>{{ $category->name }}</h1>
    <p>{{ $category->description }}</p>
    <a href="{{ route('categories.index') }}" class="btn btn-primary">Back to Categories</a>
</div>
@endsection
