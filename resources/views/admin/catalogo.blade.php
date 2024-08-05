
<!-- OJITO CRUZ, NADA JALA, SOLO ES UN RECORDATORIO, QUE NO JALA --->
@extends('layout.paginaInicio')

@section('title', 'Catálogo Administrador')

@section('style')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    .property-card {
        display: flex;
        margin-bottom: 20px;
    }
    .property-image {
        width: 600px;
        height: 285px;
        background-color: #ccc;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
    }
    .property-details {
        flex: 1;
    }
    .property-buttons {
        margin-top: 10px;
    }
    .property-buttons button {
        margin-right: 10px;
    }
</style>
@endsection

@section('body')
<div class="container mt-5">
    <h1>Catálogo de Publicaciones</h1>
    <div class="property-card">
        <div class="property-image">
            600 x 285
        </div>
        <div class="property-details">
            <h2>$ {property.Titulo}</h2>
            <p>$ {property.user_id} Usuario</p>
            <p>$ {property.Precio}</p>
            <p>$ {property.Recamaras} Recámaras</p>
            <p>$ {property.Baños} Baños</p>
            <p>$ {property.Area} M² construidos</p>
            <div class="property-buttons">
                <button class="btn btn-success" onclick="alert('no seas boludo, no jala, ten paciencia por favor, no somos genios como elon musk que se desbolquea de twitter para seguir peleando con maudro .');">Verificar</button>
                <button class="btn btn-danger" onclick="alert('no seas boludo, no jala, ten paciencia por favor, no somos genios como elon musk que se desbolquea de twitter para seguir peleando con maudro ');">Eliminar</button>
                <button class="btn btn-warning"onclick="alert('no seas boludo, no jala,ten paciencia por favor, no somos genios como elon musk que se desbolquea de twitter para seguir peleando con maudro .');">Suspender Publicación</button>
            </div>
        </div>
    </div>
    
</div>
@endsection