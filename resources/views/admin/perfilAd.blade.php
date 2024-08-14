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
    
    .suspendida {
    border: 7px solid grey; 
}

.btn-verificar {
    background-color: green;
    color: #FFFFFF;
    padding: 8px 25px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-bottom: 5px;
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
    .btn-suspender {
    background-color: #f1c308;
    color: #FFFFFF;
    padding: 8px 25px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-bottom: 5px;
    }

    .tab-pane {
    display: none; /* Oculta todas las pestañas por defecto */
}

.tab-pane.active {
    display: block; /* Muestra solo la pestaña activa */
}

.nav-link.active {
    font-weight: bold; /* Destaca la pestaña activa */
}

.button-container {
  display: flex;
  gap: 10px; /* Espacio entre los botones, ajusta según sea necesario */
  align-items: center; /* Alinea verticalmente los botones en el centro */
}

.button-container form {
  margin-bottom: 0; /* Elimina margen inferior en formularios si es necesario */
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
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUserModal">EDITAR DATOS</button>
        </div>
      </div>
      
      <main class="col-md-9 ml-sm-auto col-lg-9 px-md-4">
        <!-- MENU DE ACCIONES -->
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" id="publicacionesV-tab" aria-current="page">Publicaciones No verificadas</a>
          </li>
        </ul>
        <h2> Publicaciones no verificadas </h2>
        <div class = "card">
         
        <!-- LISTA DE PROPIEDADES -->
        <div class="property-list" id="pl">
          
          <!-- PROPIEDADES DE EJEMPLO-->
          @foreach ($propiedades as $propiedad)
          @if ($propiedad->Disponibilidad)
            <div id="publicacion-{{ $propiedad->ID_P }}" class="publicacion">
              <div class="card" style="margin-top: 5px;">
                <div class="row">
                  <div class="image-card col-md-3">
                  @if ($propiedad->main_image)
                  <img src="{{asset('ImagesPublished/'.$propiedad->main_image->src_image)}}">
                  @else
                  <img src="{{asset('Imagenes/Fondo-seccion1.png')}}" alt="...">
                  @endif
                  </div>
                  <div class="col-md-7">
                  <h3>{{$propiedad->Titulo}}</h3>
                  <p>$ {{$propiedad->Precio}}</p>
                  <div class="property-details">
                    <div class="property-detail"><i class="fas fa-bed property-detail-icon"></i><span>{{$propiedad->Recamaras}} Recámaras</span></div>
                    <div class="property-detail"><i class="fas fa-bath property-detail-icon"></i><span>{{$propiedad->Baños}} Baños</span></div>
                    <div class="property-detail"><i class="fas fa-ruler-combined property-detail-icon"></i><span>{{$propiedad->Area}} M² construidos</span></div>
                  </div>
                  </div>
                  <div class="col-md-2">
                    <button class="bt-blue"><a href="/get/property/admin/{{$propiedad->ID_P}}" style="margin-bottom: 10px; color:white;">Revisar</a></button>
                    <form action="{{ route('propiedad.eliminar', ['ID_P' => $propiedad->ID_P]) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta propiedad?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-eliminar"  >Eliminar</button>
                    </form>
                    <!-- Formulario para Verificar -->
                    @if(isset($propiedad->ID_P))
                    <form action="{{ route('propiedad.verificar', ['ID_P' => $propiedad->ID_P]) }}" method="POST">
                      @csrf
                      <button type="submit" class="btn-verificar">Verificar</button>
                    </form>
                    @else
                    <button class="btn-verificar" style="margin-bottom: 10px;">Verificar</button>
                    @endif
                    <form id="suspender-form-{{ $propiedad->ID_P }}" action="{{ route('propiedad.suspender', ['ID_P' => $propiedad->ID_P]) }}" method="POST" onsubmit="return confirmarSuspension({{ $propiedad->ID_P }});">
                    @csrf
                    <button style="margin-bottom: 10px;" class="btn-suspender">Suspender</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            @endif
            @endforeach



  <!-- MODAL DE EDITAR DATOS USUARIO-->
  <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar Datos del Usuario</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('user.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
              <div class="form-group">
                <div class="text-center mb-3">
                  <h5 class="card-title">Foto de perfil</h5>
                  <div id="ee" class="profile-img-container mx-auto" style="width: 200px; height: 200px; overflow: hidden;">
                    <input type="file" name="Foto" id="foto" accept=".jpg,.png" hidden>
                    @if (Auth::user()->Foto)
                    <img id="preview" src="{{asset('storage/profile_photos/'.Auth::user()->Foto)}}" alt="Foto de perfil" class="profile-img" style="width: 100%; height: 100%; object-fit: cover;">
                    @else
                    <img id="preview" src="{{asset('Imagenes/icono.png')}}" alt="Foto de perfil" class="profile-img" style="width: 100%; height: 100%; object-fit: cover;">
                    @endif
                  </div>
                </div>      
              </div>
              <div class="form-group">
                <label for="username">Nombre de Usuario</label>
                <input class="form-control" type="text" name="name" value="{{Auth::user()->name}}" required>
              </div>
              <div class="form-group">
                <label for="name">Nombre</label>
                <input class="form-control" type="text" name="Nombre" value="{{Auth::user()->Nombre}}" required>
              </div>
              <div class="form-group">
                <label for="lastname">Apellido(s)</label>
                <input class="form-control" type="text" name="Apellido" value="{{Auth::user()->Apellido}}" required>
              </div>
              <div class="form-group">
                <label for="phone">Telefono</label>
                <input class="form-control" type="text" name="Telefono" value="{{Auth::user()->Telefono}}" required>
              </div>
              <div class="form-group">
                <label for="birthday">Fecha de Nacimiento</label>
                <input class="form-control" type="date" name="Fecha_Nacimiento" value="{{Auth::user()->Fecha_Nacimiento}}" required>
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Guardar</button>
          </div>
        </form>
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









/*--- ---*/
    document.addEventListener('DOMContentLoaded', function() {
      const publicacionesTab = document.getElementById('publicacionesV-tab');
      const estadisticasTab = document.getElementById('publicacionesS-tab');
      const publicacionesSection = document.getElementById('pl');
      const estadisticasSection = document.getElementById('pl2');

      // cambiar y mostrar previo foto de perfil //
      document.getElementById('ee').addEventListener('click', function() {
        document.getElementById('foto').click();
      });
      document.getElementById('foto').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
      });

      // INICIAR EN PUBLICACIONES
      publicacionesSection.classList.remove('hidden');
      estadisticasSection.classList.add('hidden');

      // VISTA PUBLICACIONES
      publicacionesTab.addEventListener('click', function() {
        publicacionesSection.classList.remove('hidden');
        estadisticasSection.classList.add('hidden');
        publicacionesTab.classList.add('active');
        estadisticasTab.classList.remove('active');
      });

      // VISTA ESTADISTICAS
      estadisticasTab.addEventListener('click', function() {
        publicacionesSection.classList.add('hidden');
        estadisticasSection.classList.remove('hidden');
        publicacionesTab.classList.remove('active');
        estadisticasTab.classList.add('active');
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
      function confirmarSuspension(ID_P) {
        if (confirm('¿Estás seguro de que deseas suspender esta propiedad?')) {
            // Enviar la solicitud de suspensión por AJAX
            var form = document.getElementById('suspender-form-' + ID_P);
            var formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Cambiar el contorno de la publicación a gris
                    document.getElementById('publicacion-' + ID_P).classList.add('suspendida');
                } else {
                    alert(data.message);
                }
            })
            .catch(error => console.error('Error:', error));
        }

        // Prevenir el envío normal del formulario
        return false;
    }


</script>
@endsection