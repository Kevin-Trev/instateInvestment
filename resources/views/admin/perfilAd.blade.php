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

  .bt-blue {
    background-color: #3370FF;
    color: #FFFFFF;
    padding: 8px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-bottom: 5px;
    display: block;
    text-align: center;
  }
  .bt-blue:hover {
    background-color: #002E99;
    transition: .5s;
  }

  .card {
    margin-top: 20px;
    padding: 15px;
  }

  .property-details {
    margin-bottom: 15px;
  }
  
  .property-detail {
    margin-bottom: 5px;
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
  
  .property-detail-icon {
    margin-right: 5px;
  }

  .action-buttons {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-top: 10px;
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
      <!-- EDITAR -->
      <div class="mb-3">
        <button class="btn btn-primary" onclick="editProfile()">EDITAR</button>
      </div>
    </div>

    <main class="col-md-9 ml-sm-auto col-lg-9 px-md-4">
      <!-- MENU DE ACCIONES -->
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" id="publicaciones-tab" aria-current="page" href="#">Publicaciones</a>
        </li>
      </ul>
      <!-- LISTA DE PROPIEDADES -->
      <div class="property-list" id="pl">
        <h2> PROPIEDADES NO VERIFICADAS </h2>
        <!-- PROPIEDAD DE EJEMPLO -->
        <div class="card">
          <div class="row no-gutters">
            <div class="image-card col-md-3">
              <img src="{{ asset('Imagenes/Fondo-seccion1.png') }}" alt="Imagen de propiedad">
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h3 class="card-title">Propiedad</h3>
                <p class="card-text">$250,000</p>
                <div class="property-details">
                  <div class="property-detail"><i class="fas fa-bed property-detail-icon"></i><span>3 Recámaras</span></div>
                  <div class="property-detail"><i class="fas fa-bath property-detail-icon"></i><span>2 Baños</span></div>
                  <div class="property-detail"><i class="fas fa-ruler-combined property-detail-icon"></i><span>120 M² construidos</span></div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="action-buttons">
              <button class="bt-blue" onclick="window.location.href='{{ route('revisar') }}'">REVISAR</button>
                <button class="bt-blue" onclick="window.location.href='#'">VERIFICAR</button>
                <button class="bt-blue" onclick="window.location.href='#'">ELIMINAR</button>
              </div>
            </div>
          </div>
        </div>
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
      const publicacionesSection = document.getElementById('pl');
   
      // INICIAR EN PUBLICACIONES
      publicacionesSection.classList.remove('hidden');

      // VISTA PUBLICACIONES
      publicacionesTab.addEventListener('click', function() {
        publicacionesSection.classList.remove('hidden');
        publicacionesTab.classList.add('active');
      });
    });

    function editProfile() {
  
        alert("Editar perfil no jala.");
    }
</script>
@endsection
