@extends('layouts.auth-master')

@section('content')
<form  action="/register" method="POST">
    @csrf
    <h1>Crear Cuenta</h1>
    @include('layouts.partials.messages')
    <div class="form-floating mb-3">
        <input type="text" placeholder="username" name="username" class="form-control" id="exampleInputPassword1">
        <label for="exampleInputPassword1" class="form-label">Nombre de Usuario</label>
    </div>

    <div class="form-floating mb-3">
        <input type="email" placeholder="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="form-floating mb-3">
        <input type="password" placeholder="password" name="password" class="form-control" id="exampleInputPassword1">
      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" placeholder="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
        <label for="exampleInputPassword1" class="form-label">Confirmar Contraseña</label>
      </div>
    <div class="form-floating mb-3">
    <a href="/login">Login</a>
    </div>
    <button type="submit" value="Registrarse" class="btn btn-primary">Crear Cuenta</button>
  </form>
@endsection
