@extends('layout.layout')

@section('title', 'Crear cuenta')

@section('style')
    <style>


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
            padding-right: 50px;
        }

        .alert{
            --bs-alert-padding-x: 5px;
            --bs-alert-padding-y: 10px;
        }
        
       footer{
        text-align: center;
        font-size: 13px;
        margin-top: 20px;
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
            font-size: 12px;
            transform: translateY(5px);
            display: none;
        }

        .errorInput{
            border: 1px solid red;
            background: #f6dee0;

        }

        .errorVerif{
            color: red;
            font-size: 12px;
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
        
        .condicion h6{
            font-size: 15px; 
        }

        #condicion1, #condicion2, #condicion3{
            font-size: 12px;
            color: red;
        }

        @media(min-width: 576px){
            
            #nuevoDatos{
                transform: translateY(-2vw);
            }

            #nuevoUsuario{
                transform: translateY(-5vw);
            }

        }

        @media(max-width: 576px){
            body{
                overflow-y: scroll;
            }
        
            h2{
                margin-bottom: 30px;
            }

            .container{
                width: 80vw;
            }

            .form-control {
                font-size: 13px; 
            }

            .form-group label{
                transform: translateX(-5vw);
            }

            .error{
                transform: translate(-20px, 5px);
                width: 125%;
            }

            .alert-warning{
                font-size: 12px;
            }
            
            #telefono, #Fecha_nacimiento, #nombreUsuario, #nombre, #apellido{
                transform: translateX(-5vw);
                width: 120%;
            }

            #inputCorreo, #inputContraseña{
                width: 125%;
                transform: translateX(-5vw);
            }

            #nuevoEmail{
                transform: translateY(6vh);
            }

            #nuevoDatos{
                transform: translateY(4px);
            }

            #nuevoUsuario{
                transform: translateY(5px);
            }

            .condicion{
                transform: translateX(-5vw);
            }
        }

        @media(max-width: 391px){
            body{
                overflow-y: scroll;
            }

            .container{
                width: 80vw;
            }

            .form-group label{
                transform: translateX(-5vw);
            }

            #telefono, #Fecha_nacimiento, #nombreUsuario, #nombre, #apellido{
                transform: translateX(-5vw);
                width: 120%;
            }

            #inputCorreo, #inputContraseña{
                width: 125%;
                transform: translateX(-5vw);
            }
            
            #nuevoDatos{
                border: 1px solid #ddd;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                transform: translateY(-60px);
            }

            #nuevoEmail{
                transform: translateY(-60px);
            }

            #nuevoUsuario{
                transform: translateY(-60px);
            }

            .condicion{
                transform: translateX(-5vw);
            }
        }
    </style>
@endsection

@section('body')

    <form action="/registrar" method="POST" id="formularioRegistro">
        @csrf
        <div class="container" id="nuevoEmail">
            <h2>Regístrate</h2>
            <div class="alert alert-warning text-center" id="correo-existente" role="alert">
                Este Correo esta registrado en el Sistema
            </div>
            <div class="form-group">
                <label for="inputCorreo" class="text-center">Correo electrónico</label>
                <p class="error">Ingresa un correo electrónico válido</p>
                <input type="email" class="form-control" placeholder="Ingresa tu correo electrónico" id="inputCorreo" name="email">
            </div>
            <div class="center">
                <button type="button" id="button1" class="bt-blue">Siguiente</button>
            </div>
            <footer>
                <a href="/views/login">Inicia sesión</a>
                <p>Si ya tienes una cuenta</p>
            </footer>
            <div class="terms">
                <p>Al continuar estás aceptando los <br><a href="/terminos">Términos y condiciones</a> y <a href="/legal">Aviso de privacidad</a></p>
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
                    <p>Al continuar estás aceptando los <br>Términos y condiciones y <a href="/legal">Aviso de privacidad</a></p>
                </div>
        </div>

        <div class="container" id="nuevoUsuario">
            <h2>Regístrate</h2>
                <div class="form-group">
                    <label for="nombreUsuario">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="nombreUsuario" name="name" required>
                    <p class="errorVerif" id="verif-username">Este nombre de usuario esta en uso.</p>
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
                    <p class="errorVerif" id="verif-edad">Debes ser mayor de edad para registrarte.</p>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="number" id="telefono" class="form-control" name="Telefono" placeholder="Ingresa tu telefono" oninput="limitInputLength(this)"  required >
                    <p class="errorVerif" id="verif-tel">Este número esta registrado.</p>
                    <p class="error center">Llena todos los campos correctamente.</p>
                </div>
                <div class="center">
                    <button type="button" id="button5" class="btn-blue">Finalizar</button>
                    <button type="button" id="button4">Atrás</button>
                </div>
            <div class="terms">
                <p>Al continuar estás aceptando los <br>Términos y condiciones y <a href="/legal">Aviso de privacidad</a></p>
            </div>
        </div>
    </form>

@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $('#correo-existente').hide();
            $('#verif-tel').hide();
            $('#verif-edad').hide();
            $('#inputCorreo').focus();
            var datosContenedor = $('#nuevoDatos');
            var emailContenedor = $('#nuevoEmail');
            var usuarioContenedor = $('#nuevoUsuario');
            var error = $('.error');
            var patron = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            var patronContraseña = /^(?=.*[0-9])(?=.*[!@#$%^&*.])[a-zA-Z0-9!@#$%^&*.]+$/;
            var patronNumero = /(?=.*[0-9])/;
            var patronCaracter = /(?=.*[!@#$%^&*.])/;

            $('#button1').on('click', function(){
                if(patron.test($('#inputCorreo').val())){
                    var email = $('#inputCorreo').val();

                    verificarMail(email).then(function(response){
                        if (response.existe) {
                            $('#correo-existente').show();
                            $('#inputCorreo').addClass('errorInput')
                        }
                        else {
                            $('#correo-existente').hide();
                            datosContenedor .css("display", "block");
                            emailContenedor.css("display", "none");
                            $('#inputContraseña').focus();
                        }
                    });
                    $('#inputCorreo').removeClass('errorInput');
                    error.css("display", "none");
                }
                else{
                    $('#inputCorreo').addClass('errorInput');
                    error.css("display", "block");
                }
            });
            $('#inputCorreo').keydown(function() {
                    $('#inputCorreo').removeClass('errorInput');
                    error.css("display", "none");
                    $('#correo-existente').hide();
            });


            $('#button2').on('click', function(){
                var valorContraseña = $('#inputContraseña').val();

                if(patronContraseña.test(valorContraseña) && valorContraseña.length >= 8){
                    datosContenedor.css("display", "none");
                    usuarioContenedor.css("display", "block");
                    $('#nombreUsuario').focus();
                    $('#inputContraseña').removeClass('errorInput');
                    error.css("display", "none")
                }
                else{
                    $('#inputContraseña').addClass('errorInput');
                    error.css("display", "block");
                }
            });

            $('#button3').on('click', function(){
                datosContenedor.css("display", "none");
                emailContenedor.css("display", "block");
                $('#inputContraseña').removeClass('errorInput');
                error.css("display", "none")
            });

            $('#button4').on('click', function(){
                usuarioContenedor.css("display", "none");
                datosContenedor.css("display", "block");
                $('.form-control').removeClass('errorInput');
                error.css("display", "none");
            });

            $('#button5').on('click', function(){
                $('.form-control').removeClass('errorInput');
                if($('#nombre').val() && $('#nombreUsuario').val() && $('#apellido').val() && $('#Fecha_nacimiento').val()){
                    var telVer = '+52' + $('#telefono').val();
                    var usernameVer = $('#nombreUsuario').val();
                    let edadVer = $('#Fecha_nacimiento').val();
                    console.log('verificando... ' +usernameVer+' con numero: ' +telVer+ ' ' + edadVer);

                    $('#verif-tel').hide();
                    $('#verif-username').hide();
                    $('#verif-edad').hide();
                    $('#telefono').removeClass('errorInput');
                    $('#nombreUsuario').removeClass('errorInput');
                    $('#Fecha_nacimiento').removeClass('errorInput');

                    verificarTelefono(telVer).then(function(responseTel) {
                        verificarUsername(usernameVer).then(function(responseName) {
                            if (responseTel.existe && responseName.existe && !verificarEdad(edadVer)) {
                                $('#verif-tel').show();
                                $('#telefono').addClass('errorInput');
                                $('#verif-username').show();
                                $('#nombreUsuario').addClass('errorInput');
                                $('#verif-edad').show();
                                $('#Fecha_nacimiento').addClass('errorInput');
                                console.log('El usuario debe ser mayor de edad.');
                                console.log('Ambos datos EXISTEN!!!');
                            } else if (responseTel.existe && responseName.existe) {
                                $('#verif-tel').show();
                                $('#telefono').addClass('errorInput');
                                $('#verif-nombre').show();
                                $('#nombreUsuario').addClass('errorInput');
                                console.log('Ambos datos EXISTEN!!!');
                            } else if (responseTel.existe && !verificarEdad(edadVer)) {
                                $('#verif-tel').show();
                                $('#telefono').addClass('errorInput');
                                $('#verif-edad').show();
                                $('#Fecha_nacimiento').addClass('errorInput');
                                console.log('numero de teleono registrado');
                                console.log('El usuario debe ser mayor de edad.');
                            } else if (responseName.existe && !verificarEdad(edadVer)) {
                                $('#verif-edad').show();
                                $('#Fecha_nacimiento').addClass('errorInput');
                                $('#verif-username').show();
                                $('#nombreUsuario').addClass('errorInput');
                                console.log('nombre de usuario en uso');
                                console.log('El usuario debe ser mayor de edad.');
                            }
                            else if (responseTel.existe) {
                                $('#verif-tel').show();
                                $('#telefono').addClass('errorInput');
                                console.log('numero de teleono registrado');
                            }
                            else if (responseName.existe) {
                                $('#verif-username').show();
                                $('#nombreUsuario').addClass('errorInput');
                                console.log('nombre de usuario en uso');
                            }
                            else if (!verificarEdad(edadVer)){
                                $('#verif-edad').show();
                                $('#Fecha_nacimiento').addClass('errorInput');
                                console.log('El usuario debe ser mayor de edad.');
                            }
                            else{
                                console.log('Procediendo con el registro!!!');
                                $('#formularioRegistro').submit();
                            }
                        });
                    }).catch(function(error) {
                        console.log(error);
                    });
                    error.css("display", "none");
                    
                }
                else{
                    if (!$('#nombre').val()) $('#nombre').addClass('errorInput');
                    if (!$('#nombreUsuario').val()) $('#nombreUsuario').addClass('errorInput');
                    if (!$('#apellido').val()) $('#apellido').addClass('errorInput');
                    if (!$('#Fecha_nacimiento').val()) $('#Fecha_nacimiento').addClass('errorInput');
                    if (!$('#telefono').val()) $('#telefono').addClass('errorInput');

                    error.css("display", "block");
                }
            });

            $('#inputContraseña,#nombre, #nombreUsuario, #apellido, #Fecha_nacimiento, #telefono').keydown(function() {
                $(this).removeClass('errorInput');
                error.css("display", "none");
            });

            $('#Fecha_nacimiento').on("change", function() {
                $(this).removeClass('errorInput');
                error.css("display", "none");
            })

            $('#nombreUsuario').keydown(function() {
                $(this).removeClass('errorInput');
                $('#verif-username').hide();
            });

            $('#telefono').keydown(function() {
                $(this).removeClass('errorInput');
                $('#verif-tel').hide();
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

        function limitInputLength(input) {
            if (input.value.length > 10) {
                input.value = input.value.slice(0, 10);
            }
        }

        function verificarMail(email) {
            return $.ajax({
                url: '/verificar-correo',
                method: 'GET',
                data: {
                    email: email,
                },
                dataType: 'json'
            });
        }

        function verificarTelefono(telefono) {
            return $.ajax({
                url: '/verificar-telefono',
                method: 'GET',
                data: {
                    Telefono: telefono,
                },
                dataType: 'json'
            });
        }

        function verificarUsername(name) {
            return $.ajax({
                url: `/verificar-username`,
                method: `GET`,
                data: {
                    name: name,
                },
                dataType: `json`
            });
        }

        function verificarEdad(nacimiento) {
            const birthdate = new Date(nacimiento);
            const today = new Date();
            var age = today.getFullYear() - birthdate.getFullYear();
            const m = today.getMonth() - birthdate.getMonth();

            if (m < 0 || (m === 0 && today.getDate() < birthdate.getDate())) {
                age--;
            }

            return age >= 18;
        }
    </script>
@endsection