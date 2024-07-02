<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarse</title>
    <link rel="icon" href="{{asset('Imagenes/iconito.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/styleDialogs.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="modalRegistrate">
        <form id="registrateForm">
            @csrf
            
            <h2>Regístrate</h2>
            <input type="hidden" id="employeeId" name="id">
            <label for="inputCorreo">Correo electrónico</label>
            <br>
            <input type="text" placeholder="Ingresa tu correo electrónico" id="inputCorreo" name="email">
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