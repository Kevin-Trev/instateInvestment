<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarse</title>
    <link rel="icon" href="{{asset('Imagenes/iconito.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="modalRegistrate">
        <form id="nuevoRegistrateForm">
            @csrf
            <h2>Regístrate</h2>
            <label for="inputContraseña">Contraseña</label>
            <br>
            <input type="password" placeholder="Crea una contraseña segura" id="inputContraseña" name="password">
            <br>
            <button type="submit" class="bt-blue">Continuar</button>
            
            <div class="small">
                <p>Al continuar estás aceptando los</p>
                <a href="">Términos y condiciones</a> y <a href="">Aviso de privacidad</a>
            </div>
        </form>
    </div>
</body>
</html>