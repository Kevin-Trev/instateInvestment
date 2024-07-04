@extends('layout.layout')

@section('title', 'Crear cuenta')

@section('style')
<style> 
       .container {
            max-width: 500px;
            margin: 40px auto;
            padding: 30px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
        }
        
       .form-group {
            margin-bottom: 15px;
            margin-left: 50px;
        }
        
       .form-group label {
            display: block;
            margin-bottom: 10px;
        }
        
       .form-group input[type="text"],.form-group input[type="tel"],.form-group select {
            width: 80%;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        
       .terms {
            font-size: 12px;
            color: #666;
            text-align: center;
        }
        h2{
            font-size: 30px;
            text-align: center;
        }
</style> 
@endsection

@section('body')
    
<div class="container">
    <h2>Regístrate</h2>
    <form>
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <div class="form-group">
            <label for="tipo_usuario">Tipo de usuario</label>
            <select id="tipo_usuario" name="tipo_usuario">
                <option value="vendedor">Vendedor</option>
                <option value="comprador">Comprador</option>
            </select>
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de nacimiento</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento">
        </div>
        <div class="form-group">
            <label for="ciudad_residencia">Ciudad de residencia</label>
            <input type="text" id="ciudad_residencia" name="ciudad_residencia">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="tel" id="telefono" name="telefono" placeholder="+52">
        </div>
        <div class="form-group">
            <button type="submit" class="btn-blue">Finalizar</button>
            <p class="terms">Al continuar, estas aceptando los <br><a href="#">Términos y condiciones</a> y el <a href="#">Aviso de Privacidad</a>.</p>
        </div>
    </form>
</div>

@endsection