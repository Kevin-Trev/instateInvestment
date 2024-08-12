@extends('layout.layout')

@section('title', 'Instate Investment')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .dropdown-menu{
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .dropdown-menu a{
            color: rgb(78, 78, 78);
        }

        .dropdown-menu{
            transform: translate(150px, 30px);
        }

        .dropdown-menu{
            transform: translate(25vw, 30px);
        }

        .dropdown-menu a{
            font-size: 3vw;
        }

                .dropdown-menu{
            transform: translate(32vw, 30px);
        }

        .dropdown-menu a{
            font-size: 14px;
        }

        .dropdown-item{
            margin-bottom: 5px;
        }

        .dropdown-menu .dropdown-item:hover{
            color: black;
            background-color: transparent;
            transition: .3s;
        }
    </style>
@endsection

@section('body')
    
        <div id="seccion1">
            <header class="header">
                <div class="logo">
                    <a href="{{route('inicio')}}">
                        <img src="{{asset('/Imagenes/LOGO2.png')}}">
                    </a>
                </div>
                    <div class="button-container">
                        @guest
                            <a href="{{route('registro')}}"><button class="bt-white">Registrate</button></a>
                            <a href="{{route('login')}}"><button class="bt-blue" type="button">Iniciar Sesión</button></a>
                        @endguest
                        @auth
                        <div class="dropdown">
                          <button class="bt-blue dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          {{Auth::user()->Nombre}}
                          </button>
                          <ul class="dropdown-menu">
                            <div style="margin-top:100px"></div>
                            <li><a class="dropdown-item" href="{{route('perfil', Auth::user()->id)}}">Mi perfil</a></li>
                            <li><a class="dropdown-item" href="{{route('catalogo')}}">Catálogo</a></li>
                            <li>
                                <form style="display: inline" action="/logout" method="POST">
                                    @csrf
                                    <a href="#" onclick="this.closest('form').submit()" class="dropdown-item">Cerrar Sesión</a>
                                </form>
                            </li>
                          </ul>
                        </div>   
                        @endauth
                    </div>
            </header>
            <div class="clearfix"></div>
            <div class="filtro">
                <h2> Encuentra tu próxima oportunidad de <br>negocio en bienes raíces</h2>
                <div class="input-container">
                    <input type="radio" name="opcion" value="Vendible" id="ip-venta" checked>
                    <label for="ip-venta" class="Custom-Radio">Venta</label>
                    <input type="radio" name="opcion" value="Rentable" id="ip-renta">
                    <label for="ip-renta" class="Custom-Radio">Renta</label> 
                </div>
                <div class="input-groups">
                    <input type="text" id="ciudad" placeholder="Buscar por ciudad..."><input type="submit" id="buscar" value=" Buscar">
                </div>
            </div>
        </div>

    <div id="seccion2">
        <h2>Comienza a vender con nosotros y <br><span>0</span>obtén GRATIS un diagnóstico de <br> <span>0</span>posibilidades para tu propiedad</h2>
            <div class="img-container">
                <img src="{{ asset('/Imagenes/Image 3.png') }}" class="img1">
                <img src="{{ asset('/Imagenes/Image 2.png') }}" class="img2">
                <img src="{{ asset('/Imagenes/Image 1.png') }}" class="img3">
            </div>
        <a href="#"><button class="bt-cian">Obtén tu diagnóstico gratis</button></a>
    </div>

    <div id="seccion3">
        <h2>Comenzar tu próximo desarrollo inmobiliario es muy sencillo</h2>
        <div class="steps-container" >
            <div class="circle-container">
                <img src="/Imagenes/glass.png">
            </div>
            <p>Busca propiedades cercanas de tu ubicación</p>
        </div>
        <div class="steps-container" >
            <div class="circle-container">
                <img src="/Imagenes/dollar-currency-symbol.png">
            </div>
            <p>Conoce el potencial de la propiedad de tu agrado</p>
        </div>
        <div class="steps-container">
            <div class="circle-container">
                <img src="/Imagenes/clipboard.png" >
            </div>
            <p>Comienza a planear tu próximo desarrollo inmobiliario</p>
        </div>
    </div>

<div id="seccion4">
    <div class="video">
        <img src="{{asset('/Imagenes/Video.png')}}">
    </div>
</div>

<div id="seccion5">
    <h2>Conoce también nuestros planes de asesoría con <br>Inteligencia Artificial</h2>
    <div class="membership-container">
        <h3>DIAGNÓSTICO</h3>
        <p>De uso de sueldo y oportunidades de negocio</p>
        <h1>$57 USD</h1>
        <p class="pe">Incluye:</p>
        <ul>
            <li><span>&#10003;</span>Posibilidades de uso de suelo de un terreno específico de acuerdo a la reglamentación del IMPLAN correspondiente.</li>
            <br>
            <li><span>&#10003;</span>Hasta 4 opciones de desarrollo con mayor rentabilidad (Si, te digo si te conviene desarrollar una casa, una plaza comercial o una torre de departamentos, por ejemplo).</li>
            <br>
            <li><span>&#10003;</span>Proyecciones de rentabilidad para las opciones que te propongo.</li>
            <br>
        </ul>
        <div class="img-sp">
            <span><img src="{{ asset('/Imagenes/PDF.png') }}">PDF por correo electrónico</span>
            <br>
            <span><img src="{{ asset('/Imagenes/Reloj.png') }}">Hasta 24 horas hábiles</span>

        </div>
        <footer class="container-foot">
            <img src="{{ asset('/Imagenes/Image 1.png') }}" >
            <button class="bt-cian">Obtener</button>
        </footer>
    </div>
    <div class="membership-container">
        <h3>DIAGNÓSTICO</h3>
        <p>De uso de sueldo y oportunidades de negocio</p>
        <h1>$57 USD</h1>
        <p class="pe">Incluye:</p>
        <ul>
            <li><span>&#10003;</span>Posibilidades de uso de suelo de un terreno específico de acuerdo a la reglamentación del IMPLAN correspondiente.</li>
            <br>
            <li><span>&#10003;</span>Hasta 4 opciones de desarrollo con mayor rentabilidad (Si, te digo si te conviene desarrollar una casa, una plaza comercial o una torre de departamentos, por ejemplo).</li>
            <br>
            <li><span>&#10003;</span>Proyecciones de rentabilidad para las opciones que te propongo.</li>
            <br>
        </ul>
        <div class="img-sp">
            <span><img src="{{ asset('/Imagenes/PDF.png') }}">PDF por correo electrónico</span>
            <br>
            <span><img src="{{ asset('/Imagenes/Reloj.png') }}">Hasta 24 horas hábiles</span>
        </div>
        <footer class="container-foot">
            <img src="{{ asset('/Imagenes/Image 1.png') }}" >
            <button class="bt-cian">Obtener</button>
        </footer>
    </div>
    <div class="membership-container">
        <h3>DIAGNÓSTICO</h3>
        <p>De uso de sueldo y oportunidades de negocio</p>
        <h1>$57 USD</h1>
        <p class="pe">Incluye:</p>
        <ul>
            <li><span>&#10003;</span>Posibilidades de uso de suelo de un terreno específico de acuerdo a la reglamentación del IMPLAN correspondiente.</li>
            <br>
            <li><span>&#10003;</span>Hasta 4 opciones de desarrollo con mayor rentabilidad (Si, te digo si te conviene desarrollar una casa, una plaza comercial o una torre de departamentos, por ejemplo).</li>
            <br>
            <li><span>&#10003;</span>Proyecciones de rentabilidad para las opciones que te propongo.</li>
            <br>
        </ul>
        <div class="img-sp">
            <span><img src="{{ asset('/Imagenes/PDF.png') }}">PDF por correo electrónico</span>
            <br>
            <span><img src="{{ asset('/Imagenes/Reloj.png') }}">Hasta 24 horas hábiles</span>
        </div>
        <footer class="container-foot">
            <img src="{{ asset('/Imagenes/Image 1.png') }}" >
            <button class="bt-cian">Obtener</button>
        </footer>
    </div>
</div>

<img src="{{ asset('/Imagenes/Nosequesea.png') }}" id="nosequesea">

<footer id="page-footer">
    <div class="container-info">
        <img src="{{ asset('/Imagenes/LOGO.png') }}">
        <p>Instate es una marca registrada por <br>Instate Investments S.A de C.V. en <br>alianza con Design Construcciones.</p>
    </div>
  
    <br>
  
    <div class="container-info" id="este">
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
            <a href="/legal">Aviso legal</a><br><br><a href="{{route('avisoPrivacidad')}}">Politica de privacidad </a><br><br><a href="/privacidad">Politica de cookies</a>
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
    $(document).ready(function() {
        $('#buscar').on('click', function(){
            var transaccion = $('input[name=opcion]:checked').val();
            var ciudad = $('#ciudad').val();

            localStorage.setItem('opcion' , transaccion);
            localStorage.setItem('ciudad' , ciudad);

            window.location.href = '/views/catalogo';
        });
    });
</script>
    
@endsection