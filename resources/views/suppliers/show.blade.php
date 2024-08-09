@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>{{ $supplier->name }}</h1>
    <p>Contact: {{ $supplier->contact }}</p>
    <a href="{{ route('suppliers.index') }}" class="btn btn-primary">Back to Suppliers</a>
</div>
@endsection
