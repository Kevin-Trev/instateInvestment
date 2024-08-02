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
        </style>
@endsection

@section('body')
<form action="" enctype="multipart/form-data">
    <div class="container" id="primerPaso">
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
                        <input type="text" class="form-control" name="Ciudad" id="Ciudad" placeholder="Ingrese la ciudad en la que se ubica su propiedad">
                    </div>
                    <div class="form-group">
                        <label for="Estado">Estado:</label>
                        <input type="text" class="form-control" name="Estado" id="Estado" placeholder="Ingrese el estado en el que se ubica su propiedad">
                    </div>
                </div>
                <div class="contenedorDatos">
                    <div class="form-group">
                        <label for="calle">Calle:</label>
                        <input type="text" class="form-control" name="calle" id="calle" placeholder="Ingresa la calle">
                    </div>
                    <div class="form-group">
                        <label for="Colonia">Colonia:</label>
                        <input type="text" class="form-control" name="Colonia" id="Colonia" placeholder="Ingrese la colonia donde se encuentra la propiedad">
                    </div>
                </div>
                <div class="contenedorDatos">
                    <div class="form-group">
                        <label for="num_interior">Núm. interior (opcional):</label>
                        <input type="text" class="form-control" name="num_interior" id="num_interior" placeholder="Ingresa la calle">
                    </div>
                    <div class="form-group">
                        <label for="num_exterior">Núm. exterior (opcional):</label>
                        <input type="text" class="form-control" name="num_exterior" id="num_exterior" placeholder="Ingresa la calle">
                    </div>
                </div>
                <div class="form-group">
                    <label for="zip">Codigo postal:</label>
                    <input type="number" class="form-control" name="Codigo_Postal" placeholder="Ingrese el código postal">
                </div>
                
                <div class="buttonContainer">
                    <button type="button" class="btn-blue">Continuar</button>
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
                </div>
                <div class="contenedorCaracteristicas">
                    <div class="form-group">
                        <label for="Recamaras">Recamaras:</label>
                        <div class="numeros">
                            <button class="btn-menos" id="button-minus">-</button>
                            <input type="number" class="form-control" value="1" id="Recamaras" name="Recamaras" readonly>
                            <button class="btn-mas" id="button-plus">+</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Baños">Baños:</label>
                        <div class="numeros">
                            <button class="btn-menos" id="button-minus2">-</button>
                            <input type="number" class="form-control" id="Baños" name="Baños" value="1" readonly>
                            <button class="btn-mas" id="button-plus2">+</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Area">Area:</label>
                        <input type="text" class="form-control" id="Area" name="Area" placeholder="Ingrese el area de su terreno">
                    </div>
                </div>
                <div class="contenedorCaracteristicas">
                    <div class="form-group">
                        <label for="frente">Frente:</label>
                        <input type="number" class="form-control" id="frente" name="frente" placeholder="Ingrese el frente del terreno">
                    </div>
                    <div class="form-group">
                        <label for="Fondo">Fondo:</label>
                        <input type="number" class="form-control" id="Fondo" name="Fondo" placeholder="Ingrese el fondo del terreno">
                    </div>
                </div>
                <div class="buttonContainer">
                    <button type="button" class="btn-white">Regresar</button>
                    <button type="button" class="btn-blue">Continuar</button>
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
                        <div class="circle blue">4</div>
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
                    <button type="button" class="btn-white">Regresar</button>
                    <button type="button" class="btn-blue">Continuar</button>
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
                    <input type="text" class="form-control" id="Precio" name="Precio" placeholder="Ingrese un titulo para su propiedad">
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
                    <input type="file">
                </div>
                
                <div class="buttonContainer">
                    <button type="button" class="btn-white">Regresar</button>
                    <button type="button" class="btn-blue">Continuar</button>
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
                        <button type="button" class="btn-white">Regresar</button>
                        <button type="submit" class="btn-blue">Finalizar</button>
                    </div>
                </div>
    </div>
</form>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        function fetchTipoPropiedad(){
            $.get('/get/typeProperties', function (tipos){
                var selectTipo = $('#tipoPropiedad');
                selectTipo.empty();
                tipos.forEach(tipo => {
                    selectTipo.append(`
                    <option value="${tipo.ID_T}">${tipo.Tipo}</option>
                    `);
                });
            });
        }

        function fetchServicios(){
            $.get('/get/servicios', function(servicios){
                var serviciosCheck = $('#servicio');
                serviciosCheck.empty();
                servicios.forEach(servicio => {
                    serviciosCheck.append(`
                        <input type="checkbox" class="btn-check" name="${servicio.Servicio_id}" value="${servicio.ID_SERV}" id="${servicio.ID_SERV}" autocomplete="off">
                        <label class="btn btn-outline-primary" for="${servicio.ID_SERV}">${servicio.Servicio}</label>
                    `);
                });
            });
        }

        $(document).ready(function(){
            fetchTipoPropiedad();
            fetchServicios();
        })
    </script>
@endsection