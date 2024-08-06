<!DOCTYPE html>
<head>
    <title>Ya valiste krnal</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        font-family: 'Roboto';
    }

    .footer{
        width: 100%; 
        height: 60vw;
        margin-top: 10vw;
    }
    
    .container{
        margin-top: 20vw;
        padding: 20px 0 20px 0;
        text-align: center;
        background-color: #fffffff2;
        width: 60vw;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        margin-left: 21vw;
    }

    img{
        width: 40vw;
        margin-top: 2vh;
    }

    h1{
        font-weight: normal;
        margin-bottom: 10px;
    }
</style>
<body>
    <img src="{{asset('Imagenes/LOGO2.png')}}">
    <div class="container">
        <h1>{{$detalles['titulo']}}</h1>
        <p>{{$detalles['cuerpo']}}</p>
    </div>
    <img src="{{asset('Imagenes/Sea-Water.png')}}" class="footer">
</body>
</html>