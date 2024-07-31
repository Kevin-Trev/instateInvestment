@extends('layout.layout')

@section('title', 'Iniciar Sesión')

@section('style')
    <style>
        .container {
        width: 500px;
        margin: 100px auto;
        padding: 30px;
        background-color: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        border-radius: 8px;
        transform: translateY(20px);
        }

        .bt-blue {
        background-color: #3370FF;
        color: #FFFFFF;
        padding: 8px 100px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-bottom: 5px;
        width: 100%;
    }

    h2{
        text-align: center;
        padding-bottom: 30px;
    }

    input{
        margin-bottom: 15px;
    }

    .footer{
        text-align: center;
        font-size: 14px;
    }

    button[type="submit"]{
        margin-bottom: 25px;
    }
    </style>    
@endsection

@section('body')

    <div class="container">
        <form action="/login" method="POST" id="iniciarForm">
            @csrf
            <h2>Iniciar sesión</h2>

            @if (Session::has('error_login'))
            <div class="alert alert-danger text-center" role="alert">{{ Session::get('error_login') }}</div>
            @endif

            <div class="form-group">
                <label for="inputCorreo">Correo electrónico</label>
                <input type="text" class="form-control" placeholder="Ingresa tu correo electrónico" id="inputCorreo" name="email">
            </div>
        
            <div class="form-group">
                <label for="inputContraseña">Contraseña</label>
                <input type="password" class="form-control" placeholder= "Ingresa tu contraseña" id="inputContraseña" name="password">
            </div>
            <br>
            <button type="submit" class="bt-blue">Ingresar</button>
            <div class="footer">
                <a href="/registrarse">Registrate</a>
                <p>Si aún no tienes cuenta</p>
            </div>
        </form>
    </div>

@endsection