@extends('layout.layout')

@section('title', 'Crear cuenta')

@section('style')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<style>
    body {
        overflow-y: hidden;
        text-align: center;
    }
   .container {
        max-width: 500px;
        margin: 60px auto;
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }
    img{
        width: 80px;
        height: 80px;
        margin-top: 100px;
        margin-bottom: 50px;
    }
   .title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .bt-blue {
    background-color: #3370FF;
    color: #FFFFFF;
    padding: 8px 100px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-bottom: 5px;
    margin-top: 20px;
}
.bt-blue:hover{
    background-color: #002E99;
    transition: .5s;
}

.bt-transparent{
    background-color: transparent;
    border: none;
    color: #004CFF;
    outline: none;
    box-shadow: none;
    padding: 8px 120px;
    cursor: pointer;
    margin-bottom: 120px; 
}
</style>
@endsection

@section('body')
<div class="container">
    <img src="{{asset('Imagenes/Palomita.png')}}">
    <h2 class="title">¡Registro exitoso!</h2>
    <p>¡Gracias <span id="username">{{Auth::user()->Nombre}}</span> por formar parte de Instate!</p>
    <button class="bt-blue">Publicar propiedad</button>
    <br>
    <button class="bt-transparent">Continuar a Mi Perfil</button>
</div>
@endsection