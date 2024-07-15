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
        }
        
       footer{
        text-align: center;
        font-size: 13px;
        margin-top: 20px;
       }
        
       .form-group input[type="text"]{
            width: 88%;
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
            margin-bottom: 50px;
        }
        .bt-google{
        border: none;
        color: #646E71;
        background-color: #FFFFFF;
        box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.5);
        cursor: pointer;
        padding: 8px;
        border-radius: 8px;
        text-align: center;
        width: 78%;
        }
        .bt-google img{
        width: 20px;
        height: 20px;
        margin: 5px;
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
        }

        .center p{
            color: #646E71;
        }
    </style>
@endsection

@section('body')

<div class="container">
    <form action="{{route('nuevoContraseña')}}" method="GET">
        @csrf
        <h2>Regístrate</h2>
        <input type="hidden" id="employeeId" name="id">
        <div class="form-group">
            <label for="inputCorreo">Correo electrónico</label>
            <input type="text" class="form-control" placeholder="Ingresa tu correo electrónico" id="inputCorreo" name="email">
        </div>
        <div class="center">
            <button type="submit" class="bt-blue">Registrate</button>
            <p>─────────  o también puedes  ─────────</p>
            <button class="bt-google"><img src="{{asset('/Imagenes/Logo-google.png')}}">Continuar con Google</button>
        </div>
        <footer>
            <a href="/login">Inicia sesión</a>
            <p>Si ya tienes una cuenta</p>
        </footer>
        <div class="terms">
            <p>Al continuar estás aceptando los <br><a href="{{route('terminosCondiciones')}}">Términos y condiciones</a> y <a href="{{route('avisoPrivacidad')}}">Aviso de privacidad</a></p>
        </div>
    </form>
</div>

@endsection