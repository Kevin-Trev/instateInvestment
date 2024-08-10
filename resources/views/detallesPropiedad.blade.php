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

        .MsgRegistrate {
            width: 90%;
            padding: 5%;
            margin: 20px 0 20px 60px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
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

        @media(max-width: 391px){
            /* Inicio */
            .retroceder h6{
                font-size: 3.5vw;
            }

            .container h2{
                font-size: 6.5vw;
            }

            .container p{
                font-size: 4vw;
            }

            .propiedadContainer{
                width: 90vw;
                display: block;
                height: 120vh;
                margin-left: 8px;
            }

            #carouselExample{
                width: 100%;
                height: 50vw;   
            }

            .carrousel-img{
            width: 100%;
            height: 56vw;

            }

            .propiedadContainer .carousel{
            padding: 0;
            }

            .disponible{
                padding: 0 0 0 5vw;
            }

            .propiedadContainer .wasa{
                transform: translate(35vw, 2vh);
            }

            /* Seccion de comentarios */

            #comentariosContainer h3{
                font-size: 22px;
                padding: 0;
            }

            .agregarComentario .btn-blue{
            font-size: 3vw;
            padding: 8px;
            }

            .comentario{
            width: 80vw;
            margin: 0 0 20px 6vw;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .comentario img{
            width: 9vw;
            height: 9vw;
            border-radius: 100%;
            margin: 10px 0 10px 10px;
            }

            .comentario .user .date{
            margin-left: 10vw;
            font-size: 3.5vw;
            }

            .user p{
            font-size: 3.4vw;
            }

            .comentario .textContainer{
                font-size: 3.2vw;
            }

            /* Explorar mas propiedades seccion */

            .card{
                width: 42vw;
            }

            .moreHouses{
                padding: 10px 0 0 10px;
            }

            .recamaras{
                width: 6vw;
            }

            .datos h4{
                font-size: 6.5vw;
            }

            .datos p{
                font-size: 3vw;
            }

            .datos .wasa{
            padding: 2px;
            font-size: 2.5vw;
            }

            .datos .wasa img{
            width: 5vw;
            height: 5vw;
            }

            .btn{
            margin-left: 0;
            gap: 1vw;
            }

            .btn button{
                font-size: 2.5vw;
            }

            /* footer */

            #page-footer{
                width: 100%;
            }

            .container-info img{
                width: 120px;
                height: 120px;
                transform: translate(-150px, -20px);
            }
        }
    </style>
@endsection

@section('body')
    <div class="container">
        <div class="retroceder" onclick="location.href='{{route('catalogo')}}'">
            <h6>↩ Regresar a la navegación</h6>
        </div>
        <h2>{{$propiedad->Calle}} #{{$propiedad->num_exterior}}</h2> {{-- Domicilio de la Propiedad --}}
        <p>Ubicacion : {{$propiedad->Ciudad}} , {{$propiedad->Estado}}</p> {{-- Ciudad , Estado --}}
        <div class="propiedadContainer">
                <div id="carouselExample" class="carousel carousel-fade">
                    <div class="carousel-inner">
                        @if ($propiedad->imagenes_propiedad->isEmpty()) {{-- Si la Propiedad No tiene Imagen Coloca una de stock--}}
                            <div class="carousel-item active">
                                <img src="{{asset('Imagenes/Fondo-seccion1.png')}}" class="carrousel-img" alt="...">
                            </div>    
                        @endif
                        @foreach ($propiedad->imagenes_propiedad as $item => $image) {{-- Carga todas las imagenes de la propiedad --}}
                            <div class="carousel-item {{$item === 0 ? 'active' : ''}}">
                                <img src="{{asset('ImagesPublished/'.$image->src_image)}}" class="carrousel-img" alt="...">
                            </div>    
                        @endforeach
                    </div>
                    @if ($propiedad->imagenes_propiedad->count() > 1)  {{-- SI HAY MAS DE UNA IMAGEN APARECEN LOS BOTONES --}}
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    @endif
                </div>
            <div class="disponible">
                @if ($propiedad->Vendible)  {{-- SI ES VENDIBLE APARECE ETIQUETA --}}
                    <button class="btn-white">Venta</button>
                @endif
                @if ($propiedad->Rentable)  {{-- SI ES RENTABLE APARECE ETIQUETA --}}
                    <button class="btn-white">Renta</button> 
                @endif
                <h4>$ {{number_format($propiedad->Precio, 0, '.', ',')}} MXN</h4>
                <div class="roomsContainer">
                    <img src="{{asset('Imagenes/bañeraSimbolo-black.png')}}">
                    <span>{{$propiedad->Baños}} Baños</span>
                </div>
                <div class="roomsContainer">
                    <img src="{{asset('Imagenes/juanGuarnizo-black.png')}}">
                    <span>{{$propiedad->Recamaras}} Recámaras</span>
                </div>
                <p class="text">C. {{$propiedad->Calle}} #Ext. {{$propiedad->num_exterior ?: 'S/N'}} #Int. {{$propiedad->num_interior ?: 'S/N'}} Col. {{$propiedad->Colonia}} CP. {{$propiedad->Codigo_Postal}}</p>
                <footer>
                    <div class = "row btn col-12">
                      <a href="{{ route('propiedades.mapa', ['id' => $propiedad->ID_P]) }}"><button class="btn btn-primary col-6">Ver En Maps</button></a>
                      <a href="https://wa.me/{{$propiedad->users->Telefono}}"><button class="wasa"><img src="{{asset('Imagenes/whatsappLogo.png')}}">Enviar mensaje</button></a>
                    </div>
                </footer>
            </div>
        </div>

        <div id="comentariosContainer">
            <h3>Comentarios</h3>
            @if (Session::has('comentado'))  {{--Mensaje de comentario enviado--}}
                <div class="alert alert-success text-center" role="alert">{{ Session::get('comentado') }}</div>
            @endif
            @if (Session::has('comentario_eliminado'))   {{--Mensaje de comentario eliminado--}}
                <div class="alert alert-danger text-center" role="alert">{{ Session::get('comentario_eliminado') }}</div>
            @endif
            @auth
                <div class="agregarComentario">
                    <img src="https://picsum.photos/300/200">
                    <form action="/post/comentario" method="POST">
                        @csrf
                        <input type="number" name="user_id" value="{{Auth::user()->id}}" readonly hidden>
                        <input type="number" name="propiedad_id" value="{{$propiedad->ID_P}}" readonly hidden>
                        <div class="input-group">
                            <textarea name="Comentario" id="comentario" cols="100" rows="1" class="form-control"></textarea>
                            <button class="btn-blue" type="submit">Añadir comentario</button>
                        </div>
                    </form>
                </div>
                @foreach ($comentarios as $comentario)
                    <div class="comentario">
                        <div class="user">
                            @if ($comentario->users->Foto)
                            <img src="{{asset('ImagesPublished/'.$comentario->users->Foto)}}">  
                            @else
                            <img src="https://picsum.photos/300/200">  
                            @endif
                            <p>{{$comentario->users->name}}</p>
                            <p class="date">{{$comentario->Fecha}}</p>
                            @if (Auth::check() && Auth::user()->id === $comentario->users_id)
                            <button class="btn btn-danger"><a class="nav-link" href="/delete/comentario/{{$comentario->ID_COM}}">X</a></button>
                            @endif
                        </div>
                        <p class="textContainer">{{$comentario->Comentario}}</p>
                    </div>
                @endforeach
            @endauth
            @guest
                <div class="MsgRegistrate">
                    <h5>Para ver y publicar comentarios</h5><br>
                    <button class="btn btn-primary mx-auto"><a class="nav-link" href="{{route('login')}}">Iniciar Sesión</a></button>
                </div>
            @endguest
            {{-- <div class="comentario">
                <div class="user">
                    <img src="https://picsum.photos/300/200">
                    <p>Nombre del usuario</p>
                    <p class="date">20/01/2024</p>
                </div>
                <p class="textContainer">Este es un comentario de prueba para verificar que funcione correctamente</p>
            </div> --}}
        </div>

        <h3>Explora más propiedades cercanas</h3>

        <div class="moreHouses">
            @foreach ($moreProperties as $sugerencia)
            <div class="card">
                @if($sugerencia->main_image)
                <img src="{{asset('ImagesPublished/'.$sugerencia->main_image->src_image)}}" class="image">
                @else
                <img src="{{asset('Imagenes/Fondo-seccion1.png')}}" class="image" alt="...">
                @endif
                <div class="card-content">
                    <div class="card-disponible">
                        @if ($sugerencia->Vendible)  {{-- SI ES VENDIBLE APARECE ETIQUETA --}}
                            <button class="btn-white">Venta</button>
                        @endif
                        @if ($sugerencia->Rentable)  {{-- SI ES RENTABLE APARECE ETIQUETA --}}
                            <button class="btn-white">Renta</button> 
                        @endif
                    </div>
                    <span class="recamaras">
                        <img src="{{asset('Imagenes/juanGuarnizo.png')}}">
                        <p>{{$sugerencia->Recamaras}}</p>
                    </span>
                    <span class="recamaras">
                        <img src="{{asset('Imagenes/bañeraSimbolo.png')}}">
                        <p>{{$sugerencia->Baños}}</p>
                    </span>
                    <div class="datos">
                        <h4>$ {{number_format($sugerencia->Precio, 0, '.', ',')}} MXN</h4>
                        <p>{{$sugerencia->Calle}} #{{$sugerencia->num_exterior}}, {{$sugerencia->Colonia}}</p>
                        <div class="btn">
                            <button class="btn-blue"><a class="nav-link" href="/get/property/{{$sugerencia->ID_P}}">Ver más detalles</a></button>
                            <a href="https://wa.me/{{$sugerencia->users->Telefono}}"><button class="wasa"><img src="{{asset('Imagenes/whatsappLogo.png')}}">Enviar mensaje</button></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            {{-- <div class="card">
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
            </div> --}}
        </div>
    </div>

    <footer id="page-footer">
        <div class="container-info">
            <img src="{{ asset('/Imagenes/LOGO.png') }}">
            <p>Instate es una marga registrada por <br>Instate Investments S.A de C.V. en <br>alianza con Design Construcciones.</p>
        </div>
      
        <br>
      
            <div class="container-info">
                <h2>Contacto</h2>
                <hr>
                <b>MINA 330 INT. 5 COL.CENTRO <br>MONTERREY, NUEVO LEÓN. MÉXICO <br>812-433-1672</b>
                
                <br>
      
                <div class="container-social">
                    <a href="https://www.facebook.com/instatemx" target="_blank">
                        <img src="{{ asset('Imagenes/iconoFacebook.png')}}">
                    </a>
                </div>
                <div class="container-social">
                    <a href="">
                        <img src="{{ asset('Imagenes/iconoTwitter.png')}}">
                    </a>
                </div>
                <div class="container-social">
                    <a href="https://www.instagram.com/instatemx/" target="_blank">
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
      
      </footer>
@endsection

@section('js')
<script>

    function eliminarComentario(id){
        
    }
</script>
@endsection
