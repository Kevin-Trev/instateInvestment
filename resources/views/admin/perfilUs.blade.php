@extends('layout.paginaInicio')

@section('title', 'Perfil')
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
    .bt-blue, .btn-eliminar {
        color: #FFFFFF;
        padding: 8px 25px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-bottom: 5px;
    }
    .bt-blue {
        background-color: #3370FF;
    }
    .bt-blue:hover {
        background-color: #002E99;
        transition: .5s;
    }
    .btn-eliminar {
        background-color: red;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <!-- Área de Perfil -->
        <div class="card col-md-3 col-lg-3 mx-auto">
            <div class="text-center mb-3">
                <br>
                <div class="profile-img-container mx-auto" style="width: 200px; height: 200px; overflow: hidden;">
                    @if (Auth::user()->Foto)
                        <img src="{{asset('storage/profile_photos/'.Auth::user()->Foto)}}" alt="Foto de perfil" class="profile-img">
                    @else
                        <img src="{{asset('Imagenes/icono.png')}}" alt="Foto de perfil" class="profile-img">
                    @endif
                </div>
            </div>
            <div class="mb-3">
                <label for="nombre-usuario" class="form-label">Nombre de Usuario</label>
                <input type="text" class="form-control" id="nombre-usuario" value="{{Auth::user()->name}}" readonly>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" value="{{Auth::user()->Nombre}} {{Auth::user()->Apellido}}" readonly>
            </div>
            <div class="mb-3">
                <label for="fecha-nacimiento" class="form-label">F. Nacimiento</label>
                <input type="text" class="form-control" id="fecha-nacimiento" value="{{Auth::user()->Fecha_Nacimiento}}" readonly>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="text" class="form-control" id="correo" value="{{Auth::user()->email}}" readonly>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" value="{{Auth::user()->Telefono}}" readonly>
            </div>
            <div class="mb-3 text-center">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#suspendUserModal">Suspender Cuenta</button>
            </div>
        </div>

        <main class="col-md-9 ml-sm-auto col-lg-9 px-md-4">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" id="publicacionesv-tab" aria-current="page">Publicaciones Verificadas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="publicacionesnv-tab" aria-current="page">Publicaciones No Verificadas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="publicacionesr-tab" aria-current="page">Publicaciones Reportadas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="estadisticas-tab">Estadísticas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="infoSeguridad-tab">Información de Seguridad</a>
                </li>
            </ul>
            <div class="card">
                <div class="row">
                    <div class="col-sm-4 col-md-6 col-lg-9"></div>
                    <div class="col-sm-8 col-md-6 col-lg-3">
                        <a href="{{route('agregarPropiedad')}}">
                            <button class="btn btn-primary col-12">Nueva Propiedad</button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Lista de Propiedades Verificadas -->
            <div class="property-list" id="plv">
                @foreach ($propiedades as $propiedad)
                    @if($propiedad->Verificacion)
                        <div class="card mt-2">
                            <div class="row">
                                <div class="image-card col-md-3">
                                    <span class="position-absolute bottom-0 start-50 translate-middle-x badge">
                                        <img class="verificacion" src="{{asset('Imagenes/verificacion.png')}}">
                                    </span>
                                    @if ($propiedad->main_image)
                                        <img src="{{asset('ImagesPublished/'.$propiedad->main_image->src_image)}}">
                                    @else
                                        <img src="{{asset('Imagenes/Fondo-seccion1.png')}}" alt="...">
                                    @endif
                                </div>
                                <div class="col-md-7">
                                    <h3>{{$propiedad->Calle}} {{$propiedad->num_exterior}}</h3>
                                    <p>${{ $propiedad->Precio }}</p>
                                    <div class="property-details">
                                        <div class="property-detail"><i class="fas fa-bed property-detail-icon"></i><span>{{$propiedad->Recamaras}} Recámaras</span></div>
                                        <div class="property-detail"><i class="fas fa-bath property-detail-icon"></i><span>{{$propiedad->Baños}} Baños</span></div>
                                        <div class="property-detail"><i class="fas fa-ruler-combined property-detail-icon"></i><span>{{$propiedad->Area}} M² construidos</span></div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button class="bt-blue mb-2" data-toggle="modal" data-target="#editPropModal" onclick="datosProp({{$propiedad->ID_P}})">Editar</button>
                                    @if ($propiedad->Rentable)
                                        <button class="bt-blue mb-2" data-toggle="modal" data-target="#quoteModal" onclick="openModal({{$propiedad->ID_P}})">Cotizar</button>
                                    @endif
                                    <button class="bt-blue mb-2" data-toggle="modal" data-target="#quoteModal">Pausar</button>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- Lista de Propiedades No Verificadas -->
            <div class="property-list" id="plnv">
                @foreach ($propiedades as $propiedad)
                    @if(!$propiedad->Verificacion)
                        <div class="card mt-2">
                            <div class="row">
                                <div class="image-card col-md-3">
                                    @if ($propiedad->main_image)
                                        <img src="{{asset('ImagesPublished/'.$propiedad->main_image->src_image)}}">
                                    @else
                                        <img src="{{asset('Imagenes/Fondo-seccion1.png')}}" alt="...">
                                    @endif
                                </div>
                                <div class="col-md-7">
                                    <h3>{{$propiedad->Calle}} {{$propiedad->num_exterior}}</h3>
                                    <p>${{ $propiedad->Precio }}</p>
                                    <div class="property-details">
                                        <div class="property-detail"><i class="fas fa-bed property-detail-icon"></i><span>{{$propiedad->Recamaras}} Recámaras</span></div>
                                        <div class="property-detail"><i class="fas fa-bath property-detail-icon"></i><span>{{$propiedad->Baños}} Baños</span></div>
                                        <div class="property-detail"><i class="fas fa-ruler-combined property-detail-icon"></i><span>{{$propiedad->Area}} M² construidos</span></div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button class="bt-blue mb-2" data-toggle="modal" data-target="#quoteModal">Editar</button>
                                    <button class="bt-blue mb-2" data-toggle="modal" data-target="#quoteModal">Cotizar</button>
                                    <button class="bt-blue mb-2" data-toggle="modal" data-target="#quoteModal">Pausar</button>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </main>
    </div>
</div>

<!-- Modal para suspender al usuario -->
<div class="modal fade" id="suspendUserModal" tabindex="-1" aria-labelledby="suspendUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="suspendUserModalLabel">Suspender cuenta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de que deseas suspender la cuenta de este usuario?</p>
            </div>
            <div class="modal-footer">
                <form action="{{ route('suspender.usuario', $user->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Suspender</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
@endsection
