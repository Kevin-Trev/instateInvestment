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
  </style>

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
              <button class="property-button btn btn-primary" data-toggle="modal" data-target="#quoteModal" onclick="openModal(${property.id})">COTIZAR</button>
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
                <div class="card text-white bg-danger mb-3">
                  <div class="card-header">Suspendidos</div>
                  <div class="card-body">
                    <h5 class="card-title">23</h5>
                    <p class="card-text">Número de usuarios suspendidos.</p>
                  </div>
                </div>
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
          </div>
        </div>
      </main>
    </div>
  </div>

  <!-- Modal COTIZAR -->
  <div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="quoteModalLabel">Solicitar Cotización</h5>
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
            </div>
            <div class="form-group">
              <label for="email">Correo Electrónico</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="telefono">Teléfono</label>
              <input type="tel" class="form-control" id="telefono" name="telefono" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  document.getElementById('publicaciones-tab').addEventListener('click', function() {
    document.getElementById('pl').classList.remove('hidden');
    document.getElementById('pl2').classList.add('hidden');
    document.getElementById('pl3').classList.add('hidden');
  });

  document.getElementById('estadisticas-tab').addEventListener('click', function() {
    document.getElementById('pl').classList.add('hidden');
    document.getElementById('pl2').classList.remove('hidden');
    document.getElementById('pl3').classList.add('hidden');
  });

  document.getElementById('calendario-tab').addEventListener('click', function() {
    document.getElementById('pl').classList.add('hidden');
    document.getElementById('pl2').classList.add('hidden');
    document.getElementById('pl3').classList.remove('hidden');
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
  // INVESTIGAR QUE CHUCHA CON ESTA WEA
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