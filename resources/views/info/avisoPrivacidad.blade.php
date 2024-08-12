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
        <h1>Politicas de privacidad</h1>
        <p class="text-break lh-1">
            Bienvenido a <strong>Instate Inmuebles</strong>, un portal de venta de inmuebles creado por <strong>INSTATE INVESTMENTS S.A. de C.V.</strong>. 
            Al utilizar este sitio web, los visitantes aceptan los siguientes términos y condiciones. Si no está de acuerdo con ellos, le pedimos que no utilice este portal.
        </p>
        
        <p class="text-break lh-1">
            <strong>1. Aceptación de Términos:</strong> Al acceder y utilizar el portal <strong>Instate Inmuebles</strong>, usted acepta estar sujeto a estos términos y condiciones. 
            Si no está de acuerdo con alguna parte, debe abstenerse de utilizar el sitio.
        </p>
        
        <p class="text-break lh-1">
            <strong>2. Privacidad y Protección de Datos:</strong> La información personal que proporcione al utilizar <strong>Instate Inmuebles</strong> 
            está protegida conforme a la Ley de Protección de Datos Personales. INSTATE INVESTMENTS maneja su información de acuerdo con nuestra 
            Política de Privacidad, que se detalla en una sección específica del portal.
        </p>
        
        <p class="text-break lh-1">
            <strong>3. Modificación de Términos:</strong> <strong>INSTATE INVESTMENTS S.A. de C.V.</strong> se reserva el derecho de modificar estos términos y condiciones 
            en cualquier momento. Cualquier cambio entrará en vigor inmediatamente después de su publicación en el sitio. Al continuar utilizando 
            <strong>Instate Inmuebles</strong> tras las modificaciones, usted acepta estar sujeto a los términos actualizados.
        </p>
        
        <p class="text-break lh-1">
            <strong>4. Uso del Sitio:</strong> El portal <strong>Instate Inmuebles</strong> está destinado exclusivamente para personas mayores de 18 años. 
            Los usuarios deben utilizar el sitio de manera responsable y legal, y evitar cualquier actividad que pueda dañar el sistema, los servicios, o a otros usuarios.
        </p>
        
        <p class="text-break lh-1">
            <strong>5. Limitación de Responsabilidad:</strong> <strong>INSTATE INVESTMENTS</strong> no se hace responsable de posibles errores en la información 
            proporcionada en el sitio ni del uso incorrecto de los servicios por parte de los usuarios. Además, no se garantiza el éxito de proyectos o 
            negocios basados en la información contenida en <strong>Instate Inmuebles</strong>.
        </p>
        
        <p class="text-break lh-1">
            <strong>6. Propiedad Intelectual:</strong> Todo el contenido presente en <strong>Instate Inmuebles</strong>, incluidos textos, imágenes, logotipos, y gráficos, 
            está protegido por derechos de autor y es propiedad de <strong>INSTATE INVESTMENTS S.A. de C.V.</strong>. Queda prohibido el uso no autorizado de dicho contenido.
        </p>
        
        <p class="text-break lh-1">
            <strong>7. Información sobre Inmuebles:</strong> La información sobre los inmuebles publicada en <strong>Instate Inmuebles</strong> es proporcionada directamente 
            por los vendedores finales. <strong>INSTATE INVESTMENTS</strong> no se responsabiliza por la veracidad o exactitud de esta información.
        </p>
        
        <p class="text-break lh-1">
            <strong>8. Disponibilidad de Servicios:</strong> Los servicios ofrecidos a través de <strong>Instate Inmuebles</strong> están disponibles únicamente para personas 
            con capacidad legal para contratar. <strong>INSTATE INVESTMENTS</strong> no se responsabiliza por la seguridad de la información proporcionada por los usuarios 
            en el portal o en sitios asociados.
        </p>
        
        <p class="text-break lh-1">
            <strong>9. Jurisdicción:</strong> Cualquier controversia relacionada con estos términos y condiciones se regirá por las leyes de México y será resuelta 
            en los tribunales competentes de Torreón, Coahuila.
        </p>
    </div>
</div>

<img src="{{ asset('/Imagenes/Nosequesea.png') }}" id="nosequesea">

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
                    <a href="https://www.facebook.com/instatemx">
                        <img src="{{ asset('Imagenes/iconoFacebook.png')}}">
                    </a>
                </div>
                <div class="container-social">
                    <a href="">
                        <img src="{{ asset('Imagenes/iconoTwitter.png')}}">
                    </a>
                </div>
                <div class="container-social">
                    <a href="https://www.instagram.com/instatemx/">
                        <img src="{{ asset('Imagenes/iconoInstagram.png')}}">
                    </a>
                </div>
            </div>
            <div class="container-info2">
                <h2>Legal</h2>
                <hr>
                <a href="/Legal/PoliticasPrivacidad">Términos y Condiciones - Instate Inmuebles</a><br><br><br><br>
            </div>
            <div class="container-info2">
                <h2>Sobre</h2>
                <hr>
                <a href="/nosotros">Nosotros</a><br><br><br><br>
             </div>
        </div>
    </footer>
@endsection
@section('js')
@endsection