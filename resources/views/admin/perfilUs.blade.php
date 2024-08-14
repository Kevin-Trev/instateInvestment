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

    .verificacion{
      width: 10px;
      height: 10px;
    }

    .btn-eliminar {
    background-color: red;
    color: #FFFFFF;
    padding: 8px 25px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-bottom: 5px;
    }
  </style>
  
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- AREA DE PERFIL -->
      <div class="card col-md-3 col-lg-3 mx-auto">
        <!-- FOTO PERFIL -->
        <div class="text-center mb-3"><br>
          <div class="profile-img-container mx-auto" style="width: 200px; height: 200px; overflow: hidden;">
            @if (Auth::user()->Foto)
            <img src="{{asset('storage/profile_photos/'.Auth::user()->Foto)}}" alt="Foto de perfil" class="profile-img" style="width: 100%; height: 100%; object-fit: cover;">
            @else
            <img src="{{asset('Imagenes/icono.png')}}" alt="Foto de perfil" class="profile-img" style="width: 100%; height: 100%; object-fit: cover;">
            @endif
          </div>
        </div>
        <!-- USERNAME -->
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre de Usuario</label>
          <input type="text" class="form-control" id="nombre" value="{{Auth::user()->name}}" readonly>
        </div>        
        <!-- NOMBRE -->
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" value="{{Auth::user()->Nombre}} {{Auth::user()->Apellido}}" readonly>
        </div>
        <!-- F NACIMIENTO -->
        <div class="mb-3">
          <label for="fecha-nacimiento" class="form-label">F. Nacimiento</label>
          <input type="text" class="form-control" id="fecha-nacimiento" value="{{Auth::user()->Fecha_Nacimiento}}" readonly>
        </div>
        <!-- correo -->
        <div class="mb-3">
          <label for="correo" class="form-label">Correo</label>
          <input type="text" class="form-control" id="correo" value="{{Auth::user()->email}}" readonly>
        </div>
        <!-- TELEFONO -->
        <div class="mb-3">
          <label for="telefono" class="form-label">Teléfono</label>
          <input type="text" class="form-control" id="telefono" value="{{Auth::user()->Telefono}}" readonly>
        </div>
        <!-- EDITAR -->
        <div class="mb-3 text-center">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUserModal">suspender cuenta </button>
        </div>
      </div>
      
      <main class="col-md-9 ml-sm-auto col-lg-9 px-md-4">
        <!-- MENU DE ACCIONES -->
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" id="publicacionesv-tab" aria-current="page">Publicaciones verificadas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="publicacionesnv-tab" aria-current="page">Publicaciones no verificadas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="publicacionesr-tab" aria-current="page">Publicaciones reportadas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="estadisticas-tab">Estadísticas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="infoSeguridad-tab">Informacion de Seguridad</a>
          </li>
        </ul>
        <div class = "card">
          <!-- BTN DE NUEVA PROPIEDAD -->
          <div class = "row">
            <div class = "col-sm-4	col-md-6	col-lg-9"></div>
            <div class = "col-sm-8	col-md-6	col-lg-3">
              <a href="">
                <button class="btn btn-primary col-12"><a class="nav-link" href="{{route('agregarPropiedad')}}">Nueva propiedad</a></button>
              </a>
            </div>
          </div>
        </div>
        <!-- LISTA DE PROPIEDADES VERIFICADAS -->
        <div class="property-list" id="plv">
          <!-- LISTA-->
          @foreach ($propiedades as $propiedad)
          @if($propiedad->Verificacion)
            <div class="card" style="margin-top: 5px;">
              <div class="row">
                <div class="image-card col-md-3">
                <span class="position-absolute bottom-0 start-50 translate-middle-x badge">
                  <img class="verificacion" src="{{asset('Imagenes/verificacion.png')}}">
                </span>
                  @if ($propiedad->main_image) {{-- Si la Propiedad No tiene Imagen Coloca una de stock--}}
                  <img src="{{asset('ImagesPublished/'.$propiedad->main_image->src_image)}}">
                  @else
                    <img src="{{asset('Imagenes/Fondo-seccion1.png')}}" alt="...">
                  @endif
                </div>
                <div class="col-md-7">
                  <h3>{{$propiedad->Calle}} {{$propiedad->num_exterior}}</h3>
                  <p>$ {{$propiedad->Precio}}</p>
                  <div class="property-details">
                    <div class="property-detail"><i class="fas fa-bed property-detail-icon"></i><span>{{$propiedad->Recamaras}} Recámaras</span></div>
                    <div class="property-detail"><i class="fas fa-bath property-detail-icon"></i><span>{{$propiedad->Baños}} Baños</span></div>
                    <div class="property-detail"><i class="fas fa-ruler-combined property-detail-icon"></i><span>{{$propiedad->Area}} M² construidos</span></div>
                  </div>
                </div>
                <div class="col-md-2">
                  <button style = "margin-bottom: 10px;" class="bt-blue" data-toggle="modal" data-target="#editPropModal" onclick="datosProp({{$propiedad->ID_P}})">Editar</button>
                  @if ($propiedad->Rentable)
                  <button style = "margin-bottom: 10px;" class="bt-blue" data-toggle="modal" data-target="#quoteModal" onclick="openModal(${property.id})">Cotizar</button>
                  @endif
                  <button style = "margin-bottom: 10px;" class="bt-blue" data-toggle="modal" data-target="#quoteModal">Pausar</button>
                </div>
              </div>
            </div>
          @endif
          @endforeach
        </div>

        <!-- LISTA DE PROPIEDADES NO VERIFICADAS-->
        <div class="property-list" id="plnv">
          <!-- LISTA-->
          @foreach ($propiedades as $propiedad)
          @if(!$propiedad->Verificacion)
          <div class="card" style="margin-top: 5px;">
            <div class="row">
              <div class="image-card col-md-3">
                @if ($propiedad->main_image) {{-- Si la Propiedad No tiene Imagen Coloca una de stock--}}
                <img src="{{asset('ImagesPublished/'.$propiedad->main_image->src_image)}}">
                @else
                  <img src="{{asset('Imagenes/Fondo-seccion1.png')}}" alt="...">
                @endif
              </div>
              <div class="col-md-7">
                <h3>{{$propiedad->Calle}} {{$propiedad->num_exterior}}</h3>
                <p>$ {{$propiedad->Precio}}</p>
                <div class="property-details">
                  <div class="property-detail"><i class="fas fa-bed property-detail-icon"></i><span>{{$propiedad->Recamaras}} Recámaras</span></div>
                  <div class="property-detail"><i class="fas fa-bath property-detail-icon"></i><span>{{$propiedad->Baños}} Baños</span></div>
                  <div class="property-detail"><i class="fas fa-ruler-combined property-detail-icon"></i><span>{{$propiedad->Area}} M² construidos</span></div>
                </div>
              </div>
              <div class="col-md-2">
                <button style = "margin-bottom: 10px;" class="bt-blue" data-toggle="modal" data-target="#quoteModal">Editar</button>
                <button style = "margin-bottom: 10px;" class="bt-blue" data-toggle="modal" data-target="#quoteModal" onclick="openModal(${property.id})">Cotizar</button>
                <form action="{{ route('propiedad.eliminar', ['ID_P' => $propiedad->ID_P]) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta propiedad?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn-eliminar"  >Eliminar</button>
</form>
              </div>
            </div>
          </div>
          @endif
          @endforeach
        </div>

        <!-- ESTADISTICAS -->
        <div class="property-list hidden" id="pl2">  
          <!-- Contenido principal -->
          <div id="estadisticas-content">

            <div style="margin-top: 10px;" class="col-12">
                <div class="card">
                  <div class = "card-title">
                    EXELENTE
                  </div>
                  <div class= "card-body">
                    <h1>EXELENTE VENDEDOR</h1>
                  </div>
                </div>
            </div>

            <div style="margin-top: 10px;" class="col-12">
              <div class="row">
                <div class="card col-sm-4	col-md-2	col-lg-2">
                  <h4>Ventas:</h4>
                  <p>Ventas totales: X</p>
                  <p>Última venta: 2023-08-01</p>
                  <p>Venta más alta: $500,000</p>
                </div>
                <div class="card col-sm-8	col-md-4	col-lg-4">
                  <canvas id="ventas-chart"></canvas>
                </div>

                <div class="card col-sm-4	col-md-2	col-lg-2">
                  <h4>Interacciones:</h4>
                  <p>Comentarios totales: X</p>
                </div>
                <div class="card col-sm-8	col-md-4	col-lg-4">
                  <canvas id="comentarios-chart"></canvas>
                </div>
              </div>
            </div>

            <div style="margin-top: 10px;" class="col-12">
              <div class="row">
                <div class="card col-sm-4	col-md-2	col-lg-2">
                  <h4>Propiedades verificadas:</h4>
                  <p>Verificadas: X</p>
                  <p>Última verificación: 2023-08-01</p>
                </div>
                <div class="card col-sm-8	col-md-4	col-lg-4">
                  <canvas id="verificadas-chart"></canvas>
                </div>

                <div class="card col-sm-4	col-md-2	col-lg-2">
                  <h4>Reportes:</h4>
                  <p>Reportes totales: X</p>
                  <p>Último reporte: 2023-08-01</p>
                </div>
                <div class="card col-sm-8	col-md-4	col-lg-4">
                  <canvas id="reportes-chart"></canvas>
                </div>
              </div>
            </div> 
                       
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
      const publicacionesvTab = document.getElementById('publicacionesv-tab');
      const publicacionesnvTab = document.getElementById('publicacionesnv-tab');
      const estadisticasTab = document.getElementById('estadisticas-tab');
      const publicacionesvSection = document.getElementById('plv');
      const estadisticasSection = document.getElementById('pl2');
      const publicacionesnvSection = document.getElementById('plnv');

     
    });
      // INICIAR EN PUBLICACIONES
      publicacionesvSection.classList.remove('hidden');
      publicacionesnvSection.classList.add('hidden');
      estadisticasSection.classList.add('hidden');

        // VISTA PUBLICACIONES
        publicacionesvTab.addEventListener('click', function() {
        publicacionesvSection.classList.remove('hidden');
        publicacionesnvSection.classList.add('hidden');
        estadisticasSection.classList.add('hidden');
        publicacionesvTab.classList.add('active');
        publicacionesnvTab.classList.remove('active');
        estadisticasTab.classList.remove('active');
      });

        // VISTA PUBLICACIONES NO VERIFICADAS
        publicacionesnvTab.addEventListener('click', function() {
        publicacionesnvSection.classList.remove('hidden');
        publicacionesvSection.classList.add('hidden');
        estadisticasSection.classList.add('hidden');
        publicacionesnvTab.classList.add('active');
        publicacionesvTab.classList.remove('active');
        estadisticasTab.classList.remove('active');
      });

      // VISTA ESTADISTICAS
      estadisticasTab.addEventListener('click', function() {
        publicacionesvSection.classList.add('hidden');
        publicacionesnvSection.classList.add('hidden');
        estadisticasSection.classList.remove('hidden');
        publicacionesvTab.classList.remove('active');
        publicacionesnvTab.classList.remove('active');
        estadisticasTab.classList.add('active');
      });



    function fetchTipoPropiedad() {

    }

    function datosProp (id) {
      $.ajax({
        url: `{{ url('/get/data/property') }}/${id}`,
        method: `GET`,
        success: function(data){
          $('#calle').val(data.Calle);
          $('#num_exterior').val(data.num_exterior);
          $('#num_interior').val(data.num_interior);
          $('#colonia').val(data.Colonia);
          $('$codigo_postal').val(data.Codigo_Postal);
          $('#ciudad').val(data.Ciudad);
          $('#estado').val(data.Estado);
          $('#recamaras').val(data.Recamaras);
          $('#baños').val(data.Baños);
          $('#tipo_propiedad').val(data.Tipo_Propiedad_id);
          $('#area').val(data.Area);
          $('#frente').val(data.Frente);
          $('#fondo').val(data.Fondo);

        }
      });
    }

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