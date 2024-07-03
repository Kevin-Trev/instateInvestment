@extends('layout.layout')

@section('title', 'Crear cuenta')

@section('style')
<link rel="stylesheet" href="{{ asset('css/styleDialogs.css') }}">    
@endsection

@section('body')
    
<div class="modalRegistrate2">
    <form id="nuevoRegistrateForm">
        @csrf
        <h2 class="modal-title">Regístrate</h2>
        <div class="form-group">
            <label for="inputNombre">Contraseña</label>
            <input type="text" class="form-control" id="inputNombre" name="name">
        </div>
        <div class="form-group">
            <label for="selectTipo">Tipo de usuario</label>
            <select class="form-control" placeholder="Selecciona el tipo de usuario" id="selectTipo" name="tipoUsuario">
                <option value=""></option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputFecha">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="inputFecha" name="fechaNacimiento">
        </div>
        <div class="form-group">
            <label for="inputCiudad">Ciudad de residencia</label>
            <input type="text" class="form-control" id="inputCiudad" name="city">
        </div>
        <div class="form-group">
            <label for="inputTelefono">Teléfono</label>
            <input type="number" class="form-control" placeholder="+52" id="inputTelefono" name="phoneNumber" required>
        </div>
        <button type="submit" class="bt-blue">Continuar</button>
        
        <div class="small">
            <p>Al continuar estás aceptando los</p>
            <a href="">Términos y condiciones</a> y <a href="">Aviso de privacidad</a>
        </div>
    </form>
</div>

@endsection