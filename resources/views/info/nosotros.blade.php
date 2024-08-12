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
                    <li><a class="dropdown-item" href="{{route('perfil')}}">Mi perfil</a></li>
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
        INSTATE INVESTMENTS S.A. de C.V. es una empresa mexicana especializada en servicios referidos a la compra y venta de inmuebles.
        Nos hemos dedicado a ofrecer a nuestros clientes una amplia gama de servicios como: 
        diagnóstico de suelo, de oportunidades de negocio, estudios de mercado, planificaciones de proyectos ejecutivos etc. 
        Nuestro objetivo es facilitar el proceso de compra, venta y renta de inmuebles, brindando un servicio 
        excepcional y soluciones innovadoras.
    </p>
    
    <p class="text-break lh-1">
        Nuestra misión es conectar a personas y empresas con el inmueble ideal, proporcionando un servicio 
        personalizado y eficiente que cumpla con las expectativas de nuestros clientes, y contribuyendo al 
        desarrollo del mercado inmobiliario en México.
    </p>
    <p class="text-break lh-1">
        Buscamos ser líderes en el sector inmobiliario a nivel nacional, reconocidos por nuestra innovación, integridad 
        y compromiso con la satisfacción del cliente, y por ofrecer una plataforma digital que transforme la 
        manera en que las personas compran y venden inmuebles.
    </p>

    <p class="text-break lh-1">
        En INSTATE INVESTMENTS, nos comprometemos a ofrecer un servicio personalizado que se adapte a las 
        necesidades individuales de cada cliente. Estamos aquí para asegurarnos de que cada transacción sea 
        transparente, segura y exitosa.
    </p>
    </div>
</div>

<img src="{{ asset('/Imagenes/Nosequesea.png') }}" id="nosequesea">

<footer style="background-color:#004CFF; width: 100%;">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 text-center text-md-start mb-4 mb-md-0 my-2">
                <img src="{{ asset('/Imagenes/LOGO.png') }}" alt="Logo" class="mb-3" style="max-width: 180px;">
                <p style = "color:white;">Instate es una marca registrada por <br>Instate Investments S.A de C.V. en <br>alianza con Design Construcciones.</p>
            </div>

            <div class="col-md-4 text-center text-md-start mb-4 mb-md-0 my-5">
                <h2 style = "color:white;">Contacto</h2>
                <hr style="border-color: rgb(255, 255, 255);">
                <b style = "color:white;">MINA 330 INT. 5 COL.CENTRO <br style = "color:white;">MONTERREY, NUEVO LEÓN. MÉXICO <br style = "color:white;">812-433-1672</b>
                
                <div class="d-flex justify-content-center justify-content-md-start mt-3">
                    <a href="https://www.facebook.com/instatemx" class="me-2">
                        <img src="{{ asset('Imagenes/iconoFacebook.png') }}" alt="Facebook" style="max-width: 30px;">
                    </a>
                    <a href="#" class="me-2">
                        <img src="{{ asset('Imagenes/iconoTwitter.png') }}" alt="Twitter" style="max-width: 30px;">
                    </a>
                    <a href="https://www.instagram.com/instatemx/">
                        <img src="{{ asset('Imagenes/iconoInstagram.png') }}" alt="Instagram" style="max-width: 30px;">
                    </a>
                </div>
            </div>

            <div class="col-md-2 text-center text-md-start my-5">
                <h2 style = "color:white;">Legal</h2>
                <hr style="border-color: rgb(255, 255, 255);">
                <a href="/Legal/PoliticasPrivacidad" style="color: white;">Términos y Condiciones - Instate Inmuebles</a>
            </div>

            <div class="col-md-2 text-center text-md-start my-5">
                <h2 style = "color:white;">Sobre</h2>
                <hr style="border-color: rgb(255, 255, 255);">
                <a href="/nosotros" style="color: white;">Nosotros</a>
            </div>
        </div>
    </div>
</footer>
@endsection
@section('js')
@endsection