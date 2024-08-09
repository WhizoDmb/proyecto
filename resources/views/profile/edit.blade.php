@extends('layouts.app')

@section('content')
<div class="profile-form">
  <center>
  <div class="profile-header">
        <h1>{{ Auth::user()->name }}</h1>
        <p class="lead">Actualiza tu correo electrónico y contraseña a continuación.</p>
    </div>

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

  </center>
    
  <div style="padding:50px">

  <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PATCH')

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input id="email" type="email" name="email" class="form-control" value="{{ $user->email }}" required autofocus />
        </div>

        <!-- New Password -->
        <div class="mb-3">
            <label for="password" class="form-label">Nueva Contraseña</label>
            <input id="password" type="password" name="password" class="form-control" />
            <div class="form-text">Deja en blanco para mantener la contraseña actual.</div>
        </div>

        <!-- Confirm New Password -->
        <div class="mb-4">
            <label for="password_confirmation" class="form-label">Confirma tu nueva contraseña</label>
            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" />
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>

  </div>
</div>
@endsection
