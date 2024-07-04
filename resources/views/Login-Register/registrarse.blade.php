@extends('layout.layout')

@section('title', 'Crear cuenta')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/styleDialogs.css') }}">    
@endsection

@section('body')

<div class="modalRegistrate">
    <form id="registrateForm">
        @csrf
        <h2>Regístrate</h2>
        <input type="hidden" id="employeeId" name="id">
        <div class="form-group">
            <label for="inputCorreo">Correo electrónico</label>
            <input type="text" class="form-control" placeholder="Ingresa tu correo electrónico" id="inputCorreo" name="email">
        </div>
        <br>
        <button type="submit" class="bt-blue">Registrate</button>
        <p class="line-text">─────────  o también puedes  ─────────</p>
        <button class="bt-google"><img src="{{asset('/Imagenes/Logo-google.png')}}">Continuar con Google</button>
        <div class="footer">
            <a href="/login">Inicia sesión</a>
            <p>Si ya tienes una cuenta</p>
        </div>
        <div class="small">
            <p>Al continuar estás aceptando los</p>
            <a href="">Términos y condiciones</a> y <a href="">Aviso de privacidad</a>
        </div>
    </form>
</div>

@endsection