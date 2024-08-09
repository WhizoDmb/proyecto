@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <center><h1>Editar Categoria</h1></center>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.update', $category->id) }}" method="POST" style="padding:30px">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="description">Descripcion</label>
            <textarea class="form-control" id="description" name="description">{{ $category->description }}</textarea>
        </div>
<center>        <button type="submit" class="btn btn-primary" style="background:black; color:white;">Actualizar</button>
</center>    </form>
</div>
@endsection
