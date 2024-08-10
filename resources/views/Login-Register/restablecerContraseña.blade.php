<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instante Investment</title>
    <link rel="icon" href="{{asset('Imagenes/iconito.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <style>
*{
    font-family: 'Roboto';
    padding: 0;
    margin: 0; 
}

.container {
    width: 500px;
    margin: 100px auto;
    padding: 30px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    transform: translateY(20px);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .bt-blue {
    background-color: #3370FF;
    color: #FFFFFF;
    padding: 8px 100px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-bottom: 5px;
    width: 100%;
}

.form-group label{
    padding-top: 10px;
}

#Contraseña{
    margin-bottom: 10px;
}

#inputEmail{
    text-align: center;
    color: #696a6cca;
}

#condicion1, #condicion2, #condicion3{
    font-size: 12px;
    color: red;
}

.error{
    font-size: 12px;
    color: red;
    display: none;
}
.condicion{
    margin-top: 10px;
}
    </style>
</head>
<body>
    <div class="container" id="email">
        <h2>Restablecer contraseña</h2>
        <form action="/actualizar/contraseña" method="POST" id="formPassword">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group">
                <input type="text" id="inputEmail" name="email" class="form-control" value="{{ $email }}" readonly>
            </div>
            <div class="condicion">
                <h6>La contraseña debe de contener:</h6>
                <p id="condicion1">X Un carácter especial</p>
                <p id="condicion2">X 8 carácteres minímos</p>
                <p id="condicion3">X Un número</p>
            </div>
            <div class="form-group">
                <label for="Contraseña">Nueva contraseña:</label>
                <input type="password" class="form-control" id="Contraseña" name="password" placeholder="Ingrese la nueva contraseña">
            </div>
            <p class="error">La contraseña no es válida</p>
            <button class="bt-blue" type="button" id="buttonSubmit">Restablecer contraseña</button>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){
        let error = $('.error');
            const patronContraseña = /^(?=.*[0-9])(?=.*[!@#$%^&*.])[a-zA-Z0-9!@#$%^&*.]+$/;
            const patronNumero = /(?=.*[0-9])/;
            const patronCaracter = /(?=.*[!@#$%^&*.])/;

            $('#Contraseña').on('keyup', function(event){
                let valorContraseña = $(this).val();
                let condicionCaracter = $('#condicion1');
                let condicionOcho = $('#condicion2');
                let condicionNumero = $('#condicion3');

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

            $('#buttonSubmit').on('click', function(){
                var valorContraseña = $('#Contraseña').val();

                if(patronContraseña.test(valorContraseña) && valorContraseña.length >= 8){
                    error.css("display", "none")
                    $('#formPassword').submit();
                }
                else{
                    error.css("display", "block");
                }
            });

            $('#formPassword').on('keydown', function (event){
                if (event.keyCode === 13){
                    event.preventDefault();
                    if($('#email').is(':visible')){
                        $('#buttonSubmit').click();
                    }
                }
            });
    });
</script>
</html>