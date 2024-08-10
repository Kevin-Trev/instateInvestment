<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('Imagenes/iconito.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <title>Instante Investment</title>
    <style>
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

    a{
        color: #FFFFFF;
        text-decoration: none;
    }

    h4{
        text-align: center;
        padding-bottom: 20px;
        color: rgb(128, 127, 129);
    }

    img{
        margin: -100px 0 -90px 4%;
        height: 400px;
        width: 400px;
    }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{asset('Imagenes/error.png')}}">
        <h4>¡Ups, parece que este enlace ya había expirado!</h4>
        
        <button class="bt-blue"><a href="{{route('inicio')}}">Volver al inicio</a></button>
    </div>
</body>
</html>