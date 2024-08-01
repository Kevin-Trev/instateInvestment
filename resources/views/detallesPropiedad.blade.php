@extends('layout.paginaInicio')

@section('style')
    <style>
        .retroceder{
            color: #6a6e6f;
            cursor: pointer;
            margin-left: 2%;
        }

        .retroceder h6{
            font-size: 18px;
        }

        .propiedadContainer{
            display: flex;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .carrousel-img{
            display: block;
            width: 500px;
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

        .text{
            color: #6a6e6f;
            opacity: 0.7;
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
                        <img src="{{asset('Imagenes/juanGuarnizo.png')}}" class="carrousel-img" alt="...">
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
            </div>
            <footer>
                <button class="wasa"><img src="{{asset('Imagenes/whatsappLogo.png')}}">Enviar mensaje</button>
            </footer>
        </div>
    </div>
@endsection

@section('js')
    
@endsection