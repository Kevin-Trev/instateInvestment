@extends('layout.paginaInicio')

@section('title', 'perfil')
@section('style')

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
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-3 col-lg-2 d-md sidebar">
        <div class="position-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="perfil">Información personal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Seguridad</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Publicaciones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">DashBoard</a>
            </li>
          </ul>
        </div>
      </nav>
      <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class = "card">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
           <h1 class="h2">Información básica</h1>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-9">
                  <h5 class="card-title">Foto de perfil</h5>
                </div>
                <div class="col-md-3 text-right">
                  <img src="{{asset('Imagenes/LOGO2.png')}}"alt="Foto de perfil" class="profile-img">
                </div>
              </div>
              <div class="row">
              <div class="col-md-6">
                <h5 class="card-title">Nombre</h5>
                <p>Monreal García Brandon Iván</p>
              </div>
              <div class="col-md-6">
                <a href="#" class="btn btn-link">Editar</a>
              </div>
              </div>
              <div class="row">
              <div class="col-md-6">
                <h5 class="card-title">Fecha de nacimiento</h5>
                <p>22 de julio de 2003</p>
              </div>
              <div class="col-md-6">
                <a href="#" class="btn btn-link">Editar</a>
              </div>
              </div>
              <div class="row">
              <div class="col-md-6">
                <h5 class="card-title">Género</h5>
                <p>Masculino</p>
              </div>
              <div class="col-md-6">
                <a href="#" class="btn btn-link">Editar</a>
              </div>
              </div>
            </div>
          </div>
        </div>

              <div class = "card">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Información De Contacto</h1>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <h5 class="card-title">Numero de Telefono</h5>
              </div>
              <div class="col-md-6">
                <a href="#" class="btn btn-link">Editar</a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <h5 class="card-title">Correo</h5>
              </div>
              <div class="col-md-6">
                <a href="#" class="btn btn-link">Editar</a>
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
    
@endsection