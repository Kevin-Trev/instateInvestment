@extends('layout.paginaInicio')

@section('style')
    <style>
        .retroceder{
            color: #6a6e6f;
            cursor: pointer;
            margin-left: 2%;
            width: 230px;
        }

        .retroceder h6{
            font-size: 18px;
        }

        .propiedadContainer{
            margin-top: 30px;
            display: flex;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            width: 1300px;
            height: 420px;
        }

        .carrousel-img{
            display: block;
            width: 600px;
            height: 400px;
        }

        .propiedadContainer .disponible button{
            cursor: default;
            padding: 3px;
            margin: 30px 0 10px 15px;
        }

        .propiedadContainer .carousel{
            padding: 10px;
        }

        .roomsContainer img{
            width: 25px;
        }

        .roomsContainer{
            margin-bottom: 10px;
        }

        .disponible h4{
            color: #3370FF;
            font-size: 28px;
        }

        .container h3{
            margin: 40px 0 10px 30px;
        }

        .text{
            color: #6a6e6f;
            opacity: 0.7;
        }

        .wasa img{
            width: 25px;
            margin: 5px 5px 5px 5px;
        }

        .wasa{
            background-color: lime;
            color: #FFFFFF;
            border-radius: 8px;
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .propiedadContainer .wasa{
            font-size: 16px;
            transform: translate(380px, 50px);
        }

        .disponible{
            padding: 25px;
        }

        #carouselExample{
            width: 650px;
            height: 400px;
        }

        .card {
            width: 300px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-left: ;
            height: auto;
        }

        .image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .moreHouses{

            display: flex;
            padding: 25px 0 40px 30px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .recamaras img{
            width: 20px;
            height: 20px;
        }

        .recamaras p{
            color: #6a6e6f;
            font-size: 16px;
            margin-left: 5px;
        }

        .recamaras{
            float: left;
            display: flex;
            width: 25px;
            height: 25px;
            margin-right: 20px;
            margin-bottom: 15px;
        }

        .card-content{
            padding: 12px;
        }

        .card-disponible{
            margin-bottom: 10px;
        }

        .card-disponible button{
            margin-right: 5px;
            padding: 2px;
        }

        .card-content h4{
            color: #3370FF;
            font-size: 16px;
        }

        .datos{
            margin-top: 50px;
        }

        .datos .wasa{
            padding: 4px;
            font-size: 12px;
        }

        .datos .wasa img{
            width: 22px;
            height: 22px;
        }

        .btn{
            display: flex;
            margin-left: 6px;
            gap: 20px;
        }

        .btn-blue{
            padding: 6px;
            font-size: 12px;
        }

        .datos h4{
            font-size: 36px;
        }

        .datos p{
            color:#6a6e6f; 
            font-size: 12px;
        }

        #comentariosContainer{
            border-radius: 8px;
            margin-top: 30px;

            height: auto;
            padding-bottom: 5px;
        }

        #comentariosContainer h3{
            padding: 20px 0 0 10px;
        }

        .comentario{
            width: 90%;
            margin: 0 0 20px 60px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .comentario img{
            width: 40px;
            height: 40px;
            border-radius: 100%;
            margin: 10px 0 10px 10px;
        }

        .user{
            display: flex;
        }

        .user p{
            color: #6a6e6f;
            margin: 15px 0 0 10px;
        }

        .agregarComentario img{
            width: 40px;
            height: 40px;
            border-radius: 100%;
            margin: 10px 0 10px 20px;
        }

        .agregarComentario {
            margin: 20px 0 20px 0;
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .agregarComentario .btn-blue{
            font-size: 16px;
            padding: 8px;
            margin-left: 10px;
        }

        textarea{
            resize: none;
        }

        .textContainer{
            margin-left: 20px;
            padding-bottom: 20px;
        }

        .comentario .user .date{
            margin-left: 70%;
        }

        #page-footer{
            display: flex;
            gap: 20px;
            padding-top: 20px;
        }
    </style>
@endsection

@section('body')
    <div class="container">
        <div class="retroceder" onclick="history.back()">
            <h6>↩ Regresar a la navegación</h6>
        </div>
        <h2>Domicilio de la propiedad</h2>
        <p>Ubicacion (ciudad) de la propiedad</p>
        <div class="propiedadContainer">
                <div id="carouselExample" class="carousel carousel-fade">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{asset('Imagenes/Fondo-seccion1.png')}}" class="carrousel-img" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('Imagenes/juanGuarnizo.png')}}" class="carrousel-img" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('Imagenes/juanGuarnizo.png')}}" class="carrousel-img" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
            <div class="disponible">
                <button class="btn-white">Venta</button>
                <button class="btn-white">Renta</button>
                <h4>Precio de la propiedad</h4>
                <div class="roomsContainer">
                    <img src="{{asset('Imagenes/bañeraSimbolo-black.png')}}">
                    <span>1 Baños</span>
                </div>
                <div class="roomsContainer">
                    <img src="{{asset('Imagenes/juanGuarnizo-black.png')}}">
                    <span>2 Recámaras</span>
                </div>
                <p class="text">Ubicacion más exacta de la propiedad</p>
                <footer>
                    <a href=""><button class="wasa"><img src="{{asset('Imagenes/whatsappLogo.png')}}">Enviar mensaje</button></a>
                </footer>
            </div>
        </div>

        <div id="comentariosContainer">
            <h3>Comentarios</h3>
            <div class="agregarComentario">
            <img src="https://picsum.photos/300/200">
                <form action="">
                    <div class="input-group">
                        <textarea name="" id="" cols="100" rows="1" class="form-control"></textarea>
                        <button class="btn-blue" type="submit">Añadir comentario</button>
                    </div>
                </form>
            </div>
            <div class="comentario">
                <div class="user">
                    <img src="https://picsum.photos/300/200">
                    <p>Nombre del usuario</p>
                    <p class="date">20/01/2024</p>
                </div>
                <p class="textContainer">Este es un comentario de prueba para verificar que funcione correctamente</p>
            </div>
            <div class="comentario">
                <div class="user">
                    <img src="https://picsum.photos/300/200">
                    <p>Nombre del usuario</p>
                    <p class="date">20/01/2024</p>
                </div>
                <p class="textContainer">Este es un comentario de prueba para verificar que funcione correctamente</p>
            </div>
        </div>

        <h3>Explora más propiedades cercanas</h3>

        <div class="moreHouses">
            <div class="card">
                <img src="https://picsum.photos/300/200" class="image">
                <div class="card-content">
                    <div class="card-disponible">
                        <button class="btn-white">Venta</button>
                        <button class="btn-white">Renta</button>
                    </div>
                    <span class="recamaras">
                        <img src="{{asset('Imagenes/juanGuarnizo.png')}}">
                        <p>1</p>
                    </span>
                    <span class="recamaras">
                        <img src="{{asset('Imagenes/bañeraSimbolo.png')}}">
                        <p>2</p>
                    </span>
                    <div class="datos">
                        <h4>$2,250,000</h4>
                        <p>Ubicación de la propiedad</p>
                        <div class="btn">
                            <button class="btn-blue">Ver más detalles</button>
                            <button class="wasa"><img src="{{asset('Imagenes/whatsappLogo.png')}}">Enviar mensaje</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://picsum.photos/300/200" class="image">
                <div class="card-content">
                    <div class="card-disponible">
                        <button class="btn-white">Venta</button>
                        <button class="btn-white">Renta</button>
                    </div>
                    <span class="recamaras">
                        <img src="{{asset('Imagenes/juanGuarnizo.png')}}">
                        <p>1</p>
                    </span>
                    <span class="recamaras">
                        <img src="{{asset('Imagenes/bañeraSimbolo.png')}}">
                        <p>2</p>
                    </span>
                    <div class="datos">
                        <h4>$2,250,000</h4>
                        <p>Ubicación de la propiedad</p>
                        <div class="btn">
                            <button class="btn-blue">Ver más detalles</button>
                            <button class="wasa"><img src="{{asset('Imagenes/whatsappLogo.png')}}">Enviar mensaje</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://picsum.photos/300/200" class="image">
                <div class="card-content">
                    <div class="card-disponible">
                        <button class="btn-white">Venta</button>
                        <button class="btn-white">Renta</button>
                    </div>
                    <span class="recamaras">
                        <img src="{{asset('Imagenes/juanGuarnizo.png')}}">
                        <p>1</p>
                    </span>
                    <span class="recamaras">
                        <img src="{{asset('Imagenes/bañeraSimbolo.png')}}">
                        <p>2</p>
                    </span>
                    <div class="datos">
                        <h4>$2,250,000</h4>
                        <p>Ubicación de la propiedad</p>
                        <div class="btn">
                            <button class="btn-blue">Ver más detalles</button>
                            <button class="wasa"><img src="{{asset('Imagenes/whatsappLogo.png')}}">Enviar mensaje</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://picsum.photos/300/200" class="image">
                <div class="card-content">
                    <div class="card-disponible">
                        <button class="btn-white">Venta</button>
                        <button class="btn-white">Renta</button>
                    </div>
                    <span class="recamaras">
                        <img src="{{asset('Imagenes/juanGuarnizo.png')}}">
                        <p>1</p>
                    </span>
                    <span class="recamaras">
                        <img src="{{asset('Imagenes/bañeraSimbolo.png')}}">
                        <p>2</p>
                    </span>
                    <div class="datos">
                        <h4>$2,250,000</h4>
                        <p>Ubicación de la propiedad</p>
                        <div class="btn">
                            <button class="btn-blue">Ver más detalles</button>
                            <button class="wasa"><img src="{{asset('Imagenes/whatsappLogo.png')}}">Enviar mensaje</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="page-footer">
        <div class="container-info">
            <img src="{{ asset('/Imagenes/LOGO.png') }}">
            <p>Instate es una marga registrada por <br>Instate Investments S.A de C.V. en <br>alianza con Design Construcciones.</p>
        </div>
    
        <div class="juntos">
            <div class="container-info">
                <h2>Contacto</h2>
                <hr>
                <b>MINA 330 INT. 5 COL.CENTRO <br>MONTERREY, NUEVO LEÓN. MÉXICO <br>812-433-1672</b>
                
                <br>
    
                <div class="container-social">
                    <a href="">
                        <img src="{{ asset('Imagenes/iconoFacebook.png')}}">
                    </a>
                </div>
                <div class="container-social">
                    <a href="">
                        <img src="{{ asset('Imagenes/iconoTwitter.png')}}">
                    </a>
                </div>
                <div class="container-social">
                    <a href="">
                        <img src="{{ asset('Imagenes/iconoInstagram.png')}}">
                    </a>
                </div>
            </div>
            <div class="container-info2">
                <h2>Legal</h2>
                <hr>
                <a href="/legal">Aviso legal</a><br><br><a href="/privacidad">Politica de privacidad </a><br><br><a href="/privacidad">Politica de cookies</a>
            </div>
            <div class="container-info2">
                <h2>Sobre</h2>
                <hr>
                <a href="/nosotros">Nosotros</a><br><br><a href="/mision">Misión</a><br><br><a href="/vision">Visión</a>
            </div>
        </div>
    </footer>
@endsection

@section('js')
    
@endsection