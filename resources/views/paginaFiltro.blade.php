@extends('layout.paginaInicio')

@section('style')
<style>
    .input-groups{
        display: flex;
        align-items: center;
        margin-left: 50px;
    }

    body{
      border: 2px solid red
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
      width: 40px;
    }

    .disponible .btn-blue{
      width: 40px;
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

    #page-footer{
      display: flex;
      gap: 20px;
      padding: 20px 0 20px 0;
    }

    @media(max-width: 992px){
      /* Filtros */
      #filtroBusqueda{
        transform: translateX(-4vw);
      }

      #filtroBusqueda select{
        width: 14vw;
        font-size: 2vw;
        height: 60px;
        transform: translateY(-4px);
      }

      #filtroBusqueda input[type="text"]{
        font-size: 2vw;
        height: 60px;
        width: 30vw;
      }

      #filtroBusqueda input[type="submit"]{
        font-size: 2vw;
        height: 60px;
        width: 14vw;
      }

      #filtroBusqueda .input-groups{
        transform: translate(7.5vw, -0.5vw);
      }

      #filtroBusqueda input[type="number"]{
        font-size: 2vw;
        width: 20vw;
        height: 60px;
        transform: translate(1vw, -4.5px);
      }

      /* Header de las cartas */

      .container{
        margin: 1vw;
      }

      .container h2{
        font-size: 4.5vw;
      }

      .container .text{
        font-size: 2.5vw;
      }

      /* Cartas */

      .card{
        width: 35vw;
        margin-bottom: 10px;
      }

      .card .image-card{
        height: 80px;
      }

      #cards-container{
        transform: translateX(3vw);
        width: 100vw;
      }

      .card .text{
        font-size: 2vw;
      }

      .card .image-card img{
        width: 100%;
        height: 25vw;
      }

      .disponible button{
        margin-top: 120px;
        font-size: 2vw;
      }

      .disponible .btn-blue, .disponible .btn-white{
        width: 10vw;
      }

      .roomsContainer img{
        width: 3vw;
      }

      .number{
        font-size: 2vw;
      }

      .card .footer button{
        font-size: 2vw;
        margin-left: 0;
      }

      .footer button{
        margin-right: 8px;
      }

      .card h3{
        margin-top: 5px;
        font-size: 3.5vw;
      }

      /* footer */

      #page-footer{
        margin-top: 80px;
        width: 100%;
        gap: 0;
        padding: 0 0 10px 0;
        display: block;
      }

      .container-info img{
        width: 30vw;
        height: 30vw;
        transform: translate(-80px, 280px);
      }

      .container-info p{
        font-size: 2.8vw;
        transform: translate(300px, 230px)
      }

      .container-info b{
        font-size: 2.5vw;
      }

      .container-info h2{
        font-size: 6vw;
      }

      .container-info .container-social img{
        width: 4vw;
        height: 4vw;
        gap: 50px;
        transform: translate(0);
      }

      .container-info{
        margin-top: -500px;
      }

      #este{
        margin: 0 0 10px 55vw;
        transform: translateY(38vw);
      }

      .container-info2 h2{
       font-size: 6vw;
      }

      .container-info2 a{
        font-size: 2.5vw;
      }

      .container-info2{
        display: block;
      }
    }

    @media(max-width: 576px){
      /* Filtros */
      #filtroBusqueda{
        transform: translateX(-8vw);
      }

      #filtroBusqueda select{
        width: 20vw;
        font-size: 2.5vw;
        height: 40px;
        transform: translateY(-4px);
      }

      #filtroBusqueda input[type="text"]{
        font-size: 2.5vw;
        width: 30vw;
      }

      #filtroBusqueda input[type="submit"]{
        font-size: 2.5vw;
        width: 14vw;
      }

      #filtroBusqueda .input-groups{
        transform: translate(-10vw, -1vw);
      }

      #filtroBusqueda input[type="number"]{
        font-size: 2.5vw;
        width: 22vw;
        height: 40px;
        transform: translate(-6vw, -4.5px);
      }

      /* Header de las cartas */

      .container h2{
        font-size: 5.4vw;
      }

      .container .text{
        font-size: 2.8vw;
      }

      /* Cartas */

      .card{
        width: 40vw;
        margin-bottom: 5px;
      }

      .card .image-card{
        height: 70px;
      }

      #cards-container{
        transform: translateX(-1.5vw);
      }

      .card .text{
        font-size: 2vw;
      }

      .card .image-card img{
        width: 100%;
        height: 25vw;
      }

      .disponible button{
        margin-top: 25px;
        font-size: 2vw;
      }

      .roomsContainer img{
        width: 3.2vw;
      }

      .number{
        font-size: 2.5vw;
      }

      .card .footer button{
        font-size: 2vw;
        margin-left: 0;
      }

      .footer button{
        margin-right: 8px;
      }

      .card h3{
        margin-top: 5px;
        font-size: 3.5vw;
      }

      /* footer */

      #page-footer{
        margin-top: 80px;
        width: 100%;
        gap: 0;
        padding: 0 0 10px 0;
        display: block;
      }

      .container-info img{
        width: 30vw;
        height: 30vw;
        transform: translate(-80px, 210px);
      }

      .container-info p{
        font-size: 2.8vw;
        transform: translate(-110px, 230px)
      }

      .container-info b{
        font-size: 2.5vw;
      }

      .container-info h2{
        font-size: 6vw;
      }

      .container-social img{
        width: 5vw;
        height: 5vw;
        transform: translate(0);
      }

      .container-info{
        margin-top: -500px;
      }

      #este{
        margin: 0 0 10px 55vw;
        transform: translateY(-10vw);
      }

      .container-info2 h2{
       font-size: 6vw;
      }

      .container-info2 a{
        font-size: 2.5vw;
      }

      .container-info2{
        display: none;
      }
    }

    @media(max-width: 391px){
      /* Filtros */
      #filtroBusqueda{
        transform: translateX(-12vw);
      }

      #filtroBusqueda select{
        width: 22vw;
        font-size: 3.5vw;
      }

      #filtroBusqueda input[type="text"]{
        font-size: 2.8vw;
        width: 30vw;
      }

      #filtroBusqueda input[type="submit"]{
        font-size: 2.8vw;
        width: 16vw;
      }

      #filtroBusqueda .input-groups{
        transform: translate(-20vw, -1vw);
      }

      #filtroBusqueda input[type="number"]{
        font-size: 2.8vw;
        width: 22vw;
        height: 35px;
        transform: translateX(-10vw);
      }

      /* Header de las cartas */

      .container h2{
        font-size: 5.5vw;
      }

      .container .text{
        font-size: 3vw;
      }

      /* Cartas */

      .card{
        width: 38vw;
        margin-bottom: 5px;
      }

      .card .image-card{
        height: 80px;
      }

      #cards-container{
        transform: translateX(-1.5vw);
      }

      .card .image-card img{
        width: 100%;
        height: 30vw;
      }

      .disponible button{
        font-size: 2.5vw;
      }

      .roomsContainer img{
        width: 3.5vw;
      }

      .number{
        font-size: 3vw;
      }

      .card .footer button{
        font-size: 1.8vw;
        margin-left: 0;
      }

      .footer button{
        margin-right: 5px;
      }

      .card h3{
        margin-top: 5px;
        font-size: 4vw;
      }

      .card p .text{
        font-size: 1vw;
      }

      /* footer */

      #page-footer{
        margin-top: 80px;
        width: 100%;
        gap: 0;
        padding: 0 0 10px 0;
        display: block;
      }

      .container-info img{
        width: 30vw;
        height: 30vw;
        transform: translate(-80px, 210px);
      }

      .container-info p{
        font-size: 2.8vw;
        transform: translate(-110px, 200px)
      }

      .container-info b{
        font-size: 3vw;
      }

      .container-info h2{
        font-size: 6vw;
      }

      .container-social img{
        width: 6vw;
        height: 6vw;
        transform: translate(0);
      }

      .container-info{
        margin-top: -500px;
      }

      #este{
        margin: 0 0 10px 55vw;
        transform: translateY(-13vw);
      }

      .container-info2 h2{
       font-size: 6.5vw;
      }

      .container-info2 a{
        font-size: 2.5vw;
      }

      .container-info2{
        display: none;
      }
      
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
  <div class="form-group">
    <input type="number" class="form-control" placeholder="Precio MXN">
  </div>
  <div class="input-groups">
    <input type="text" placeholder="Buscar por ciudad..."><input type="submit" value="Buscar">
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

          const listaPropiedades = $('#cards-container'); 
          listaPropiedades.empty();

          data.forEach(property => {
          var stockImg = 'stock.png'; /* En caso de no tener ninguna imagen carga la de stock */
          var precioFormateado = property.Precio.toLocaleString('es-MX') /* Dar Formato al Precio */;

          const propiedad =
              `<div class="card">
                  <div class="image-card">
                    <img src="{{asset('ImagesPublished/${property.main_image ? property.main_image.src_image : stockImg}')}}" alt="propiedad ${property.ID_P}">
                  </div>
                  <div class="disponible">
                    ${property.Vendible === 1 ? '<button class="btn-blue">Venta</button>' : '<button class="btn-white">Venta</button>'}
                    ${property.Rentable === 1 ? '<button class="btn-blue">Renta</button>' : '<button class="btn-white">Renta</button>'}
                  </div>
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
                    <button class="btn-white">Contacto</button>
                    <button href="" class="btn-blue"><a class="nav-link" href="/get/property/${property.ID_P}">Ver más detalles</a></button>
                  </div>
                </div>`
            listaPropiedades.append(propiedad);
          });
      }
    });
  }
</script>
@endsection