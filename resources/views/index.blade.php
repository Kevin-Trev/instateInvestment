@extends('layout.layout')

@section('title', 'Instate Investment')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('body')

    {{-- MODALES --}}

    <div class="modal fade" id="iniciarModal" tabindex="-1" aria-labelledby="iniciarModalLabel" aria-hidden="true" style="margin-top: 10px; border-radius: 8px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/login" method="POST" id="ingresarForm">
                    @csrf
                    <div>
                        <span data-bs-dismiss="modal" class="cerrarModal">&times;</span><br>
                        <h2>Iniciar sesión</h2>
                        @if (Session::has('error_login'))
                            <div class="alert alert-danger" id="errorLogin" role="alert">{{ Session::get('error_login') }}</div>
                        @endif
                        <div class="form-group">
                            <label for="inputCorreo">Correo electrónico</label>
                            <input type="email" class="form-control" name="email" placeholder="Ingresa tu correo electrónico" id="inputCorreo">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="inputContraseña">Contraseña</label>
                            <input type="password" name="password" class="form-control" placeholder= "Ingresa tu contraseña" id="inputContraseña">
                        </div>
                        <br>
                        <button class="bt-blue" type="submit">Ingresar</button>
                        <p class="line-text">─────────  o también puedes  ─────────</p>
                        <button class="bt-google"><img src="{{asset('/Imagenes/Logo-google.png')}}">Continuar con Google</button>
                        <div class="footer">
                            <a href="/registro">Registrate</a>
                            <p>Si aún no tienes cuenta</p>
                        </div>    
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- FIN DE MODALES --}}
    
        <div id="seccion1">
            <header class="header">
                <div class="logo">
                    <a href="">
                        <img src="{{asset('/Imagenes/LOGO2.png')}}">
                    </a>
                </div>
                    <div class="button-container">
                        @guest
                            <a href="{{route('nuevoEmail')}}"><button class="bt-white">Registrate</button></a>
                            <button class="bt-blue" type="button" data-bs-toggle="modal" data-bs-target="#iniciarModal">Iniciar Sesión</button>
                        @endguest
                        @auth
                            <div class="button-container">
                                <div class="dropdown-center">
                                    <button class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" type="button" style="margin: 10px">
                                    {{Auth::user()->name}}
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-center">
                                    <li><a class="dropdown-item" href="/hubs/perfil">Mi Perfil</a></li>
                                    <li><a class="dropdown-item" href="#">Mis Publicaciones</a></li>
                                    <li><a class="dropdown-item" href="#">Dashboard</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <form style="display: inline" action="/logout" method="POST">
                                        @csrf
                                        <li><a class="dropdown-item" href="#" onclick="this.closest('form').submit()">Cerrar Sesión</a></li>
                                    </form>    
                                    </ul>
                                </div>     
                            </div>
                        @endauth
                    </div>
            </header>
            <div class="clearfix"></div>
            <div class="filtro">
                <h2> Encuentra tu próxima oportunidad de <br>negocio en bienes raíces</h2>
                <div class="input-container">
                    <input type="radio" name="opcion" value="Venta" id="ip-venta" checked>
                    <label for="ip-venta" class="Custom-Radio">Venta</label>
                    <input type="radio" name="opcion" value="Renta" id="ip-renta">
                    <label for="ip-renta" class="Custom-Radio">Renta</label> 
                </div>
                <div class="input-groups">
                    <input type="text" placeholder="Buscar por ciudad..."><input type="submit"  value="🔍︎ Buscar">
                </div>
            </div>
        </div>

    <div id="seccion2">
        <b><h2>Comienza a vender con nosotros y <br><span>0</span>obtén GRATIS un diagnóstico de <br> <span>0</span>posibilidades para tu propiedad</h2></b>
            <div class="img-container">
                <img src="{{ asset('/Imagenes/Image 3.png') }}" class="img1">
                <img src="{{ asset('/Imagenes/Image 2.png') }}" class="img2">
                <img src="{{ asset('/Imagenes/Image 1.png') }}" class="img3">
            </div>
        <a href="#"><button class="bt-cian">Obtén tu diagnóstico gratis</button></a>
    </div>

<div id="seccion3">
    <h2>Comenzar tu próximo desarrollo inmobiliario es muy sencillo</h2>
    <div class="steps-container" style="margin-right: 30px;">
        <div class="circle-container">
            <img src="{{ asset('/Imagenes/glass.png')}}">
        </div>
        <p> Busca propiedades en tu <br>ciudad</p>
    </div>
    <div class="steps-container" style="margin-right: 30px;">
        <div class="circle-container">
            <img src="{{ asset('/Imagenes/dollar-currency-symbol.png')}}">
        </div>
        <p> Conoce el potencial de la <br>propiedad de tu agrado</p>
    </div>
    <div class="steps-container">
        <div class="circle-container">
            <img src="{{ asset('/Imagenes/clipboard.png')}}" >
        </div>
        <p>Comienza a planear tu próximo <br>desarrollo inmobiliario</p>
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
            <p>Instate es una marga registrada por <br>Instate Investments S.A de C.V. en <br>alianza con Design Construcciones.</p>
        </div>
    
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
        <div class="container-info">
            <h2>Legal</h2>
            <hr>
            <a href="/legal">Aviso legal</a><br><br><a href="/privacidad">Politica de privacidad </a><br><br><a href="/privacidad">Politica de cookies</a>
        </div>
        <div class="container-info">
            <h2>Sobre Instate</h2>
            <hr>
            <a href="/nosotros">Nosotros</a><br><br><a href="/mision">Misión</a> <br><br><a href="/vision">Visión</a>
        </div>
    </footer>

@endsection

@section('js')
<script>
    $(document).ready(function() {
        @if (Session::has('error_login'))
            var modalInicio = new bootstrap.Modal(document.getElementById('iniciarModal'));
            modalInicio.show();
        @endif

        $('#iniciarModal').on('hidden.bs.modal', function () {
            $('#errorLogin').text('').hide();
        });
    });
</script>
@endsection
