@extends('layout.paginaInicio')

@section('title', 'Perfil Administrador')
@section('style')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
@endsection
<style>
    .sidebar {
      height: 100vh;
      background-color: #f8f9fa;
      padding-top: 20px;
    }
    .profile-img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }
    .hidden {
      display: none;
    }

    .calendario {
      width: 100%;
      border-collapse: collapse;
    }
    .calendario th,
    .calendario td {
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
      height: 30px;
      border: 1px solid #ccc;
      border-radius: 50%;
      line-height: 30px;
    }
    .calendario .dia:hover {
      background-color: #f2f2f2;
    }
  </style>
  
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

        </ul>
        <!-- LISTA DE PROPIEDADES -->
        <div class="property-list" id="pl">
          <!-- PROPIEDAD 1 -->
          <div class="property-card row" style="margin-top: 5px;">
            <div class="col-md-4">
              <img src="https://via.placeholder.com/300x200" alt="Property Image" class="property-image img-fluid">
            </div>
            <div class="col-md-8">
              <h3>${property.Titulo}</h3>
              <p>$ ${property.Precio}</p>
              <div class="property-details">
                <div class="property-detail"><i class="fas fa-bed property-detail-icon"></i><span>${property.Recamaras} Recámaras</span></div>
                <div class="property-detail"><i class="fas fa-bath property-detail-icon"></i><span>${property.Baños} Baños</span></div>
                <div class="property-detail"><i class="fas fa-ruler-combined property-detail-icon"></i><span>${property.Area} M² construidos</span></div>
              </div>
              <!-- X este btn nos va a mandar a la vista de dettalles propiedades -->
              <button class="property-button btn btn-primary"  onclick="alert('esto nos mandara a detalles propiedad, para revisar los detalles, obviamente, 
              'ten paciencia por favor, no somos genios como elon musk que se desbolquea de twitter para seguir peleando con maudro .');">REVISAR</button>
            </div>
          </div>

          <!-- PROPIEDAD 2 -->
          <div class="property-card row" style="margin-top: 5px;">
            <div class="col-md-4">
              <img src="https://via.placeholder.com/300x200" alt="Property Image" class="property-image img-fluid">
            </div>
            <div class="col-md-8">
              <h3>${property.Titulo}</h3>
              <p>$ ${property.Precio}</p>
              <div class="property-details">
                <div class="property-detail"><i class="fas fa-bed property-detail-icon"></i><span>${property.Recamaras} Recámaras</span></div>
                <div class="property-detail"><i class="fas fa-bath property-detail-icon"></i><span>${property.Baños} Baños</span></div>
                <div class="property-detail"><i class="fas fa-ruler-combined property-detail-icon"></i><span>${property.Area} M² construidos</span></div>
              </div>
              <button class="property-button btn btn-primary" data-toggle="modal" data-target="#quoteModal" onclick="openModal(${property.id})">COTIZAR</button>
            </div>
          </div>
        </div>
        <!-- ESTADISTICAS -->
        <div class="property-list hidden" id="pl2">
          <!-- Contenido principal -->
          <div class="container mt-4">
            <div class="row">
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-white bg-primary mb-3">
                  <div class="card-header">Usuarios</div>
                  <div class="card-body">
                    <h5 class="card-title">1,024</h5>
                    <p class="card-text">Número total de usuarios registrados.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-white bg-success mb-3">
                  <div class="card-header">Ventas</div>
                  <div class="card-body">
                    <h5 class="card-title">567</h5>
                    <p class="card-text">Número total de ventas realizadas.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-white bg-warning mb-3">
                  <div class="card-header">Comentarios</div>
                  <div class="card-body">
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
         <div class="calendario hidden" id="calendario">
          <!-- CONTENIDO -->
          <div class="container mt-4">
            <div class="calendario">
            </div>  
          </div>

      </main>
    </div>
  </div>
  
    </div>
  </div>
  <div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="quoteModalLabel">Calculadora de Cotización de Propiedades</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="quoteForm">
            <div class="form-group">
              <label for="days">Días hospedados</label>
              <input type="number" class="form-control" id="days" required>
            </div>
            <div class="form-group">
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
              <label for="otherCharges">Otros cargos</label>
              <input type="number" class="form-control" id="otherCharges">
            </div>
            <button type="button" class="btn btn-primary" onclick="calculateQuote()">Calcular Cotización</button>
          </form>
        </div>
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
document.addEventListener('DOMContentLoaded', function() {
  const publicacionesTab = document.getElementById('publicaciones-tab');
  const estadisticasTab = document.getElementById('estadisticas-tab');
  const calendarioTab = document.getElementById('calendario-tab');
  const publicacionesSection = document.getElementById('pl');
  const estadisticasSection = document.getElementById('pl2');
  const calendarioSection = document.getElementById('calendario');

  // INICIAR EN PUBLICACIONES
  publicacionesSection.classList.remove('hidden');
  estadisticasSection.classList.add('hidden');
  calendarioSection.classList.add('hidden');

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

    const baseRate = 1500; // PRECIO POR DIA
    let total = days * baseRate;

    total += cleaningServicePrice;
    total += mealServicePrice;
    total += transportServicePrice;
    total += otherCharges;

    document.getElementById('total').innerText = total.toFixed(2);
}

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
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
@endsection