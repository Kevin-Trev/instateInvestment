@extends('layout.layout')

@section('title', 'Politicas de privacidad')
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

        p{
            font-size: 20px;
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
    <div class="mx-5">
        <h1>Sobre Nosotros</h1>
    <p class="text-break lh-1">
        <strong>INSTATE INVESTMENTS S.A. de C.V.</strong> es una empresa mexicana especializada en servicios referidos
        a la compra y venta de inmuebles.
        Nos hemos dedicado a ofrecer a nuestros clientes una amplia gama de servicios como: 
        diagnóstico de suelo, de oportunidades de negocio, estudios de mercado, planificaciones 
        de proyectos ejecutivos etc. 
        Nuestro objetivocin <strong> Instate Inmobiliaria</strong> es facilitar el proceso de compra,
        venta y renta de inmuebles, brindando un servicio excepcional y soluciones innovadoras.
    </p>

    <p class="text-break lh-1">
        Actualmente el portal se encuentre en desarrollo, pero nuestros desarrolladores se encuentran
        arduamente trabajando para birndar el servicio perfecto para usted. Si sufre algin fallo durante
        su estancia en la pagina, no dude en contactarnos, pues gracias a estos reportes podemos centrar
        nuestros esfuerzos en que usted tenga el mejor servicio posible. 
        
    </p>

    <h1>Mision</h1>
    <p class="text-break lh-1">
        Nuestra misión es conectar a personas y empresas con el inmueble ideal, proporcionando un 
        servicio personalizado y eficiente que cumpla con las expectativas de nuestros clientes, 
        y contribuyendo al desarrollo del mercado inmobiliario en México.Buscamos ser líderes en 
        el sector inmobiliario a nivel nacional, reconocidos por nuestra innovación, integridad 
        y compromiso con la satisfacción del cliente, y por ofrecer una plataforma digital que 
        transforme la manera en que las personas compran y venden inmuebles.
    </p>

    <p class="text-break lh-1">
        En <strong>INSTATE INVESTMENTS</strong>, nos comprometemos a ofrecer un servicio personalizado que se adapte a las 
        necesidades individuales de cada cliente. 
    </p>

    <h1>Vision</h1>
    <p class="text-break lh-1">
    Ser la promotora inmobiliaria de referencia del sector residencial en Mexico, 
    con vocación de implantación en todo el territorio nacional y con el humilde objetivo de hacer 
    las cosas bien, basándonos en un modelo profesional, en unos sólidos principios y valores y en
     la sistematización y mejora de procesos y producto. 
    </p>
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
            <a href="/legal">Aviso legal</a><br><br><a href="/legal">Politica de privacidad </a><br><br><a href="/legal">Politica de cookies</a>
        </div>
        <div class="container-info2">
            <h2>Sobre</h2>
            <hr>
            <a href="/nosotros">Nosotros</a><br><br><a href="/nosotros">Misión</a><br><br><a href="/nosotros">Visión</a>
        </div>
</footer>
@endsection
@section('js')
@endsection