@extends('layout.layout')

@section('title', 'Crear cuenta')

@section('style')

<style>
    body{
            overflow-y: hidden;
        }

        .container {
        max-width: 500px;
        margin: 100px auto;
        padding: 30px;
        background-color: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        border-radius: 8px;
        }
        
       .form-group {
            margin-bottom: 15px;
            margin-left:48px;
            color: #666;
        }
        
       .form-group input[type="text"]{
            width: 88%;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin: 0 0 20px 0;
        }
        
       .terms {
            font-size: 12px;
            color: #666;
            text-align: center;
        }
        h2{
            font-size: 30px;
            text-align: center;
            margin-bottom: 40px;
        }

        .center{
            text-align: center;
        }

        .center button[type="submit"]{
            margin-bottom: 15px;
            border-radius: 8px;
            background-color: #004CFF;
            border: none;
            padding: 10px;
            color: #FFFFFF;
            width: 78%;
            margin-bottom: 170px;
        }
</style>

@endsection

@section('body')

<div class="container">
    <form action="{{route('nuevoDatos')}}" method="GET">
        @csrf
        <h2>Regístrate</h2>
        <div class="form-group">
            <label for="inputCorreo">Contraseña:</label>
            <input type="text" class="form-control" placeholder="Crea una contraseña" id="inputCorreo" name="email">
        </div>
        <div class="center">
            <button type="submit" class="bt-blue">Registrate</button>
        </div>
        <div class="terms">
            <p>Al continuar estás aceptando los <br><a href="">Términos y condiciones</a> y <a href="">Aviso de privacidad</a></p>
        </div>
    </form>
</div>

@endsection