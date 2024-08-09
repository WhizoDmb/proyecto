@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>{{ $customer->name }}</h1>
    <p>Email: {{ $customer->email }}</p>
    <p>Phone: {{ $customer->phone }}</p>
    <a href="{{ route('customers.index') }}" class="btn btn-primary">Back to Customers</a>
</div>
@endsection
