@extends('layout.paginaInicio')

@section('title', 'perfil')
@section('style')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>

@endsection

@section('body')    
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

    .image-card{
      width: 100%;
      height: 150px;
    }

    .image-card img{
      width: 100%;
      height: 100%;
      object-fit: cover;
      margin-left: 10px;
    }

    .bt-blue {
    background-color: #3370FF;
    color: #FFFFFF;
    padding: 8px 25px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-bottom: 5px;
    }
    .bt-blue:hover{
    background-color: #002E99;
    transition: .5s;
    }
  </style>
  
</head>
<body>
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
          <button class="property-button btn btn-primary" onclick="infoProperty(${property.id})">EDITAR</button>
        </div>
      </div>
      
      <main class="col-md-9 ml-sm-auto col-lg-9 px-md-4">
        <!-- MENU DE ACCIONES -->
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
          <div class="card" style="margin-top: 5px;">
            <div class="row">
              <div class="image-card col-md-3">
                <img src="{{asset('Imagenes/Fondo-seccion1.png')}}">
              </div>

              <div class="col-md-7">
                <h3>${property.Titulo}</h3>
                <p>$ ${property.Precio}</p>
                <div class="property-details">
                  <div class="property-detail"><i class="fas fa-bed property-detail-icon"></i><span>${property.Recamaras} Recámaras</span></div>
                  <div class="property-detail"><i class="fas fa-bath property-detail-icon"></i><span>${property.Baños} Baños</span></div>
                  <div class="property-detail"><i class="fas fa-ruler-combined property-detail-icon"></i><span>${property.Area} M² construidos</span></div>
                </div>
              </div>
              <div class="col-md-2">
                <button style = "margin-bottom: 10px;" class="bt-blue" data-toggle="modal" data-target="#quoteModal" onclick="openModal(${property.id})">Editar</button>
                <button style = "margin-bottom: 10px;" class="bt-blue" data-toggle="modal" data-target="#quoteModal" onclick="openModal(${property.id})">Cotizar</button>
                <button style = "margin-bottom: 10px;" class="bt-blue" data-toggle="modal" data-target="#quoteModal" onclick="openModal(${property.id})">Pausar</button>
              </div>
            </div>
          </div>

          <!-- PROPIEDAD 2 -->
          <div class="card" style="margin-top: 5px;">
            <div class="row">
              <div class="image-card col-md-3">
                <img src="{{asset('Imagenes/Fondo-seccion1.png')}}">
              </div>
              <div class="col-md-7">
                <h3>${property.Titulo}</h3>
                <p>$ ${property.Precio}</p>
                <div class="property-details">
                  <div class="property-detail"><i class="fas fa-bed property-detail-icon"></i><span>${property.Recamaras} Recámaras</span></div>
                  <div class="property-detail"><i class="fas fa-bath property-detail-icon"></i><span>${property.Baños} Baños</span></div>
                  <div class="property-detail"><i class="fas fa-ruler-combined property-detail-icon"></i><span>${property.Area} M² construidos</span></div>
                </div>
              </div>
              <div class="col-md-2">
                <button style = "margin-bottom: 10px;" class="bt-blue" data-toggle="modal" data-target="#quoteModal" onclick="openModal(${property.id})">Editar</button>
                <button style = "margin-bottom: 10px;" class="bt-blue" data-toggle="modal" data-target="#quoteModal" onclick="openModal(${property.id})">Cotizar</button>
                <button style = "margin-bottom: 10px;" class="bt-blue" data-toggle="modal" data-target="#quoteModal" onclick="openModal(${property.id})">Pausar</button>
              </div>
            </div>
          </div>

          <div class="card" style="margin-top: 5px;">
            <div class="row">
              <div class="image-card col-md-3">
                <img src="{{asset('Imagenes/Fondo-seccion1.png')}}">
              </div>

              <div class="col-md-7">
                <h3>${property.Titulo}</h3>
                <p>$ ${property.Precio}</p>
                <div class="property-details">
                  <div class="property-detail"><i class="fas fa-bed property-detail-icon"></i><span>${property.Recamaras} Recámaras</span></div>
                  <div class="property-detail"><i class="fas fa-bath property-detail-icon"></i><span>${property.Baños} Baños</span></div>
                  <div class="property-detail"><i class="fas fa-ruler-combined property-detail-icon"></i><span>${property.Area} M² construidos</span></div>
                </div>
              </div>
              <div class="col-md-2">
                <button style = "margin-bottom: 10px;" class="bt-blue" data-toggle="modal" data-target="#quoteModal" onclick="openModal(${property.id})">Editar</button>
                <button style = "margin-bottom: 10px;" class="bt-blue" data-toggle="modal" data-target="#quoteModal" onclick="openModal(${property.id})">Cotizar</button>
                <button style = "margin-bottom: 10px;" class="bt-blue" data-toggle="modal" data-target="#quoteModal" onclick="openModal(${property.id})">Pausar</button>
              </div>
            </div>
          </div>

          <div class="card" style="margin-top: 5px;">
            <div class="row">
              <div class="image-card col-md-3">
                <img src="{{asset('Imagenes/Fondo-seccion1.png')}}">
              </div>

              <div class="col-md-7">
                <h3>${property.Titulo}</h3>
                <p>$ ${property.Precio}</p>
                <div class="property-details">
                  <div class="property-detail"><i class="fas fa-bed property-detail-icon"></i><span>${property.Recamaras} Recámaras</span></div>
                  <div class="property-detail"><i class="fas fa-bath property-detail-icon"></i><span>${property.Baños} Baños</span></div>
                  <div class="property-detail"><i class="fas fa-ruler-combined property-detail-icon"></i><span>${property.Area} M² construidos</span></div>
                </div>
              </div>
              <div class="col-md-2">
                <button style = "margin-bottom: 10px;" class="bt-blue" data-toggle="modal" data-target="#quoteModal" onclick="openModal(${property.id})">Editar</button>
                <button style = "margin-bottom: 10px;" class="bt-blue" data-toggle="modal" data-target="#quoteModal" onclick="openModal(${property.id})">Cotizar</button>
                <button style = "margin-bottom: 10px;" class="bt-blue" data-toggle="modal" data-target="#quoteModal" onclick="openModal(${property.id})">Pausar</button>
              </div>
            </div>
          </div>

          <div class="card" style="margin-top: 5px;">
            <div class="row">
              <div class="image-card col-md-3">
                <img src="{{asset('Imagenes/Fondo-seccion1.png')}}">
              </div>

              <div class="col-md-7">
                <h3>${property.Titulo}</h3>
                <p>$ ${property.Precio}</p>
                <div class="property-details">
                  <div class="property-detail"><i class="fas fa-bed property-detail-icon"></i><span>${property.Recamaras} Recámaras</span></div>
                  <div class="property-detail"><i class="fas fa-bath property-detail-icon"></i><span>${property.Baños} Baños</span></div>
                  <div class="property-detail"><i class="fas fa-ruler-combined property-detail-icon"></i><span>${property.Area} M² construidos</span></div>
                </div>
              </div>
              <div class="col-md-2">
                <button style = "margin-bottom: 10px;" class="bt-blue" data-toggle="modal" data-target="#quoteModal" onclick="openModal(${property.id})">Editar</button>
                <button style = "margin-bottom: 10px;" class="bt-blue" data-toggle="modal" data-target="#quoteModal" onclick="openModal(${property.id})">Cotizar</button>
                <button style = "margin-bottom: 10px;" class="bt-blue" data-toggle="modal" data-target="#quoteModal" onclick="openModal(${property.id})">Pausar</button>
              </div>
            </div>
          </div>
        </div>
        <!-- ESTADISTICAS -->
        <div class="property-list hidden" id="pl2">  
        <!-- Contenido principal -->
          <div id="estadisticas-content">
            <div style="margin-top: 10px;" class="col-12">
              <div class="row">
                <div class="card col-4">
                  <h4>Ventas:</h4>
                  <p>Ventas totales: X</p>
                  <p>Última venta: 2023-08-01</p>
                  <p>Venta más alta: $500,000</p>
                  <p>Promedio mensual: 5 ventas</p>
                </div>
                <div class="card col-8">
                  <canvas id="ventas-chart"></canvas>
                </div>
              </div>
            </div>

            <div style="margin-top: 10px;" class="col-12">
              <div class="row">
                <div class="card col-4">
                  <h4>Comentarios:</h4>
                  <p>Comentarios totales: X</p>
                  <p>Último comentario: 'Excelente servicio!'</p>
                  <p>Mejor puntuación: 5 estrellas</p>
                  <p>Puntuación promedio: 4.5 estrellas</p>
                </div>
                <div class="card col-8">
                  <canvas id="comentarios-chart"></canvas>
                </div>
              </div>
            </div>

            <div style="margin-top: 10px;" class="col-12">
              <div class="row">
                <div class="card col-4">
                  <h4>Propiedades verificadas:</h4>
                  <p>Verificadas: X</p>
                  <p>Última verificación: 2023-08-01</p>
                  <p>Verificación más alta: $750,000</p>
                  <p>Promedio mensual: 6 verificaciones</p>
                </div>
                <div class="card col-8">
                  <canvas id="verificadas-chart"></canvas>
                </div>
              </div>
            </div>

            <div style="margin-top: 10px;" class="col-12">
              <div class="row">
                <div class="card col-4">
                  <h4>Reportes:</h4>
                  <p>Reportes totales: X</p>
                  <p>Último reporte: 2023-08-01</p>
                  <p>Tipo común: Mantenimiento</p>
                  <p>Promedio mensual: 2 reportes</p>
                </div>
                <div class="card col-8">
                  <canvas id="reportes-chart"></canvas>
                </div>
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
  
  <!-- MODAL DE COTIZACION -->
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
      </div>
    </div>
  </div>


</body>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
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
  </script>
<script>
        // Datos de ejemplo para las estadísticas
        const ventasData = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
      const comentariosData = [5, 10, 15, 20, 25, 30, 35, 40, 45, 50];
      const verificadasData = [5, 4, 6];
      const totalData = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
      const reportesData = [3, 6, 9, 12, 15, 18, 21, 24, 27, 30];

      // Crear gráficos con Chart.js
      new Chart(document.getElementById('ventas-chart'), {
        type: 'line',
        data: {
          labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct'],
          datasets: [{
            label: 'Ventas Totales',
            data: ventasData,
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 2,
            fill: false
          }]
        }
      });

      new Chart(document.getElementById('comentarios-chart'), {
        type: 'bar',
        data: {
          labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct'],
          datasets: [{
            label: 'Comentarios',
            data: comentariosData,
            backgroundColor: 'rgba(153, 102, 255, 0.2)',
            borderColor: 'rgba(153, 102, 255, 1)',
            borderWidth: 1
          }]
        }
      });

      new Chart(document.getElementById('verificadas-chart'), {
        type: 'pie',
        data: {
          labels: ['Verificadas', 'PorVerificar', 'NoVerificadas'],
          datasets: [{
            label: 'Propiedades Verificadas',
            data: verificadasData,
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
          }]
        }
      });

      new Chart(document.getElementById('reportes-chart'), {
        type: 'bar',
        data: {
          labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct'],
          datasets: [{
            label: 'Reportes',
            data: reportesData,
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
          }]
        }
      });
</script>
@endsection