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
    <div class="modalRegistrate2">
        <form id="nuevoRegistrateForm">
            @csrf
            <div class="modal-body">
                <h2>Regístrate</h2>
            <div class="form-group">
                <label for="inputContraseña">Contraseña:</label>
                <input type="password" class="form-control mb-3" placeholder="Crea una contraseña segura" id="inputContraseña" name="password" required>
            </div>
            <br>
            <button type="submit" class="bt-blue">Continuar</button>
            
            <div class="small">
                <p>Al continuar estás aceptando los</p>
                <a href="">Términos y condiciones</a> y <a href="">Aviso de privacidad</a>
            </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>