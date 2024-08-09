@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="text-center mb-4">
        <h1>Editar Proveedor</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST" style="padding:30px">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $supplier->name) }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="contact">Contacto</label>
            <input type="text" class="form-control" id="contact" name="contact" value="{{ old('contact_person', $supplier->contact_person) }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="phone">Teléfono</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $supplier->phone) }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="email">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $supplier->email) }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="address">Dirección</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $supplier->address) }}" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary" style="background:black; color:white;">Actualizar</button>
        </div>
    </form>
</div>
@endsection
