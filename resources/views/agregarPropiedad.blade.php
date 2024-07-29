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

    .section-title {
        margin-bottom: 10px;
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

    .section-title {
        margin-bottom: 10px;
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
            justify-content: space-between; 
            align-items: center;

        }

        .circle {
            width: 2vw;
            height: 2vw;
            border-radius: 50%;
            background-color: #3498db;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            color: white;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="logo">    
        <img src="{{asset('/Imagenes/LOGO2.png')}}">
    </div>
    <div class="container-ori">
        <form action="">
            <h1>Publica una nueva propiedad</h1>
        <p>Sigue los siguientes pasos para publicar tu propiedad</p>
        <div class="container" id="primerPaso">
            <div class="card">
                <div class="circle-container">
                    <div class="circle">1</div>
                    <div class="circle">2</div>
                    <div class="circle">3</div>
                    <div class="circle">4</div>
                </div>
                <div class="section-title">
                    <h2>Ubicación</h2>
                </div>
                    <div class="form-group">
                        <label for="domicilio">Domicilio:</label>
                        <input type="text" class="form-control" id="domicilio" placeholder="Ingresa la calle, número o colonia" required>
                    </div>
                    <div class="form-group">
                        <label for="calle">Calle:</label>
                        <input type="text" class="form-control" id="calle" placeholder="Ingresa la calle" required>
                    </div>
                    <div class="form-group">
                        <label for="num_interior">Núm. interior (opcional):</label>
                        <input type="text" class="form-control" id="num_interior" placeholder="Ingresa la calle">
                    </div>
                    <div class="form-group">
                        <label for="num_exterior">Núm. exterior (opcional):</label>
                        <input type="text" class="form-control" id="num_exterior" placeholder="Ingresa la calle">
                    </div>
                    <div class="section-title">
                        <h2>Confirma tu ubicación</h2>
                    </div>
                    <div id="map-container">
                        
                    </div>
                    <button type="button">Continuar</button>
            </div>
        </div>
        <div class="container">
            <div class="card">
                <h1>Publica una nueva propiedad</h1>
        <p>Sigue los siguientes pasos para publicar tu propiedad</p>
        <div class="container">
            <div class="card">
                <div class="circle-container">
                    <div class="circle">1</div>
                    <div class="circle">2</div>
                    <div class="circle">3</div>
                    <div class="circle">4</div>
                </div>
                <div class="section-title">
                    <h2>Ubicación</h2>
                </div>
                    <div class="form-group">
                        <label for="domicilio">Domicilio:</label>
                        <input type="text" class="form-control" id="domicilio" placeholder="Ingresa la calle, número o colonia" required>
                    </div>
                    <div class="form-group">
                        <label for="calle">Calle:</label>
                        <input type="text" class="form-control" id="calle" placeholder="Ingresa la calle" required>
                    </div>
                    <div class="form-group">
                        <label for="num_interior">Núm. interior (opcional):</label>
                        <input type="text" class="form-control" id="num_interior" placeholder="Ingresa la calle">
                    </div>
                    <div class="form-group">
                        <label for="num_exterior">Núm. exterior (opcional):</label>
                        <input type="text" class="form-control" id="num_exterior" placeholder="Ingresa la calle">
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
        </div>
        </form>
    </div>
    
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