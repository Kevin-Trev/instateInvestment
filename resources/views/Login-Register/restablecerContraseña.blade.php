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
    </style>
</head>
<body>
    <div class="container" id="email">
        <h2>Restablecer contraseña</h2>
        <form action="/actualizar/contraseña" method="POST" id="formPassword">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group">
                <label for="Contraseña">Nueva contraseña:</label>
                <input type="text" class="form-control" id="Contraseña" placeholder="Ingrese la nueva contraseña" name="email">
            </div>
            <div class="form-group">
                <label for="confirmacionContraseña">Confirmar contraseña:</label>
                <input type="password" class="form-control" id="confirmacionContraseña" placeholder="Confirme su contraseña" name="password">
            </div>
            
            <button type="submit">Enviar correo de recuperación</button>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    
</script>
</html>