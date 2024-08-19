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
            overflow-y: visible;
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

        p{
            padding: 20px 0 20px 0;
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
        }
    </style>
</head>
<body>
    <div class="container" id="correoEnviado">
        <h1>¡Correo enviado!</h1>
        <p>Hemos enviado un correo donde encontraras un enlace para proseguir con este proceso.</p>
        <button class="bt-blue"><a href="{{route('inicio')}}">Regresar al inicio</a></button>
    </div>
</body>
</html>