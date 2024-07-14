@extends('layout.layout')

@section('title', 'Iniciar Sesión')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/styleDialogs.css') }}">    
@endsection

@section('body')

    <div class="modalIniciarSesion">
        <form id="iniciarForm">
            @csrf
            <h2>Iniciar sesión</h2>
            <label for="inputCorreo">Correo electrónico</label>
            <br>
            <input type="text" placeholder="Ingresa tu correo electrónico" id="inputCorreo" name="email">
            <br>
            <label for="inputContraseña">Contraseña</label>
            <br>
            <input type="password" placeholder= "Ingresa tu contraseña" id="inputContraseña" name="password">
            <button class="bt-blue">Ingresar</button>
            <p class="line-text">─────────  o también puedes  ─────────</p>
            <button class="bt-google"><iphpmg src="{{asset('/Imagenes/Logo-google.png')}}">Continuar con Google</button>
            <div class="footer">
                <a href="/registrarse">Registrate</a>
                <p>Si aún no tienes cuenta</p>
            </div>
        </form>
    </div>

@endsection