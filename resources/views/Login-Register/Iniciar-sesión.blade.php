@extends('layout.layout')

@section('title', 'Iniciar Sesión')

@section('style')
    <style>

        .restablecer{
            text-align: center;
            font-size: 14px;
        }

        .container {
        width: 500px;
        margin: 100px auto;
        padding: 30px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        transform: translateY(20px);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
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

    
    @media(max-width: 576px){
        .container{
            width: 80vw;
            margin-top: 20vw;
            transform: translateY(15vw);
        }
    }

    @media (max-width: 391px){
        .container{
            width: 80vw;
            height: 60vw;
            border: none;
            box-shadow: none;
            transform: translateY(-25vw);
        }
    }
    </style>    
@endsection

@section('body')

    <div class="container">
        <form action="/login" method="POST" id="iniciarForm">
            @csrf
            <h2>Iniciar sesión</h2>

            @if (Session::has('error_login'))
            <div class="alert alert-warning text-center" role="alert">{{ Session::get('error_login') }}</div>
            @endif

            @if (Session::has('suspendido'))
            <div class="alert alert-danger text-center" role="alert">{!! session('suspendido') !!}</div>  
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
                <a href="{{route('registro')}}">Registrate</a>
                <p>Si aún no tienes cuenta</p>
            </div>
            <div class="restablecer">
                <a href="{{route('restablecer')}}">¿Olvidaste tu contraseña?</a>
            </div>
        </form>
    </div>

@endsection