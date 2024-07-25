@extends('layout.layout')

@section('title', 'Crear cuenta')

@section('style')
    <style>
        body{
            overflow-y: hidden;
        }

        .container {
        width: 500px;
        margin: 100px auto;
        padding: 30px;
        background-color: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        border-radius: 8px;
        }
        
       .form-group {
            margin-bottom: 15px;
            margin-left:48px;
        }
        
       footer{
        text-align: center;
        font-size: 13px;
        margin-top: 20px;
       }
        
       .form-group input[type="text"]{
            width: 88%;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        
       .terms {
            font-size: 12px;
            color: #666;
            text-align: center;
        }
        h2{
            font-size: 30px;
            text-align: center;
            margin-bottom: 50px;
        }
        .bt-google{
        border: none;
        color: #646E71;
        background-color: #FFFFFF;
        box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.5);
        cursor: pointer;
        padding: 8px;
        border-radius: 8px;
        text-align: center;
        width: 78%;
        }
        .bt-google img{
        width: 20px;
        height: 20px;
        margin: 5px;
        }

        .center{
            text-align: center;
        }

        .center button[type="button"], button[type="submit"]{
            margin-bottom: 15px;
            border-radius: 8px;
            background-color: #004CFF;
            border: none;
            padding: 10px;
            color: #FFFFFF;
            width: 78%;
        }

        .center p{
            color: #646E71;
        }

        #nuevoDatos{
            display: none;
            transform: translateY(-40px);
        }

        #nuevoUsuario{
            display: none;
            transform: translateY(-80px);
            padding: 10px;
        }

        #nuevoUsuario h2{
            padding-top: 10px
        }

        .error{
            color: red;
            font-size: 10px;
            transform: translateY(5px);
            display: none;
        }

        #nuevoDatos .terms{
            padding-top: 190px
        }

        #button3, #button4{
            background-color: #FFFFFF;
            border: 1px solid #004CFF;
            color: #004CFF;
            font-size: 15px;
            text-align: center;
            border-radius: 8px;
            width: 150px;
        }

        #Fecha_nacimiento, #tipo_usuario, #telefono, #inputContraseña{
            width: 88%; 
        }

    </style>
@endsection

@section('body')

    <form action="/registrar" method="POST">
        @csrf
        <div class="container" id="nuevoEmail">
            <h2>Regístrate</h2>
                <input type="hidden" id="employeeId" name="id">
            <div class="form-group">
                <label for="inputCorreo">Correo electrónico</label>
                <p class="error">Ingresa un correo electrónico válido</p>
                <input type="text" class="form-control" placeholder="Ingresa tu correo electrónico" id="inputCorreo" name="email" required>
            </div>
            <div class="center">
                <button type="button" id="button1" class="bt-blue">Siguiente</button>
                <p>─────────  o también puedes  ─────────</p>
                <button class="bt-google"><img src="{{asset('/Imagenes/Logo-google.png')}}">Continuar con Google</button>
            </div>
            <footer>
                <a href="/view/login">Inicia sesión</a>
                <p>Si ya tienes una cuenta</p>
            </footer>
            <div class="terms">
                <p>Al continuar estás aceptando los <br><a href="{{route('terminosCondiciones')}}">Términos y condiciones</a> y <a href="{{route('avisoPrivacidad')}}">Aviso de privacidad</a></p>
            </div>
        </div>

        <div class="container" id="nuevoDatos">
            <h2>Regístrate</h2>
                <div class="form-group">
                    <label for="inputCorreo">Contraseña:</label>
                    <p class="error">Ingresa una contraseña válido</p>
                    <input type="password" class="form-control" placeholder="Crea una contraseña" id="inputContraseña" name="password">
                </div>
                <div class="center">
                    <button type="button" id="button2" class="bt-blue">Siguiente</button>
                    <button type="button" id="button3">Atrás</button>
                </div>
                <div class="terms">
                    <p>Al continuar estás aceptando los <br><a href="{{route('terminosCondiciones')}}">Términos y condiciones</a> y <a href="{{route('avisoPrivacidad')}}">Aviso de privacidad</a></p>
                </div>
        </div>

        <div class="container" id="nuevoUsuario">
            <h2>Regístrate</h2>
                <div class="form-group">
                    <label for="nombreUsuario">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="nombreUsuario" name="name">
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="Nombre">
                </div>
                <div class="form-group">
                    <label for="nombre">Apellidos</label>
                    <input type="text" class="form-control" id="apellido" name="Apellido">
                </div>
                <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="Fecha_nacimiento" name="Fecha_Nacimiento">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" class="form-control" name="Telefono" placeholder="+52">
                </div>
                <div class="center">
                    <button type="submit" class="btn-blue">Finalizar</button>
                    <button type="button" id="button4">Atrás</button>
                </div>
            <p class="terms">Al continuar, estas aceptando los <br><a href="{{route('terminosCondiciones')}}">Términos y condiciones</a> y el <a href="{{route('avisoPrivacidad')}}">Aviso de Privacidad</a>.</p>
        </div>
    </form>

@endsection

@section('js')
    <script>
        $(document).ready(function(){
            var datosContenedor = $('#nuevoDatos');
            var emailContenedor = $('#nuevoEmail');
            var usuarioContenedor = $('#nuevoUsuario');
            var error = $('.error');
            var patron = /.+@gmail\.com/;
            var patronContraseña = /^(?=.*[0-9])(?=.*[!@#$%^&*.])[a-zA-Z0-9!@#$%^&*.,]+$/;

            $('#button1').on('click', function(){
                if(patron.test($('#inputCorreo').val())){
                    datosContenedor.css("display", "block");
                    emailContenedor.css("display", "none");
                }
                else{
                    error.css("display", "block");
                }
            });

            $('#button2').on('click', function(){
                if(patronContraseña.test($('#inputContraseña').val())){
                    datosContenedor.css("display", "none");
                    usuarioContenedor.css("display", "block");
                }
                else{
                    error.css("display", "block");
                }
            })

            $('#button3').on('click', function(){
                datosContenedor.css("display", "none");
                emailContenedor.css("display", "block");
            })

            $('#button4').on('click', function(){
                usuarioContenedor.css("display", "none");
                datosContenedor.css("display", "block");
            })
        });

    </script>
@endsection