<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instante Investment</title>
    <link rel="icon" href="{{asset('Imagenes/iconito.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <style>
        *{
            font-family: 'Roboto';
            padding: 0;
            margin: 0; 
        }

        body{
            overflow-y: hidden;
        }

        .container {
            text-align: center;
            width: 500px;
            margin: 100px auto;
            padding: 30px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            transform: translateY(6vw);
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

        .form-group{
            padding: 10px 0 20px 0;
        }

        .bt-blue a{
            color: #FFFFFF;
            text-decoration: none;
        }

        #correoEnviado{
            display: none;
        }

        .error{
            color: red;
            font-size: 12px;
            text-align: start;
            display: none;
            margin: -15px 0 10px 0;
        }

        .errorInput{
            border: 1px solid red;
            background: #f6dee0;
        }

        @media(max-width: 576px){
            .container{
                width: 80vw;
                margin-top: 20vw;
                transform: translateY(15vw);
            }
            .bt-blue {
            padding: 10px;
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
            .bt-blue {
            padding: 10px;
            }
            .alert{
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container" id="email">
        <h2>Restablecer contraseña</h2>
        <form action="/enviar/correo/recuperar" method="POST" id="formEmail">
            @csrf
            <p>Para restablecer tu contraseña necesitas ingresar un correo electrónico, el correo te llegará en breve.</p>
            <div class="form-group">
                <div class="alert alert-danger" id="alerta">Este Correo Electrónico no Existe</div>
                <input type="email" id="inputCorreo" class="form-control" placeholder="Ingrese el correo electrónico" name="email" required>
            </div>
            <p class="error">Ingresa un correo electrónico válido</p>
            <button type="button" id="buttonSubmit" class="bt-blue">Enviar correo de recuperación</button>
        </form>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('#alerta').hide();
        let peticion = $('#email');
        let recibo = $('#correoEnviado');
        let error = $('.error');
        var patron = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    
        $('#buttonSubmit').on('click', function(){
            $('#alerta').hide();
            var emailVer = $('#inputCorreo').val();
            console.log('verificando... '+emailVer);
            if(patron.test($('#inputCorreo').val())){

                verificarMail(emailVer).then(function(response){
                    if(response.existe){
                        peticion.css("display", "none");
                        recibo.css("display", "block");
                        $('#formEmail').submit();
                    }
                    else {
                        $('#alerta').show();
                    }
                });
            }
            else{
                $('#inputCorreo').addClass('errorInput');
                error.css("display", "block");
            }
        })
        $('#inputCorreo').on('keydown', function(){
            error.css("display", "none");
            $('#inputCorreo').removeClass('errorInput')
        })

        $('#formEmail').on('keydown', function (event){
            if (event.keyCode === 13){
                event.preventDefault();
                if($('#email').is(':visible')){
                    $('#buttonSubmit').click();
                }
            }
        });
    });

    function verificarMail(email) {
            return $.ajax({
                url: '/verificar-correo',
                method: 'GET',
                data: {
                    email: email,
                },
                dataType: 'json'
            });
        }
</script>
</html>