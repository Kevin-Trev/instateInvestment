@extends('layout.paginaInicio')

@section('style')
<style>
    /* Estilos para el contenedor principal */
    
    .container {
      padding-left: 12%; 
    }
    
    .container h1 {
      font-size: 2vw;
      height: 25px;
    }
    
    .container p {
      font-size: 1vw;
      color: #889396;
    }
    
    /* Estilos para las tarjetas */
    
    .card {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
      padding: 30px;
      width: 1000px;
    }
    
    #primerPaso{
        height: 565px;
    }
    
    /* Estilos para los formularios */
    
    .form-group {
      margin-bottom: 20px;
    }
    
    /* Estilos para los botones */
    
    .btn-blue{
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      width: 20%;
    }

    .btn-white{
        padding: 10px 18px;
        width: 20%;
    }
    
    .next {
      display: inline-block;
      margin-left: 100px;
    }
    
    /* Estilos para el logotipo */
    
    .logo img {
      height: 40px;
      margin-top: 20px;
      margin-left: 1%;
      margin-bottom: 5px;
    }
    
    /* Estilos para los círculos */
    
    .circle-container {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 15px;
      transform: translateY(10px);
      height: 0;
    }
    
    .circle {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      border: 1px solid blue;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 16px;
      margin: 0 10px;
    }

    #Frente-group{
        margin-left: 90px;
    }
    
    .circle-circle-container .circle.blue{
        text-align: center;
        margin-left: 38%;
    }
    
    .circle-circle-container .text{
        color: #585c5d;
    }
    
    .circle.blue {
      background-color: blue;
      color: white;
      margin-right: 50px;
    }
    
    .line {
      height: 2px;
      transform: translateY(-10px);
      background-color: lightgray;
      width: 50px;
      flex: 1;
    }
    
    .transparent {
      color: transparent;
    }
    
    /* Estilos para los títulos de sección */
    
    .section-title {
      display: flex;
    }
    
    .section-title h3 {
      padding-top: 6px;
    }
    
    .section-title .circle.blue {
      padding: 20px;
      margin-bottom: 20px;
      margin-right: 15px;
    }
    
    /* Estilos para los contenedores */
    
    .contenedorDatos .form-group {
      display: inline-block;
      margin-right: 50px;
    }
    
    .contenedorDatos .form-control {
      width: 410px;
    }
    
    .contenedorCaracteristicas .form-group{
        display: inline-block;
        margin-right: 100px;
    }
    
    .contenedorCaracteristicas .form-group input[type="number"]{
        border-radius: 40%;
        width: 50px;
        height: 50px;
        -moz-appearance: textfield;
        text-align: center;
        margin: 10px;
    }

    .contenido{
        padding-top: 20px;  
        margin-left: 100px
    }
    
    .contenedorCaracteristicas .form-group 
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button{
        -webkit-appearance: none;
    }
    
    .btn-mas,
    .btn-menos {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      border: 1px solid blue;
      display: flex;
      color: #007bff;
      background-color: white;
      justify-content: center;
      align-items: center;
      font-size: 16px;
      transform: translateY(15px);
    }
    
    .numeros{
        display: flex;
    }
    
    .serviciosContainer{
        text-align: center
    }
    
    .form-group select{
        width: 150px;
    }

    .buttonContainer{
        display: flex;
        gap: 60%;
    }

    #Frente, #Fondo, #Area{
        width: 120px;
        border-radius: 6px;
    }

    .error{
        display: none;
        color: red;
        font-size: 12px;
    }

    .AddPhotoContainer{
        margin-left: 7%;
        width: 800px;
        border: 2px dashed gray;
        cursor: pointer;
        height: 300px;
    }

    .AddPhotoContainer img{
        width: 200px;
        margin: 60px 0 0 300px;
    }

    .AddPhotoContainer h3{
        text-align: center;
        color: #7F7F7F;
        padding-top: 20px;
    }

    #Image{
        display: none;
    }


    /* #segundoPaso, #tercerPaso, #cuartoPaso, #quintoPaso{
        display: none;
    } */
        </style>
@endsection

@section('body')
<meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container" id="primerPaso">
        <input type="hidden" id="propiedadId" name="ID_P">
        <h1>Publica una nueva propiedad</h1>
        <p>Sigue los siguientes pasos para publicar tu propiedad</p>
            <div class="card">
                <div class="circle-container">
                    <div class="circle-circle-container">
                        <div class="circle blue">1</div>
                        <div class="text">Datos de la propiedad</div>
                    </div>

                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle">2</div>
                        <div class="transparent">0</div>
                    </div>

                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle">3</div>
                        <div class="transparent">0</div>
                    </div>
                    
                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle">4</div>
                        <div class="transparent">0</div>
                    </div>

                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle">5</div>
                        <div class="transparent">0</div>
                    </div>
                </div>

                <br><br>

                <div class="section-title">
                    <div class="circle blue">1</div><h3>Ubicación</h2>
                </div>

                <div class="contenedorDatos">
                    <div class="form-group">
                        <label for="Ciudad">Ciudad:</label>
                        <input type="text" class="form-control" name="Ciudad" id="Ciudad">
                    </div>
                    <div class="form-group">
                        <label for="Estado">Estado:</label>
                        <select class="form-control" name="Estado" id="Estado">
                            <option value="DIF">Distrito Federal</option>
                            <option value="AGS">Aguascalientes</option>
                            <option value="BCN">Baja California</option>
                            <option value="BCS">Baja California Sur</option>
                            <option value="CAM">Campeche</option>
                            <option value="CHP">Chiapas</option>
                            <option value="CHI">Chihuahua</option>
                            <option value="COA">Coahuila</option>
                            <option value="COL">Colima</option>
                            <option value="DUR">Durango</option>
                            <option value="GTO">Guanajuato</option>
                            <option value="GRO">Guerrero</option>
                            <option value="HGO">Hidalgo</option>
                            <option value="JAL">Jalisco</option>
                            <option value="MEX">Ciudad de México</option>
                            <option value="MIC">Michoacán</option>
                            <option value="MOR">Morelos</option>
                            <option value="NAY">Nayarit</option>
                            <option value="NLE">Nuevo León</option>
                            <option value="OAX">Oaxaca</option>
                            <option value="PUE">Puebla</option>
                            <option value="QRO">Queretaro</option>
                            <option value="ROO">Quintana Roo</option>
                            <option value="SLP">San Luis Potos&iacute;</option>
                            <option value="SIN">Sinaloa</option>
                            <option value="SON">Sonora</option>
                            <option value="TAB">Tabasco</option>
                            <option value="TAM">Tamaulipas</option>
                            <option value="TLX">Tlaxcala</option>
                            <option value="VER">Veracruz</option>
                            <option value="YUC">Yucatán</option>
                            <option value="ZAC">Zacatecas</option>
                        </select>
                    </div>
                </div>
                <div class="contenedorDatos">
                    <div class="form-group">
                        <label for="calle">Calle:</label>
                        <input type="text" class="form-control" name="calle" id="Calle" placeholder="Ingresa la calle">
                    </div>
                    <div class="form-group">
                        <label for="Colonia">Colonia:</label>
                        <input type="text" class="form-control" name="Colonia" id="Colonia" placeholder="Ingrese la colonia donde se encuentra la propiedad">
                    </div>
                </div>
                <div class="contenedorDatos">
                    <div class="form-group">
                        <label for="num_interior">Núm. interior:</label>
                        <input type="text" class="form-control" name="num_interior" id="Num_interior" placeholder="Ingresa la calle">
                    </div>
                    <div class="form-group">
                        <label for="num_exterior">Núm. exterior:</label>
                        <input type="text" class="form-control" name="num_exterior" id="Num_exterior" placeholder="Ingresa la calle">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Codigo_Postal">Codigo postal:</label>
                    <input type="number" class="form-control" id="Codigo_Postal" name="Codigo_Postal" placeholder="Ingrese el código postal">
                </div>
                <h6 class="error">Completa los campos necesarios para continuar</h6>
                <div class="buttonContainer">
                    <button type="button" id="button1" class="btn-blue">Continuar</button>
                </div>
            </div>
    </div>

    <div class="container" id="segundoPaso">
        <h1>Publica una nueva propiedad</h1>
        <p>Sigue los siguientes pasos para publicar tu propiedad</p>
            <div class="card">
                <div class="circle-container">
                    <div>
                        <div class="circle blue">1</div>
                        <div class="transparent">0</div>
                    </div>

                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle blue">2</div>
                        <div class="text">Especificaciones</div>
                    </div>

                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle">3</div>
                        <div class="transparent">0</div>
                    </div>
                    
                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle">4</div>
                        <div class="transparent">0</div>
                    </div>
                    
                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle">5</div>
                        <div class="transparent">0</div>
                    </div>
                </div>

                <br><br>
                  
                <div class="section-title">
                    <div class="circle blue">2</div><h3>Caracteristicas</h3>
                </div>

                <div class="form-group row">
                    <label for="tipoPropiedad" class="col-sm-2 col-form-label">Tipo de propiedad:</label>
                    <select id="tipoPropiedad" name="Tipo_Propiedad_id" class="form-control">

                    </select>
                <div class="contenido">
                    <div class="contenedorCaracteristicas">
                        <div class="form-group" id="Recamaras-group">
                            <label for="Recamaras">Recamaras:</label>
                            <div class="numeros">
                                <button class="btn-menos" id="minusRecamaras">-</button>
                                <input type="number" class="form-control" value="1" id="Recamaras" name="Recamaras" readonly>
                                <button class="btn-mas" id="plusRecamaras">+</button>
                            </div>
                        </div>
                        <div class="form-group" id="Baños-group">
                            <label for="Baños">Baños:</label>
                            <div class="numeros">
                                <button class="btn-menos" id="minusBaños">-</button>
                                <input type="number" class="form-control" id="Baños" name="Baños" value="1" readonly>
                                <button class="btn-mas" id="plusBaños">+</button>
                            </div>
                        </div>
                        <div class="form-group" id="Area-group">
                            <label for="Area">Area:</label>
                            <div class="numeros">
                                <button class="btn-menos" id="minusArea">-</button>
                                <input type="number" class="form-control" id="Area" name="Area" placeholder="Medida m²">
                                <button class="btn-mas" id="plusArea">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="contenedorCaracteristicas">
                        <div class="form-group" id="Frente-group">
                            <label for="frente">Frente:</label>
                            <div class="numeros">
                                <button class="btn-menos" id="minusFrente">-</button>
                                <input type="number" class="form-control" id="Frente" name="Frente" placeholder="Medida m²">
                                <button class="btn-mas" id="plusFrente">+</button>
                            </div>
                        </div>
                        <div class="form-group" id="Fondo-group">
                            <label for="Fondo">Fondo:</label>
                            <div class="numeros">
                                <button class="btn-menos" id="minusFondo">-</button>
                                <input type="number" class="form-control" id="Fondo" name="Fondo" placeholder="Medida m²">
                                <button class="btn-mas" id="plusFondo">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                <h6 class="error">Completa los campos necesarios para continuar</h6>
                    <div class="buttonContainer">
                        <button type="button" id="button2" class="btn-white">Regresar</button>
                        <button type="button" id="button3" class="btn-blue">Continuar</button>
                    </div>
            </div>
    </div>

    <div class="container" id="tercerPaso">
        <h1>Publica una nueva propiedad</h1>
        <p>Sigue los siguientes pasos para publicar tu propiedad</p>
            <div class="card">
                <div class="circle-container">
                    <div>
                        <div class="circle blue">1</div>
                        <div class="transparent">0</div>
                    </div>

                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle blue">2</div>
                        <div class="transparent">0</div>
                    </div>

                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle blue">3</div>
                        <div class="text">Servicios de la propiedad</div>
                    </div>
                    
                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle">4</div>
                        <div class="transparent">0</div>
                    </div>

                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle">5</div>
                        <div class="transparent">0</div>
                    </div>
                </div>

                <br><br>

                <div class="section-title">
                    <div class="circle blue">3</div><h3>Servicios</h3>
                </div>
                    <div class="serviciosContainer">
                        <div id="servicio" class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
    
                        </div>
                    </div>
                    
                    <br>
                    
                    <div class="buttonContainer">
                        <button type="button" id="button4" class="btn-white">Regresar</button>
                        <button type="button" id="button5" class="btn-blue">Continuar</button>
                    </div>
            </div>
    </div>

    <div class="container" id="cuartoPaso">
        <h1>Publica una nueva propiedad</h1>
        <p>Sigue los siguientes pasos para publicar tu propiedad</p>
            <div class="card">
                <div class="circle-container">
                    <div>
                        <div class="circle blue">1</div>
                        <div class="transparent">0</div>
                    </div>

                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle blue">2</div>
                        <div class="transparent">0</div>
                    </div>

                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle blue">3</div>
                        <div class="transparent">0</div>
                    </div>
                    
                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle blue">4</div>
                        <div class="text">Detalles de la publicación</div>
                    </div>

                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle">5</div>
                        <div class="transparent">0</div>
                    </div>
                </div>

                <br><br>

                <div class="section-title">
                    <div class="circle blue">4</div><h2>Descripción</h2>
                </div>

                <div class="form-group">
                    <label for="Titulo">Titulo:</label>
                    <input type="text" class="form-control" id="Titulo" name="Titulo" placeholder="Ingrese un titulo para su propiedad">
                </div>
                <div class="form-group">
                    <label for="Precio">Precio:</label>
                    <input type="number" class="form-control" id="Precio" name="Precio" placeholder="Ingrese un titulo para su propiedad">
                </div>
                <div class="form-group">
                    <label>¿Propiedad disponible para la compra?</label>
                    <input type="radio" value="1" name="Disponibilidad"> Si
                    <input type="radio" value="0" name="Disponibilidad"> No
                </div>
                <div class="form-group">
                    <label>¿Propiedad en venta?</label>
                    <input type="radio" value="1" name="Vendible"> Si
                    <input type="radio" value="0" name="Vendible"> No
                </div>
                <div class="form-group">
                    <label>¿Propiedad en renta?</label>
                    <input type="radio" value="1" name="Rentable"> Si
                    <input type="radio" value="0" name="Rentable"> No
                </div>
                <div class="form-group">
                    <label>Muestra tu propiedad:</label>
                    <div class="AddPhotoContainer" id="ee">
                        <img src="{{asset('Imagenes/AgregarImagen-simbolo.png')}}" >
                        <h3>Haz click aquí para añadir imagenes de tu propiedad</h3>
                        <input type="file" id="Image">
                    </div>
                </div>
                
                <h6 class="error">Completa los campos necesarios para continuar</h6>

                <div class="buttonContainer">
                    <button type="button" id="button6" class="btn-white">Regresar</button>
                    <button type="button" id="button7" class="btn-blue">Continuar</button>
                </div>
            </div>
        </div>

        <div class="container" id="quintoPaso">
            <h1>Publica una nueva propiedad</h1>
            <p>Sigue los siguientes pasos para publicar tu propiedad</p>
                <div class="card">
                    <div class="circle-container">
                        <div>
                            <div class="circle blue">1</div>
                            <div class="transparent">0</div>
                        </div>

                        <div class="line"></div>

                        <div class="circle-circle-container">
                            <div class="circle blue">2</div>
                            <div class="transparent">0</div>
                        </div>

                        <div class="line"></div>

                        <div class="circle-circle-container">
                            <div class="circle blue">3</div>
                            <div class="transparent">0</div>
                        </div>
                        
                        <div class="line"></div>

                        <div class="circle-circle-container">
                            <div class="circle blue">4</div>
                            <div class="transparent">0</div>
                        </div>

                        <div class="line"></div>

                        <div class="circle-circle-container">
                            <div class="circle blue">5</div>
                            <div class="text">Finalizar registro</div>
                        </div>
                    </div>

                    <br><br>

                    <div class="section-title">
                        <div class="circle blue">5</div><h2>Terminar</h2>
                    </div>

                    <div class="buttonContainer">
                        <button type="button" id="button8" class="btn-white">Regresar</button>
                        <button type="button" id="buttonEnviar" class="btn-blue">Finalizar</button>
                    </div>
            </div>
    </div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        let arregloServicios = [];
        var formData = new FormData();

        async function fetchTipoPropiedad(){
            await $.get('/get/typeProperties', function (tipos){
                var selectTipo = $('#tipoPropiedad');
                selectTipo.empty();
                tipos.forEach(tipo => {
                    selectTipo.append(`
                    <option value="${tipo.ID_T}">${tipo.Tipo}</option>
                    `);
                });
            });
        }

        async function fetchServicios(){
            await $.get('/get/servicios', function(servicios){
                var serviciosCheck = $('#servicio');
                serviciosCheck.empty();
                servicios.forEach(servicio => {
                    serviciosCheck.append(`
                        <input type="checkbox" class="btn-check" name="servicio_id[]" id="${servicio.ID_SERV}" value="${servicio.ID_SERV}" autocomplete="off">
                        <label class="btn btn-outline-primary" for="${servicio.ID_SERV}">${servicio.Servicio}</label>
                    `);
                });
            });
        }

        async function enviarForm(){
            $.ajax({
                url: '/post/propiedad',
                method: 'POST',
                headers :{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                processData: false,
                contentType: false,
                success: function(response){
                    console.log('yei', response);
                },
                error: function(error){
                    console.log('nonononono', error);
                }
            });
        }

        $(document).ready(async function(){
            await fetchTipoPropiedad();
            await fetchServicios();
            var uno = $('#primerPaso');
            var dos = $('#segundoPaso');
            var tres = $('#tercerPaso');
            var cuatro = $('#cuartoPaso');
            var cinco = $('#quintoPaso');
            var error = $('.error');
            var valorRecamaras = parseInt($('#Recamaras').val());
            var valorBaños = parseInt($('#Baños').val());
            var valorArea = parseInt($('#Area').val());
            var valorFrente = parseInt($('#Frente').val());
            var valorFondo = parseInt($('#Fondo').val());
            var Area = $('#Area');

            // Formulario 

            $('input[name="servicio_id[]"]').on('change', function(){
                if($(this).is(':checked')){
                    arregloServicios.push($(this).val());    
                }
                else{
                    const valor = $(this).val();
                    const indice = arregloServicios.indexOf(valor);
                    if (indice !== -1){
                        arregloServicios.splice(indice, 1);
                    } 
                }
                console.log(arregloServicios);
            });
            

            $('#buttonEnviar').on('click', function(){

                formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                formData.append('Titulo', $('#Titulo').val());
                formData.append('Precio', $('#Precio').val());
                formData.append('Recamaras', $('#Recamaras').val());
                formData.append('Baños', $('#Baños').val());
                formData.append('Codigo_Postal', $('#Codigo_Postal').val());
                formData.append('num_exterior', $('#Num_exterior').val());
                formData.append('num_interior', $('#Num_interior').val());
                formData.append('Colonia', $('#Colonia').val());
                formData.append('Calle', $('#Calle').val());
                formData.append('Ciudad', $('#Ciudad').val());
                formData.append('Estado', $('#Estado').val());
                formData.append('Area', $('#Area').val());
                formData.append('Frente', $('#Frente').val());
                formData.append('Fondo', $('#Fondo').val());
                formData.append('Rentable', $('[name="Rentable"]').val());
                formData.append('Vendible', $('[name="Vendible"]').val());
                formData.append('servicios', JSON.stringify(arregloServicios));
                formData.append('Tipo_Propiedad_id', $('#tipoPropiedad').val());
                
                enviarForm();
            });
            

            // Funciones para aumentar o disminuir el valor con los botones "+", "-"

            $('#minusRecamaras').on('click', function(){
                if (valorRecamaras > 0){
                    $('#Recamaras').val(valorRecamaras - 1);
                    valorRecamaras--;
                }
            });

            $('#plusRecamaras').on('click', function(){
                $('#Recamaras').val(valorRecamaras + 1);
                valorRecamaras++;
            });

            $('#minusBaños').on('click', function(){
                if (valorBaños > 0){
                    $('#Baños').val(valorBaños - 1);
                    valorBaños--;
                }
            });

            $('#plusBaños').on('click', function(){
                $('#Baños').val(valorBaños + 1);
                valorBaños++;
            });
            
            $('#minusArea').on('click', function(){
                if (valorArea > 0){
                    $('#Area').val(valorArea - 1);
                    valorArea--;
                }
            });

            $('#plusArea').on('click', function(){
                $('#Area').val(valorArea + 1);
                valorArea++;
            });
            
            $('#minusFrente').on('click', function(){
                if (valorFrente > 0){
                    $('#Frente').val(valorFrente - 1);
                    valorFrente--;
                }
            });

            $('#plusFrente').on('click', function(){
                $('#Frente').val(valorFrente + 1);
                valorFrente++;
            });
            
            $('#minusFondo').on('click', function(){
                if (valorFondo > 0){
                    $('#Fondo').val(valorFondo - 1);
                    valorFondo--;
                }
            });

            $('#plusFondo').on('click', function(){
                $('#Fondo').val(valorFondo + 1);
                valorFondo++;
            })   

            // Funcion para agregar imagenes 

            $('#ee').on('click', function(){
                $('#Image').trigger('click');

                const selectedFile = $('#Image').files[0];
                if (selectedFile){
                    console.log('archivo seleccionado: ' + selectedFile.name);
                }
            });

            $('#button1').on('click', function(){
                var ciudad = $('#Ciudad').val();
                var estado = $('#Estado').val();
                var calle = $('#Calle').val();
                var colonia = $('#Colonia').val();
                var codigo = $('#Codigo_Postal').val();

                if(ciudad && estado && calle && colonia && codigo){
                    uno.css("display", "none");
                    dos.css("display", "block");
                    error.css("display", "none");
                }
                else{
                    error.css("display", "block");
                }
            });

            $('#button2').on('click', function(){
                dos.css("display", "none");
                uno.css("display", "block");
                error.css("display", "none");
            });

            $('#button3').on('click', function(){
                dos.css("display", "none");
                tres.css("display", "block");
            });

            $('#button4').on('click', function(){
                tres.css("display", "none");
                dos.css("display", "block");
                error.css("display", "none");
            });

            $('#button5').on('click', function(){
                tres.css("display", "none");
                cuatro.css("display", "block");
            });

            $('#button6').on('click', function(){
                cuatro.css("display", "none");
                tres.css("display", "block");
            });

            $('#button7').on('click', function(){
                var titulo = $('#Titulo').val();
                var precio = $('#Precio').val();
                var imagen = $('#Imagen').val();

                if(titulo && precio){ //agregar la variable imagen para cuando se implemente el subir imagenes al proyecto
                    cuatro.css("display", "none");
                    cinco.css("display", "block");
                    error.css("display", "none");
                }
                else{
                    error.css("display", "block");
                }
            });

            $('#button8').on('click', function(){
                cinco.css("display", "none");
                cuatro.css("display", "block");
                error.css("display", "none");
            });

            //Aparecer o desaparecer inputs dependiendo de la propiedad seleccionada

            $('#tipoPropiedad').on('change', function(){
                var Tipo = $(this).find('option:selected').text();

                if(Tipo === "Departamento"){
                    $('#Frente-group').css("display", "none");
                    $('#Fondo-group').css("display", "none");
                    $('#Baños-group').css("display", "inline-block");
                    $('#Recamaras-group').css("display", "inline-block");
                    $('#Areas-group').css("display", "inline-block");
                }
                else if(Tipo === "Quinta"){
                    $('#Frente-group').css("display", "inline-block");
                    $('#Fondo-group').css("display", "inline-block");
                    $('#Baños-group').css("display", "inline-block");
                    $('#Recamaras-group').css("display", "none");
                    $('#Areas-group').css("display", "inline-block");
                }
                else if(Tipo === "Terreno"){
                    $('#Frente-group').css("display", "none");
                    $('#Fondo-group').css("display", "none");
                    $('#Baños-group').css("display", "none");
                    $('#Recamaras-group').css("display", "none");
                    $('#Areas-group').css("display", "inline-block");
                }
                else if(Tipo === "Bodega"){
                    $('#Frente-group').css("display", "none");
                    $('#Fondo-group').css("display", "none");
                    $('#Baños-group').css("display", "none");
                    $('#Recamaras-group').css("display", "none");
                    $('#Areas-group').css("display", "inline-block");
                    console.log(formData);
                }
                else{
                    $('#Frente-group').css("display", "inline-block");
                    $('#Fondo-group').css("display", "inline-block");
                    $('#Baños-group').css("display", "inline-block");
                    $('#Recamaras-group').css("display", "inline-block");
                    $('#Areas-group').css("display", "inline-block");
                }
            });

        });

            // Envia el formulario de propiedad y consiguiente el formulario de propiedadServicio
    </script>
@endsection