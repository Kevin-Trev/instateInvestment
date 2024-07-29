<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('Imagenes/iconito.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <title>Publicar Propiedad</title>
<style>
    body {
        font-family: 'Roboto';
        margin: 0;
        padding: 0;
}
    .container-ori {
       padding-left: 250px;       
}

    .container-ori h1{
        font-size: 2vw;
        font-weight: bold;
}

    .container-ori p{
        font-size: 1vw;
        color: #889396;
}

    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        padding: 30px;
        width: 1000px;
}
    .form-group {
        margin-bottom: 20px;
}
       
        
    button {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
}
    #map-container {
        width: 100%;
        height: 300px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 20px;
        position: relative;
}

.next{
    display: inline-block;
    margin-left: 100px;
}

    button {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        float: right;
}

    .map-container {
        width: 100%;
        height: 300px;
}


    .logo  img{
        height: 50px;
        margin-top: 20px;
        margin-left: 10%;
        font-size: 35px;
        color: #3370FF;
        margin-bottom: 20px;
}

.circle-container {
  display: flex;
  justify-content: center;
  align-items: center;
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

.circle.blue {
  background-color: blue;
  color: white;
}

.line {
  height: 2px;
  background-color: lightgray;
  flex: 1;
}
    </style>
</head>
<body>
    <div class="logo">    
        <img src="{{asset('/Imagenes/LOGO2.png')}}">
    </div>

    <form action="">
        <div class="container-ori" id="primerPaso">
            <h1>Publica una nueva propiedad</h1>
            <p>Sigue los siguientes pasos para publicar tu propiedad</p>
            <div class="container">
                <div class="card">
                    <div class="circle-container">
                        <div class="circle blue">1</div>
                        <div class="line"></div>
                        <div class="circle">2</div>
                        <div class="line"></div>
                        <div class="circle">3</div>
                        <div class="line"></div>
                        <div class="circle">4</div>
                      </div>
                      <div class="section-title">
                        <div class="circle blue">1</div>
                        <h2 class="next">Ubicación</h2>
                      </div>
    
                    <div class="form-group">
                        <label for="Ciudad">Ciudad:</label>
                        <input type="text" class="form-control" name="Ciudad" id="Ciudad" placeholder="Ingrese la ciudad en la que se ubica su propiedad" required>
                    </div>
                    <div class="form-group">
                        <label for="Estado">Estado:</label>
                        <input type="text" class="form-control" name="Estado" id="Estado" placeholder="Ingrese el estado en el que se ubica su propiedad" required>
                    </div>
                    <div class="form-group">
                        <label for="calle">Calle:</label>
                        <input type="text" class="form-control" name="calle" id="calle" placeholder="Ingresa la calle" required>
                    </div>
                    <div class="form-group">
                        <label for="Colonia">Colonia:</label>
                        <input type="text" class="form-control" name="Colonia" id="Colonia" placeholder="Ingrese la colonia donde se encuentra la propiedad" required>
                    </div>
                    <div class="form-group">
                        <label for="num_interior">Núm. interior (opcional):</label>
                        <input type="text" class="form-control" name="num_interior" id="num_interior" placeholder="Ingresa la calle">
                    </div>
                    <div class="form-group">
                        <label for="num_exterior">Núm. exterior (opcional):</label>
                        <input type="text" class="form-control" name="num_exterior" id="num_exterior" placeholder="Ingresa la calle">
                    </div>
                    <div class="form-group">
                        <label for="zip">Codigo postal:</label>
                        <input type="number" class="form-control" name="Codigo_Postal" placeholder="Ingrese el código postal">
                    </div>
                    <div class="section-title">
                        <h2>Confirma tu ubicación</h2>
                    </div>
                    <div id="map-container">
                            
                    </div>
                    
                    <button type="button">Continuar</button>
                </div>
            </div>
        </div>

        <div class="container-ori" id="segundoPaso">
            <h1>Publica una nueva propiedad</h1>
            <p>Sigue los siguientes pasos para publicar tu propiedad</p>
            <div class="container">
                <div class="card">
                    <div class="circle-container">
                        <div class="circle blue">1</div>
                        <div class="line"></div>
                        <div class="circle blue">2</div>
                        <div class="line"></div>
                        <div class="circle">3</div>
                        <div class="line"></div>
                        <div class="circle">4</div>
                      </div>
                      <div class="text">Especificaciones</div>
                    <div class="section-title">
                        <div class="circle blue">1</div><h2>Caracteristicas</h2>
                    </div>
    
                    <div class="form-group">
                        <label for="tipoPropiedad">Tipo de propiedad:</label>
                        <select name="" id="tipoPropiedad" name="Tipo_Propiedad_id">

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recamaras">Recamaras:</label>
                        <input type="number" class="form-control" id="recamaras" name="Recamaras" required>
                    </div>
                    <div class="form-group">
                        <label for="Baños">Baños:</label>
                        <input type="number" class="form-control" id="Baños" name="Baños">
                    </div>
                    <div class="form-group">
                        <label for="Area">Area:</label>
                        <input type="text" class="form-control" id="Area" name="Area" placeholder="Ingrese el area de su terreno" required>
                    </div>
                    <div class="form-group">
                        <label for="frente">Frente:</label>
                        <input type="number" class="form-control" id="frente" name="frente" placeholder="Ingrese el frente del terreno" required>
                    </div>
                    <div class="form-group">
                        <label for="Fondo">Fondo:</label>
                        <input type="number" class="form-control" id="Fondo" name="Fondo" placeholder="Ingrese el fondo del terreno" required>
                    </div>
                    <button type="button">Continuar</button>
                </div>
            </div>
        </div>

        <div class="container-ori" id="tercerPaso">
            <h1>Publica una nueva propiedad</h1>
            <p>Sigue los siguientes pasos para publicar tu propiedad</p>
            <div class="container">
                <div class="card">
                    <div class="circle-container">
                        <div class="circle blue">1</div>
                        <div class="line"></div>
                        <div class="circle blue">2</div>
                        <div class="line"></div>
                        <div class="circle blue">3</div>
                        <div class="line"></div>
                        <div class="circle">4</div>
                      </div>
                      <div class="text">Descripción</div>
                    <div class="section-title">
                        <div class="circle blue">1</div><h2>Caracteristicas</h2>
                    </div>
    
                    <div class="form-group">
                        <label for="Titulo">Titulo:</label>
                        <input type="text" class="form-control" id="Titulo" name="Titulo" placeholder="Ingrese un titulo para su propiedad" required>
                    </div>
                    <div class="form-group">
                        <label for="Precio">Precio:</label>
                        <input type="text" class="form-control" id="Precio" name="Precio" placeholder="Ingrese un titulo para su propiedad" required>
                    </div>
                    <div class="form-group">
                        <label>¿Propiedad disponible?</label>
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
                    
                    <button type="button">Continuar</button>
                </div>
            </div>
        </div>
    </form>
    
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        let map = L.map('map-container').setView([25.5375, -103.4054], 12)

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
 
        map.on('click', onMapClick)

        function onMapClick(e){
            alert("Posición: " + e.latlng)
        }
    </script>
</body>
</html>