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
            padding-top: 80px
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
        
        .condicion h6{
            font-size: 15px; 
        }

        #condicion1, #condicion2, #condicion3{
            font-size: 12px;
            color: red;
        }
    </style>
@endsection

@section('body')

    <form action="/registrar" method="POST" id="formularioRegistro">
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
                    <div class="condicion">
                        <h6>La contraseña debe de contener:</h6>
                        <p id="condicion1">X Un carácter especial</p>
                        <p id="condicion2">X 8 carácteres minímos</p>
                        <p id="condicion3">X Un número</p>
                    </div>
                    <label for="inputContraseña">Contraseña:</label>
                    <p class="error">Ingresa una contraseña válida</p>
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
                    <input type="text" class="form-control" id="nombreUsuario" name="name" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="Nombre" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Apellidos</label>
                    <input type="text" class="form-control" id="apellido" name="Apellido" required>
                </div>
                <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="Fecha_nacimiento" name="Fecha_Nacimiento" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" class="form-control" name="Telefono" placeholder="+52" required>
                </div>
                <div class="center">
                    <button type="submit" id="button5" class="btn-blue">Finalizar</button>
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
            var patronContraseña = /^(?=.*[0-9])(?=.*[!@#$%^&*.])[a-zA-Z0-9!@#$%^&*.]+$/;
            var patronNumero = /(?=.*[0-9])/;
            var patronCaracter = /(?=.*[!@#$%^&*.])/;

            $('#button1').on('click', function(){
                if(patron.test($('#inputCorreo').val())){
                    datosContenedor.css("display", "block");
                    emailContenedor.css("display", "none");
                    error.css("display", "none")
                }
                else{
                    error.css("display", "block");
                }
            });

            $('#button2').on('click', function(){
                var valorContraseña = $('#inputContraseña').val();

                if(patronContraseña.test(valorContraseña) && valorContraseña.length >= 8){
                    datosContenedor.css("display", "none");
                    usuarioContenedor.css("display", "block");
                    error.css("display", "none")
                }
                else{
                    error.css("display", "block");
                }
            }),

            $('#button3').on('click', function(){
                datosContenedor.css("display", "none");
                emailContenedor.css("display", "block");
                error.css("display", "none")
            });

            $('#button4').on('click', function(){
                usuarioContenedor.css("display", "none");
                datosContenedor.css("display", "block");
            });

            $('#inputContraseña').on('keyup', function(event){
                var valorContraseña = $(this).val();
                var condicionCaracter = $('#condicion1');
                var condicionOcho = $('#condicion2');
                var condicionNumero = $('#condicion3');

                // Condicion para que la contraseña tenga un número

                if(valorContraseña === ''){
                    condicionNumero.text("X Un número");
                    condicionNumero.css("color", "red");
                }
                else if(patronNumero.test(valorContraseña)){
                condicionNumero.text("✔ Un número");
                condicionNumero.css("color", "green");
                }
                else{
                    condicionNumero.text("X Un número");
                    condicionNumero.css("color", "red");
                }

                // Condicion para el caracter especial

                if(valorContraseña === ''){
                    condicionCaracter.text("X Un carácter especial");
                    condicionCaracter.css("color", "red");
                }
                else if(patronCaracter.test(valorContraseña)){
                    condicionCaracter.text("✔ Un carácter especial");
                    condicionCaracter.css("color", "green");
                }
                else{
                    condicionCaracter.text("X Un carácter especial");
                    condicionCaracter.css("color", "red");
                }

                // Condicion para que la contraseña tenga una longitud minima de 8 carácteres

                if(valorContraseña.length >= 8){
                    condicionOcho.text("✔ 8 carácteres minímos");
                    condicionOcho.css("color", "green");
                }
                else{
                    condicionOcho.text("X 8 carácteres minímos");
                    condicionOcho.css("color", "red");
                }
            })

            $('#formularioRegistro').on('keydown', function (event){
                if (event.keyCode === 13){
                    event.preventDefault();
                    if(emailContenedor.is(':visible')){
                        $('#button1').click();
                        console.log("ss")
                    }
                    else if(datosContenedor.is(':visible')){
                        $('#button2').click();
                    }
                    else if(usuarioContenedor.is(':visible')){
                        $('#button5').click();
                    }
                }
            })
        });

    </script>
@endsection