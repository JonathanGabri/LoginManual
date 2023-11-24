@extends('layouts.app-master')
<title>Home</title>

@section('content')
<h1 class="container">Home</h1>
@auth
    <p>Bienvenido {{auth()->user()->name ?? auth()->user()->username}}, a nuestro sitio</p>
    <p><a href="/logout">Cerrar Sesion</a></p>
@endauth
@guest
    <p>Para ver el contenido debe loguearse <a href="/login">Iniciar Sesion</a></p>
@endguest

@endsection
