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
        .alert{
            --bs-alert-padding-x: 5px;
            --bs-alert-padding-y: 10px;
        }

        .error{
            color: red;
            font-size: 13px;
            text-align: center;
            transform: translateY(5px);
            display: none;
        }

        .errorInput{
            border: 1px solid red;
            background: #f6dee0;

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
            .alert{
                font-size: 12px;
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
            .alert{
                font-size: 12px;
            }
        }
    </style>    
@endsection

@section('body')

    <div class="container">
        <form id="iniciarForm">
            @csrf
            <h2>Iniciar sesión</h2>

            <div id="alerta" class="alert text-center d-none" role="alert"></div>

            <div class="form-group">
                <label for="inputCorreo">Correo electrónico</label>
                <input type="text" class="form-control" placeholder="Ingresa tu correo electrónico" id="inputCorreo" name="email">
            </div>
        
            <div class="form-group">
                <label for="inputContraseña">Contraseña</label>
                <input type="password" class="form-control" placeholder= "Ingresa tu contraseña" id="inputContraseña" name="password">
            </div>
            <p class="error">Introduce los datos requeridos</p>
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

@section('js')
    <script>
        $('#iniciarForm').on('submit', function(e) {
            e.preventDefault();
            $('#alerta').addClass('d-none');

            if($('#inputCorreo').val() && $('#inputContraseña').val()){
                $.ajax({
                url: '/login',
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    let alerta = $('#alerta');

                    if (response.status === 'success') {
                        window.location.href = response.redirect; 
                    } else {
                        alerta.removeClass('d-none alert-warning alert-danger');
                        alerta.addClass(response.status === 'error' ? 'alert-danger' : 'alert-warning');
                        alerta.html(response.message);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('Error:', textStatus, errorThrown);
                    $('#alerta').removeClass('d-none alert-warning').addClass('alert-danger').html('Ocurrió un error. Inténtalo de nuevo.');
                }
                });
            }
            else{
                $('.error').show();
                if (!$('#inputCorreo').val()) $('#inputCorreo').addClass('errorInput');
                if (!$('#inputContraseña').val()) $('#inputContraseña').addClass('errorInput');
            }
        });
        
        $('#inputCorreo, #inputContraseña').keydown(function() {
            $('.error').hide();
            $(this).removeClass('errorInput')
        });
    </script>
@endsection