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
    <div class="modalRegistrate">
        <form id="ingresarForm">
            @csrf
            <h2 id="iniciarModalLabel">Regístrate</h2>
            <label for="inputCorreo">Correo electrónico</label>
            <br>
            <input type="text" placeholder="Ingresa tu correo electrónico" id="inputCorreo">
            <br>
            <button type="submit" class="bt-blue">Registrate</button>
            <p class="line-text">─────────  o también puedes  ─────────</p>
            <button class="bt-google"><img src="{{asset('/Imagenes/Logo-google.png')}}">Continuar con Google</button>
            <div class="footer">
                <a href="/login">Inicia sesión</a>
                <p>Si ya tienes una cuenta</p>
            </div>
            <div class="small">
                <p>Al continuar estás aceptando los</p>
                <a href="">Términos y condiciones</a> y <a href="">Aviso de privacidad</a>
            </div>
        </form>
    </div>
</body>
</html>