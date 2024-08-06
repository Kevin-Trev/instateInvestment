@extends('layout.paginaInicio')

@section('style')
<style>
    /* Estilos específicos para la sección de propiedades */
    #properties-section .input-groups {
        display: flex;
        align-items: center;
        margin-left: 50px;
    }

    #properties-section body {
        border: 2px solid red;
    }

    #properties-section .input-groups input[type="text"] {
        padding: 8px 10px;
        border: 1px solid #B7BEC0;
        border-radius: 5px 0 0 5px;
        color: #1D2021;
        outline: none;
        width: 250px;
    }

    #properties-section .input-groups input[type="submit"] {
        background-color: #3370FF;
        color: #FFFFFF;
        border: none;
        border-radius: 0 5px 5px 0;
        padding: 9px 16px;
        width: 120px;
        cursor: pointer;
    }

    #properties-section .input-groups input::placeholder {
        color: #B7BEC0;
    }

    #properties-section .form-group {
        width: 100px;
        height: 42px;
        margin-left: 50px;
    }

    #properties-section #filtroBusqueda {
        display: flex;
        margin-right: 10px;
    }

    #properties-section .form-group input[type="number"] {
        width: 200px;
        height: 42px;
    }

    /* Estilos para vista en lista */
    #properties-section .card {
        display: flex;
        flex-direction: row;
        width: 90%;
        margin: 20px auto;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        background-color: #fff;
    }

    #properties-section .image-card {
        width: 30%;
        min-width: 150px;
        max-width: 200px;
        margin-right: 15px;
    }

    #properties-section .image-card img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 6px;
    }

    #properties-section .card-details {
        width: 70%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    #properties-section .caracteristicas {
        display: flex;
        margin-top: 10px;
        margin-bottom: 10px;
        justify-content: space-between;
    }

    #properties-section .roomsContainer {
        display: flex;
        align-items: center;
    }

    #properties-section .roomsContainer img {
        width: 25px;
        margin-right: 5px;
    }

    #properties-section .number {
        color: #9ea4a5;
    }

    #properties-section h3 {
        color: #3370FF;
        margin: 10px 0;
    }

    #properties-section .text {
        color: #898e90;
        font-size: 14px;
    }

    #properties-section .footer {
        display: flex;
        justify-content: flex-start;
        margin-top: 10px;
    }

    #properties-section .footer button {
        margin-right: 15px;
        padding: 6px 12px;
        border-radius: 4px;
        cursor: pointer;
    }

    #properties-section .btn-white {
        background-color: #fff;
        color: #000;
        border: 1px solid #ddd;
    }

    #properties-section .btn-blue {
        background-color: #3370FF;
        color: #fff;
        border: none;
    }

    #properties-section #cards-container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    @media(max-width: 992px) {
        #properties-section .card {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        #properties-section .image-card {
            width: 100%;
            max-width: none;
            margin-bottom: 15px;
        }

        #properties-section .card-details {
            width: 100%;
        }
    }
</style>
@endsection

@section('body')

{{-- Fila de filtros --}}

<div id="filtroBusqueda">
  

<br>

{{-- Sección de propiedades no verificadas --}}
<div id="properties-section" class="container">
    <h2> Propiedades no verificadas </h2>
    <p class="text"> Estas son las propiedades no verificadas que encontramos para ti</p>
    <div id="cards-container">
        <div class="card">
            <div class="image-card">
                <img src="{{asset('Imagenes/Fondo-seccion1.png')}}" alt="Imagen de propiedad">
            </div>
            <div class="card-details">
                <div class="caracteristicas">
                    <div class="roomsContainer">
                        <img src="{{asset('Imagenes/juanGuarnizo.png')}}">
                        <span class="number">2</span>
                    </div>
                    <div class="roomsContainer">
                        <img src="{{asset('Imagenes/bañeraSimbolo.png')}}">
                        <span class="number">2</span>
                    </div>
                </div>
                <h3> Precio de la propiedad </h3>
                <p class="text">Direccion de la propiedad</p>
                <div class="footer">
                    <button class="btn-white">Eliminar</button>
                    <button class="btn-blue">Verificar</button>
                    <button class="btn-white">Suspender</button>
                </div>
            </div>
        </div>
    </div>
</div>

<footer id="page-footer">
  <div class="container-info">
      <img src="{{ asset('/Imagenes/LOGO.png') }}">
      <p>Instate es una marca registrada por <br>Instate Investments S.A de C.V. en <br>alianza con Design Construcciones.</p>
  </div>

  <br>

  <div class="container-info" id="este">
      <h2>Contacto</h2>
      <hr>
      <b>MINA 330 INT. 5 COL.CENTRO <br>MONTERREY, NUEVO LEÓN. MÉXICO <br>812-433-1672</b>
          
      <br>

        <div class="container-social">
            <a href="">
                <img src="{{ asset('Imagenes/iconoFacebook.png')}}">
            </a>
        </div>
        <div class="container-social">
            <a href="">
                <img src="{{ asset('Imagenes/iconoTwitter.png')}}">
            </a>
        </div>
        <div class="container-social">
            <a href="">
                <img src="{{ asset('Imagenes/iconoInstagram.png')}}">
            </a>
        </div>
  </div>
      <div class="container-info2">
          <h2>Legal</h2>
          <hr>
          <a href="/legal">Aviso legal</a><br><br><a href="/privacidad">Politica de privacidad </a><br><br><a href="/privacidad">Politica de cookies</a>
      </div>
      <div class="container-info2">
          <h2>Sobre</h2>
          <hr>
          <a href="/nosotros">Nosotros</a><br><br><a href="/mision">Misión</a><br><br><a href="/vision">Visión</a>
      </div>
</footer>

@endsection

@section('js')
<script>
  $(document).ready(function() {
    cargarPropiedades();
  });

  function cargarPropiedades() {
    $.ajax({
      url: `/get/properties`,
      method: `GET`,
      success: function(data) {
        console.log(data);
        const listaPropiedades = $('#cards-container');
        listaPropiedades.empty();

        data.forEach(property => {
          var stockImg = 'stock.png';
          var precioFormateado = property.Precio.toLocaleString('es-MX');

          const propiedad =
            `<div class="card">
                <div class="image-card">
                  <img src="{{asset('ImagesPublished/${property.main_image ? property.main_image.src_image : stockImg}')}}" alt="propiedad ${property.ID_P}">
                </div>
                <div class="card-details">
                  <div class="caracteristicas">
                    <div class="roomsContainer">
                      <img src="{{asset('Imagenes/juanGuarnizo.png')}}">
                      <span class="number">${property.Baños}</span>
                    </div>
                    <div class="roomsContainer">
                      <img src="{{asset('Imagenes/bañeraSimbolo.png')}}">
                      <span class="number">${property.Recamaras}</span>
                    </div>
                  </div>
                  <h3 class="precio">$ ${precioFormateado} MXN</h3>
                  <p class="text">${property.Calle} #${property.num_exterior}, ${property.Colonia}</p>
                  <div class="footer">
                    <button class="btn-white">Eliminar</button>
                    <button href="" class="btn-blue">Verificar</button>
                    <button class="btn-white">Suspender</button>
                  </div>
                </div>
              </div>`;
          listaPropiedades.append(propiedad);
        });
      }
    });
  }
</script>
@endsection