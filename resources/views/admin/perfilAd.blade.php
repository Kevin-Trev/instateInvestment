@extends('layout.paginaInicio')

@section('title', 'Perfil Admin')
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

  .image-card {
    width: 100%;
    height: 150px;
  }

  .image-card img {
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
  .bt-blue:hover {
    background-color: #002E99;
    transition: .5s;
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
          <img src="{{ asset('Imagenes/CarlosTrejo.jpg') }}" alt="Foto de perfil" class="profile-img" style="width: 100%; height: 100%; object-fit: cover;">
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
      </ul>
      <!-- LISTA DE PROPIEDADES -->
      <div class="property-list" id="pl">
        <!-- PROPIEDADES -->
        @if($propiedades->isEmpty())
            <p>No hay propiedades no verificadas.</p>
        @else
            @foreach ($propiedades as $propiedad)
                <div class="card" style="margin-top: 5px;">
                    <div class="row">
                        <div class="image-card col-md-3">
                            <img src="{{ asset('Imagenes/Fondo-seccion1.png') }}">
                        </div>
                        <div class="col-md-7">
                            <h3>{{ $propiedad->titulo }}</h3>
                            <p>${{ $propiedad->precio }}</p>
                            <div class="property-details">
                                <div class="property-detail"><i class="fas fa-bed property-detail-icon"></i><span>{{ $propiedad->recamaras }} Recámaras</span></div>
                                <div class="property-detail"><i class="fas fa-bath property-detail-icon"></i><span>{{ $propiedad->baños }} Baños</span></div>
                                <div class="property-detail"><i class="fas fa-ruler-combined property-detail-icon"></i><span>{{ $propiedad->area }} M² construidos</span></div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('revisarPropiedad', ['id' => $propiedad->id]) }}" class="bt-blue">REVISAR</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
      </div>
    </main>
  </div>
</div>

@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
      const publicacionesTab = document.getElementById('publicaciones-tab');
      const estadisticasTab = document.getElementById('estadisticas-tab');
      const publicacionesSection = document.getElementById('pl');
      const estadisticasSection = document.getElementById('pl2');
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
      
  
    });
</script>
@endsection
