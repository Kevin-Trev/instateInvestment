@extends('layout.layout')

@section('title', 'Crear cuenta')

@section('body')
    
<div class="modalRegistrate2">
    <form id="nuevoRegistrateForm">
        @csrf
        <h2 class="modal-title">Regístrate</h2>
        <div class="form-group">
            <label for="inputContraseña">Contraseña</label>
            <input type="password" class="form-control" placeholder="Crea una contraseña segura" id="inputContraseña" name="password">
        </div>
        <button type="submit" class="bt-blue">Continuar</button>
        
        <div class="small">
            <p>Al continuar estás aceptando los</p>
            <a href="">Términos y condiciones</a> y <a href="">Aviso de privacidad</a>
        </div>
    </form>
</div>

@endsection