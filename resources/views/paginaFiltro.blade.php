@extends('layout.paginaInicio')

@section('style')
<style>
    .input-groups{
        display: flex;
        align-items: center;
        margin-left: 50px;
    }
    
    .input-groups input[type="text"]{
        padding: 8px 10px;
        border: 1px solid #B7BEC0;
        border-radius: 5px 0 0 5px;
        color: #1D2021;
        outline: none;
        width: 250px;
    }
    
    .input-groups input[type="submit"]{
        background-color: #3370FF;
        color: #FFFFFF;
        border: none;
        border-radius: 0 5px 5px 0;
        padding: 9px 16px;
        width: 120px;
        cursor: pointer;
    }
    
    .input-groups input::placeholder{
        color: #B7BEC0;
    }

    .form-group{
      width: 100px;
      height: 42px;
      margin-left: 50px;
    }

    #filtroBusqueda{
      display: flex;
      margin-right: 10px;
    }

    .form-group input[type="number"]{
      width: 200px;
      height: 42px;
    }

    .card{
      width: 25%;
      height: auto;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      float: left;
      margin: 20px 0 60px 6.5%;
    }

    .image-card{
      width: 100%;
      height: 150px;
    }

    .image-card img{
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 6px 6px 0 0;
    }

    .disponible{
      margin-top: 35px;
      display: flex;
      padding: 10px;
    }

    h3, .text{
      margin-left: 10px;
    }

    h3{
      color: #3370FF;
    }

    .disponible button{
      margin-right: 10px;
      padding: 2px;
    }

    .disponible .btn-white{
      width: 60px;
    }

    .footer{
      display: flex;
      justify-content: flex-end;
      padding-bottom: 15px;
    }

    .footer button{
      margin-right: 15px;
      padding: 6px;
    }

    .text{
      color: #898e90;
      font-size: 14px;
    }

    .caracteristicas{
      display: flex;
      margin-left: 10px;
    }

    .roomsContainer{
      display: flex;
      align-items: center;
      margin-right: 20px;
    }

    .roomsContainer img{
      width: 25px;
    }

    .number{
      margin-left: 10px;
      color: #9ea4a5;
      align-items: center;
    }

    #cards-container{
      display: flex;
      flex-wrap: wrap;
    }


   
  </style>
@endsection

@section('body')

{{-- Fila de filtros --}}

<div id="filtroBusqueda">
  <div class="form-group">
    <select class="form-select">
      <option selected value="Venta">Venta</option>
      <option value="Renta">Renta</option>
    </select>
  </div>
  <div class="input-groups">
    <input type="text" placeholder="Buscar por ciudad..."><input type="submit" value="Buscar">
  </div>
  <div class="form-group">
    <input type="number" class="form-control" placeholder="Precio MXN">
  </div>
</div>

<br>

{{-- Vista de catalogo --}}

<div class="container">
  <h2> Inmuebles en venta en </h2> {{--Agregar al principio de esta etiqueta el número de registros que se encontraron cerca y tambien la ciudad al lado derecho--}}
  <p class="text"> Estas son las propiedades que encontramos para ti</p>
  <div id="cards-container">
    <div class="card">
      <div class="image-card">
        <img src="{{asset('Imagenes/Fondo-seccion1.png')}}">
      </div>
      <div class="disponible">
        <button class="btn-white">Venta</button>
        <button class="btn-white">Renta</button>
      </div>
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
        <button class="btn-white">Contacto</button>
        <button class="btn-blue">Ver más detalles</button>
      </div>
    </div>
    <div class="card">
      <div class="image-card">
        <img src="{{asset('Imagenes/Fondo-seccion1.png')}}">
      </div>
      <div class="disponible">
        <button class="btn-white">Venta</button>
        <button class="btn-white">Renta</button>
      </div>
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
        <button class="btn-white">Contacto</button>
        <button class="btn-blue">Ver más detalles</button>
      </div>
    </div>
    <div class="card">
      <div class="image-card">
        <img src="{{asset('Imagenes/Fondo-seccion1.png')}}">
      </div>
      <div class="disponible">
        <button class="btn-white">Venta</button>
        <button class="btn-white">Renta</button>
      </div>
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
        <button class="btn-white">Contacto</button>
        <button class="btn-blue">Ver más detalles</button>
      </div>
    </div>
    <div class="card">
      <div class="image-card">
        <img src="{{asset('Imagenes/Fondo-seccion1.png')}}">
      </div>
      <div class="disponible">
        <button class="btn-white">Venta</button>
        <button class="btn-white">Renta</button>
      </div>
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
        <button class="btn-white">Contacto</button>
        <button class="btn-blue">Ver más detalles</button>
      </div>
    </div>
  </div>
</div>

{{-- <footer id="page-footer">
  <div class="container-info">
      <img src="{{ asset('/Imagenes/LOGO.png') }}">
      <p>Instate es una marga registrada por <br>Instate Investments S.A de C.V. en <br>alianza con Design Construcciones.</p>
  </div>

  <br>

      <div class="container-info">
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

</footer> --}}

@endsection

@section('js')
    <!-- EJEMPLO DE FUNCION PARA AGREGAR LAS TARJETAS DE PROPIEDADES() -->
<script>

//  obtener los registros de propiedades desde BD  //
  $(document).ready(function(){
    cargarPropiedades(); // agregalo como comentario en caso de diseño front //
  });

  function cargarPropiedades() {
    $.ajax({
      url: `/get/properties`,
      method: `GET`,
      success: function(data) {
          console.log(data);
          const listaPropiedades = $('#pl');
          listaPropiedades.empty();
          console.log(data);
          data.forEach(propety => {
          const propiedad =
              `<div class="property-list" id="pl">
                  <div class="property-card" style="margin-top: 5px;">
                    <img src="https://via.placeholder.com/300x200" alt="Propety Image" class="property-image">
                    <h3>${propety.Titulo}</h3>
                    <p>$ ${propety.Precio}</p>
                    <div class="property-details">
                      <div class="property-detail"><i class="fas fa-bed property-detail-icon"></i><span>${propety.Recamaras} Recámaras</span></div>
                      <div class="property-detail"><i class="fas fa-bath property-detail-icon"></i><span>${propety.Baños} Baños</span></div>
                      <div class="property-detail"><i class="fas fa-ruler-combined property-detail-icon"></i><span>${propety.Area} M² construidos</span></div>
                    </div>
                    <button class="property-button" onclick="infoPropety(${propety.id})">Ver Mas</button>
                  </div>
               </div>`
            listaPropiedades.append(propiedad);
          });
      }
    });
  }

  var propiedades = [
    { titulo: "Agatha Monolith Torre A", price: "$ 3,193,840 MXN" , Recamaras: "1", Baños: "7", MtsCuadrados: "50m²"},
    { titulo: "Agatha Monolith Torre B", price: "$ 3,193,841 MXN" , Recamaras: "2", Baños: "6", MtsCuadrados: "51m²" },
    { titulo: "Agatha Monolith Torre C", price: "$ 3,193,842 MXN" , Recamaras: "3", Baños: "5", MtsCuadrados: "52m²" },
    { titulo: "Agatha Monolith Torre D", price: "$ 3,193,843 MXN" , Recamaras: "4", Baños: "4", MtsCuadrados: "53m²" },
    { titulo: "Agatha Monolith Torre E", price: "$ 3,193,844 MXN" , Recamaras: "5", Baños: "3", MtsCuadrados: "54m²" },
    { titulo: "Agatha Monolith Torre F", price: "$ 3,193,845 MXN" , Recamaras: "6", Baños: "2", MtsCuadrados: "55m²" },
    { titulo: "Agatha Monolith Torre F", price: "$ 3,193,845 MXN" , Recamaras: "6", Baños: "2", MtsCuadrados: "55m²" },
    { titulo: "Agatha Monolith Torre G", price: "$ 3,193,846 MXN" , Recamaras: "7", Baños: "1", MtsCuadrados: "56m²" }
  ];

  function ej_crearcartasdepropiedades(filtrados = null){
    var listapropiedades = document.getElementById('pl');
    listapropiedades.innerHTML = '';

    var division = null;

    (filtrados || propiedades).forEach(function(propiedad, index) {
      // 
        division = document.createElement('div');
        division.className = 'property-list';
        listapropiedades.appendChild(division);

      // DATOS DE LA TARJETA PROPIEDAD
      var div = document.createElement('div');
      div.className = "property-card";
      div.style.marginTop = "5px";

      var imagen = document.createElement('img');
      imagen.src = "https://via.placeholder.com/300x200";
      imagen.alt = "Property Image";
      imagen.className = "property-image";

      var titulo = document.createElement('h3');
      titulo.textContent = propiedad.titulo;

      var precio = document.createElement('p');
      precio.textContent = propiedad.price;

      var detalles = document.createElement('div');
      detalles.className = "property-details";

      var detalleRecamaras = document.createElement('div');
      detalleRecamaras.className = "property-detail";
      detalleRecamaras.innerHTML = '<i class="fas fa-bed property-detail-icon"></i><span>' + propiedad.Recamaras + ' Recámaras</span>';

      var detalleBaños = document.createElement('div');
      detalleBaños.className = "property-detail";
      detalleBaños.innerHTML = '<i class="fas fa-bath property-detail-icon"></i><span>' + propiedad.Baños + ' Baños</span>';

      var detalleMtsCuadrados = document.createElement('div');
      detalleMtsCuadrados.className = "property-detail";
      detalleMtsCuadrados.innerHTML = '<i class="fas fa-ruler-combined property-detail-icon"></i><span>' + propiedad.MtsCuadrados + ' construidos</span>';

      detalles.appendChild(detalleRecamaras);
      detalles.appendChild(detalleBaños);
      detalles.appendChild(detalleMtsCuadrados);

      var boton = document.createElement('button');
      boton.className = "property-button";
      boton.textContent = "Ver más info";

      div.appendChild(imagen);
      div.appendChild(titulo);
      div.appendChild(precio);
      div.appendChild(detalles);
      div.appendChild(boton);
      division.appendChild(div);
    });
  }

  // LLAMA A LA FUNCION
  ej_crearcartasdepropiedades();
</script>


@endsection