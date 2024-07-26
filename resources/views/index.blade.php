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
                <form method="POST" action="/login">
                    @csrf
                    <div>
                        <span data-bs-dismiss="modal" class="cerrarModal">&times;</span><br>
                        <h2>Iniciar sesión</h2>
                        <div class="form-group">
                            <label for="inputCorreo">Correo electrónico</label>
                            <input type="email" class="form-control" name="email" placeholder="Ingresa tu correo electrónico" id="inputCorreo" name="">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="inputContraseña">Contraseña</label>
                            <input type="password" class="form-control" name="password" placeholder= "Ingresa tu contraseña" id="inputContraseña">
                        </div>
                        <br>
                        <button type="submit" class="bt-blue">Ingresar</button>
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
                            <button class="bt-blue" type="button">{{Auth::user()->Nombre}}</button>
                            <form style="display: inline" action="/logout" method="POST">
                                @csrf
                                <a href="#" onclick="this.closest('form').submit()" class="btn btn-outline-danger">Log Out</a>
                            </form>    
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
                    <input type="text" placeholder="Buscar por ciudad..."><input type="submit"  value=" Buscar">
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
        <div class="steps-container" style="margin-right: 30px;">
            <div class="circle-container">
                <img src="/Imagenes/glass.png">
            </div>
        </div>
        <div class="steps-container" style="margin-right: 30px;">
            <div class="circle-container">
                <img src="/Imagenes/dollar-currency-symbol.png">
            </div>
        </div>
        <div class="steps-container">
            <div class="circle-container">
                <img src="/Imagenes/clipboard.png" >
            </div>
        </div>
        <p><span>00</span> Busca propiedades en tu <br><span>00000000000</span>ciudad</p>
        <p><span>0</span> Conoce el potencial de la <br><span>00</span>propiedad de tu agrado</p>
        <p>Comienza a planear tu próximo <br><span>0000</span>desarrollo inmobiliario</p>
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