@extends('layout.layout')

@section('title', 'Crear cuenta')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/styleDialogs.css') }}">    
@endsection

@section('body')

<div class="modalRegistrate2">
    <form id="nuevoRegistrateForm">
        @csrf
        <div class="modal-body">
            <h2>Regístrate</h2>
        <div class="form-group">
            <label for="inputContraseña">Contraseña:</label>
            <input type="password" class="form-control mb-3" placeholder="Crea una contraseña segura" id="inputContraseña" name="password" required>
        </div>
        <br>
        <button type="submit" class="bt-blue">Continuar</button>
        
        <div class="small">
            <p>Al continuar estás aceptando los</p>
            <a href="">Términos y condiciones</a> y <a href="">Aviso de privacidad</a>
        </div>
        </div>
    </form>
</div>

@endsection