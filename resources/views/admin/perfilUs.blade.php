@extends('layout.paginaInicio')

@section('title', 'perfil')
@section('title', 'Perfil Administrador')
@section('style')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
@endsection

@section('body')    
  <style>
<style>
    .sidebar {
      height: 100vh;
      background-color: #f8f9fa;

@@ -21,6 +19,7 @@
    .hidden {
      display: none;
    }

    .calendario {
      width: 100%;
      border-collapse: collapse;

@@ -30,10 +29,12 @@
      padding: 10px;
      text-align: center;
    }

    .calendario th {
      background-color: #f2f2f2;
      font-weight: bold;
    }

    .calendario .dia {
      display: inline-block;
      width: 30px;

@@ -46,64 +47,55 @@
      background-color: #f2f2f2;
    }
  </style>

  <div class="container-fluid">
  
</head>
<body>
@section('body')
<div class="container-fluid">
    <div class="row">
      <!-- AREA DE PERFIL -->
      <div class="card col-md-3 col-lg-3 mx-auto">
        <!-- FOTO PERFIL -->
        <div class="text-center mb-3">
          <h5 class="card-title">Foto de perfil</h5>
          <div class="profile-img-container mx-auto" style="width: 200px; height: 200px; overflow: hidden;">
            <img src="{{asset('Imagenes/CarlosTrejo.jpg')}}" alt="Foto de perfil" class="profile-img" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
        </div>
        <!-- NOMBRE -->
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" value="Carlos Enrique Trejo Avila">
        </div>
        <!-- F NACIMIENTO -->
        <div class="mb-3">
          <label for="fecha-nacimiento" class="form-label">F. Nacimiento</label>
          <input type="text" class="form-control" id="fecha-nacimiento" value="21 de julio de 1963">
        </div>
        <!-- GENERO -->
        <div class="mb-3">
          <label for="genero" class="form-label">Género</label>
          <input type="text" class="form-control" id="genero" value="Masculino">
        </div>
        <!-- TELEFONO -->
        <div class="mb-3">
          <label for="telefono" class="form-label">Teléfono</label>
          <input type="text" class="form-control" id="telefono" value="8713428967">
        </div>
        <!-- EDITAR -->
        <div class="mb-3">
          <button class="property-button btn btn-primary">EDITAR</button>
        <!-- AREA DE PERFIL -->
        <div class="card col-md-3 col-lg-3 mx-auto">
            <!-- FOTO PERFIL -->
            <div class="text-center mb-3">
                <h5 class="card-title">Foto de perfil</h5>
                <div class="profile-img-container mx-auto" style="width: 200px; height: 200px; overflow: hidden;">
                    <img src="{{ asset('Imagenes/CarlosTrejo.jpg') }}" alt="Foto de perfil" class="profile-img" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
            <!-- NOMBRE -->
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" value="{{ $usuario->name ?? 'Nombre no disponible' }}" readonly>
            </div>
            <!-- F NACIMIENTO -->
            <div class="mb-3">
                <label for="fecha-nacimiento" class="form-label">F. Nacimiento</label>
                <input type="text" class="form-control" id="fecha-nacimiento" value="{{ $usuario->Fecha_Nacimiento ?? 'Fecha no disponible' }}" readonly>
            </div>
            <!-- GENERO -->
            <div class="mb-3">
                <label for="genero" class="form-label">Género</label>
                <input type="text" class="form-control" id="genero" value="{{ $usuario->Genero ?? 'Género no disponible' }}" readonly>
            </div>


            <!-- SUSPENDER  -->
            <div class="mb-3">
                <button class="btn btn-danger" onclick="alert('no seas boludo, aun no existe el controleishion pibe, messi siuu .');">SUSPENDER</button>
            </div>
        </div>
        <!-- SUSPENDER -->
        <!-- SUSPENDER -->
<div class="mb-3">
  <form action="{{ route('usuarios.suspender', $usuario->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres suspender a este usuario?');">
    @csrf
    @method('POST') <!-- Cambiar a POST si la ruta es POST -->
    <button type="submit" class="btn btn-danger">SUSPENDER</button>
  </form>
</div>
      </div>
      <!-- MENU DE ACCIONES -->
      <main class="col-md-9 ml-sm-auto col-lg-9 px-md-4">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" id="publicaciones-tab" aria-current="page" href="#">Publicaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="estadisticas-tab" href="#">Estadísticas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="calendario-tab" href="#">Calendario</a>
          </li>
        <li class="nav-item">
  <a class="nav-link active" id="publicaciones-tab" aria-current="page" href="#">Publicaciones</a>
</li>
<li class="nav-item">
  <a class="nav-link" id="estadisticas-tab" href="#">Estadísticas</a>
</li>
<li class="nav-item">
  <a class="nav-link" id="calendario-tab" href="#">Calendario</a>
</li>

        </ul>
        <!-- LISTA DE PROPIEDADES -->
        <div class="property-list" id="pl">

@@ -123,6 +115,7 @@
              <button class="property-button btn btn-primary" data-toggle="modal" data-target="#quoteModal" onclick="openModal(${property.id})">COTIZAR</button>
            </div>
          </div>

          <!-- PROPIEDAD 2 -->
          <div class="property-card row" style="margin-top: 5px;">
            <div class="col-md-4">


@@ -164,167 +157,202 @@
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-white bg-danger mb-3">
                  <div class="card-header">Suspendidos</div>
                <div class="card text-white bg-warning mb-3">
                  <div class="card-header">Comentarios</div>
                  <div class="card-body">
                    <h5 class="card-title">23</h5>
                    <p class="card-text">Número de usuarios suspendidos.</p>
                    <h5 class="card-title">245</h5>
                    <p class="card-text">Número total de comentarios recibidos.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <canvas id="myChart"></canvas>
              </div>
            </div>
          </div>
        </div>
        <!-- CALENDARIO -->
        <div class="property-list hidden" id="pl3">
          <!-- Contenido del calendario -->
          <div class="container">
            <table class="calendario">
              <thead>
                <tr>
                  <th>Lun</th>
                  <th>Mar</th>
                  <th>Mié</th>
                  <th>Jue</th>
                  <th>Vie</th>
                  <th>Sáb</th>
                  <th>Dom</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="dia">1</td>
                  <td class="dia">2</td>
                  <td class="dia">3</td>
                  <td class="dia">4</td>
                  <td class="dia">5</td>
                  <td class="dia">6</td>
                  <td class="dia">7</td>
                </tr>
                <!-- Resto del calendario -->
              </tbody>
            </table>
         <div class="calendario hidden" id="calendario">
          <!-- CONTENIDO -->
          <div class="container mt-4">
            <div class="calendario">
            </div>  
          </div>
        </div>

      </main>
    </div>
  </div>

  <!-- Modal COTIZAR -->
  
    </div>
  </div>
  <div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="quoteModalLabel">Solicitar Cotización</h5>
          <h5 class="modal-title" id="quoteModalLabel">Calculadora de Cotización de Propiedades</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Detalles de la propiedad: ${property.Titulo}</p>
          <form id="quoteForm">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required>
              <label for="days">Días hospedados</label>
              <input type="number" class="form-control" id="days" required>
            </div>
            <div class="form-group">
              <label for="email">Correo Electrónico</label>
              <input type="email" class="form-control" id="email" name="email" required>
              <label for="services">Servicios adicionales</label>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="cleaningService">
                <label class="form-check-label" for="cleaningService">
                  Limpieza diaria
                </label>
                <input type="number" class="form-control mt-2 hidden" id="cleaningServicePrice" placeholder="Precio">
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="mealService">
                <label class="form-check-label" for="mealService">
                  Comida
                </label>
                <input type="number" class="form-control mt-2 hidden" id="mealServicePrice" placeholder="Precio">
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="transportService">
                <label class="form-check-label" for="transportService">
                  Transporte
                </label>
                <input type="number" class="form-control mt-2 hidden" id="transportServicePrice" placeholder="Precio">
              </div>
            </div>
            <div class="form-group">
              <label for="telefono">Teléfono</label>
              <input type="tel" class="form-control" id="telefono" name="telefono" required>
              <label for="otherCharges">Otros cargos</label>
              <input type="number" class="form-control" id="otherCharges">
            </div>
            <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
            <button type="button" class="btn btn-primary" onclick="calculateQuote()">Calcular Cotización</button>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('scripts')
        <div class="modal-footer">
          <h5>Total: $<span id="total">0.00</span></h5>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
        @endsection
        </body>
        @section('js') 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  document.getElementById('publicaciones-tab').addEventListener('click', function() {
    document.getElementById('pl').classList.remove('hidden');
    document.getElementById('pl2').classList.add('hidden');
    document.getElementById('pl3').classList.add('hidden');
  });
document.addEventListener('DOMContentLoaded', function() {
  const publicacionesTab = document.getElementById('publicaciones-tab');
  const estadisticasTab = document.getElementById('estadisticas-tab');
  const calendarioTab = document.getElementById('calendario-tab');
  const publicacionesSection = document.getElementById('pl');
  const estadisticasSection = document.getElementById('pl2');
  const calendarioSection = document.getElementById('calendario');

  document.getElementById('estadisticas-tab').addEventListener('click', function() {
    document.getElementById('pl').classList.add('hidden');
    document.getElementById('pl2').classList.remove('hidden');
    document.getElementById('pl3').classList.add('hidden');
  });
  // INICIAR EN PUBLICACIONES
  publicacionesSection.classList.remove('hidden');
  estadisticasSection.classList.add('hidden');
  calendarioSection.classList.add('hidden');

  document.getElementById('calendario-tab').addEventListener('click', function() {
    document.getElementById('pl').classList.add('hidden');
    document.getElementById('pl2').classList.add('hidden');
    document.getElementById('pl3').classList.remove('hidden');
  // VISTA PUBLICACIONES
  publicacionesTab.addEventListener('click', function() {
    publicacionesSection.classList.remove('hidden');
    estadisticasSection.classList.add('hidden');
    calendarioSection.classList.add('hidden');
    publicacionesTab.classList.add('active');
    estadisticasTab.classList.remove('active');
    calendarioTab.classList.remove('active');
  });

  // VISTA ESTADISTICAS
  estadisticasTab.addEventListener('click', function() {
    publicacionesSection.classList.add('hidden');
    estadisticasSection.classList.remove('hidden');
    calendarioSection.classList.add('hidden');
    publicacionesTab.classList.remove('active');
    estadisticasTab.classList.add('active');
    calendarioTab.classList.remove('active');
  });

  
  // VISTA CALENDARIO
  calendarioTab.addEventListener('click', function() {
    publicacionesSection.classList.add('hidden');
    estadisticasSection.classList.add('hidden');
    calendarioSection.classList.remove('hidden');
    publicacionesTab.classList.remove('active');
    estadisticasTab.classList.remove('active');
    calendarioTab.classList.add('active');
  });

  // Mostrar/ocultar inputs de precio al seleccionar/desseleccionar servicios adicionales
  const services = ['cleaningService', 'mealService', 'transportService'];
  services.forEach(service => {
    const checkbox = document.getElementById(service);
    const priceInput = document.getElementById(service + 'Price');
    checkbox.addEventListener('change', function() {
      if (checkbox.checked) {
        priceInput.classList.remove('hidden');
      } else {
        priceInput.classList.add('hidden');
        priceInput.value = '';
      }
    });
  });
});

function openModal(propertyId) {
    $('#quoteModal').modal('show');
}

function calculateQuote() {
    const days = parseInt(document.getElementById('days').value);
    const cleaningServicePrice = parseInt(document.getElementById('cleaningServicePrice').value) || 0;
    const mealServicePrice = parseInt(document.getElementById('mealServicePrice').value) || 0;
    const transportServicePrice = parseInt(document.getElementById('transportServicePrice').value) || 0;
    const otherCharges = parseInt(document.getElementById('otherCharges').value) || 0;

    function openModal(propertyId) {
      $('#quoteModal').modal('show');
    }
    
    function calculateQuote() {
      const days = parseInt(document.getElementById('days').value);
      const cleaningServicePrice = parseInt(document.getElementById('cleaningServicePrice').value) || 0;
      const mealServicePrice = parseInt(document.getElementById('mealServicePrice').value) || 0;
      const transportServicePrice = parseInt(document.getElementById('transportServicePrice').value) || 0;
      const otherCharges = parseInt(document.getElementById('otherCharges').value) || 0;
    const baseRate = 1500; // PRECIO POR DIA
    let total = days * baseRate;

      const baseRate = 1500; // PRECIO POR DIA
      let total = days * baseRate;
    total += cleaningServicePrice;
    total += mealServicePrice;
    total += transportServicePrice;
    total += otherCharges;

      total += cleaningServicePrice;
      total += mealServicePrice;
      total += transportServicePrice;
      total += otherCharges;
    document.getElementById('total').innerText = total.toFixed(2);
}

      document.getElementById('total').innerText = total.toFixed(2);
    }
  </script>
<script>
  // INVESTIGAR QUE CHUCHA CON ESTA WEA
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
      datasets: [{
        label: 'Usuarios nuevos',
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: 'rgba(54, 162, 235, 0.2)',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 1
      }, {
        label: 'Ventas',
        data: [2, 29, 5, 5, 20, 3],
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
      }]
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
        datasets: [{
            label: 'Usuarios nuevos',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }, {
            label: 'Ventas',
            data: [2, 29, 5, 5, 20, 3],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
  });
});
</script>
@endsection