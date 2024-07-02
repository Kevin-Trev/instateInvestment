<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarse</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="modalIniciarSesion">
        <form id="ingresarForm">
            @csrf
            <h2 id="iniciarModalLabel">Iniciar sesión</h2>
            <label for="inputCorreo">Correo electrónico</label>
            <br>
            <input type="text" placeholder="Ingresa tu correo electrónico" id="inputCorreo">
            <br>
            <label for="inputContraseña">Contraseña</label>
            <br>
            <input type="password" placeholder= "Ingresa tu contraseña" id="inputContraseña">
            <button class="bt-blue">Ingresar</button>
            <p class="line-text">─────────  o también puedes  ─────────</p>
            <button class="bt-google"><img src="{{asset('/Imagenes/Logo-google.png')}}">Continuar con Google</button>
            <div class="footer">
                <a href="/registrarse">Registrate</a>
                <p>Si aún no tienes cuenta</p>
            </div>
        </form>
    </div>
    
</body>
</html>