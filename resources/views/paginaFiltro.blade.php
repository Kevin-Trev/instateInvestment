@extends('layout.paginaInicio')

@section('style')
<style>
    .container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .filters {
      display: inline-block;
      align-items: center;
    }

    .filter-group {
      display: inline-block;
      align-items: center;
    }

    .filter-label {
      margin-right: 10px;
    }

    .filter-select {
      padding: 8px;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 14px;
    }

    .filter-button {
      padding: 8px 16px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .sidebar {
      width: 25%;
      padding: 20px;
      border-right: 1px solid #ddd;
    }

    .property-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
    }

    .property-card {
      border: 1px solid #ddd;
      padding: 15px;
      border-radius: 8px;
    }

    .property-image {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 8px;
    }

    .property-title {
      font-size: 18px;
      font-weight: bold;
      margin-top: 10px;
    }

    .property-price {
      font-size: 16px;
      color: #007bff;
      margin-bottom: 10px;
    }

    .property-details {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .property-detail {
      display: flex;
      align-items: center;
    }

    .property-detail-icon {
      margin-right: 5px;
    }

    .property-button {
      padding: 8px 16px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .property-button:hover {
      background-color: #0069d9;
    }

    .filtro{
        width: 18px;
        height: auto;
    }
  </style>
@endsection

@section('body')
  <main>
    <div class="container">
      <!-- FILTROS -->
      <div class="filters">
        <div class="filter-group">
          <label class="filter-label" for="type">Tipo de oferta:</label>
          <select class="filter-select" id="type">
            <option value="venta">En venta</option>
            <option value="alquiler">En alquiler</option>
          </select>
          <div class="filter-group">
            <label class="filter-label" for="location">Ubicación:</label>
            <input type="text" class="filter-select" id="location" placeholder="Busca por ubicación">
          </div>
          <div class="filter-group">
            <label class="filter-label" for="property-type">Tipo de propiedad:</label>
            <select class="filter-select" id="property-type">
              <option value="cualquiera">Cualquiera</option>
              <option value="casa">Casa</option>
              <option value="departamento">Departamento</option>
              <option value="terreno">Terreno</option>
            </select>
          </div>
  
          <div class="filter-group">
            <label class="filter-label" for="min-price">Precio:</label>
            <input type="number" class="filter-select" id="min-price" placeholder="Mínimo">
            <input type="number" class="filter-select" id="max-price" placeholder="Máximo">
          </div>
  
          <div class="filter-group">
            <label class="filter-label" for="bedrooms">Recámaras:</label>
            <select class="filter-select" id="bedrooms">
              <option hidden value="todo">-#-</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4+</option>
            </select>
          </div>
        </div>

        <button class="filter-button"><img class="filtro" src="{{asset('Imagenes/filtroIcono.png')}}">Más filtros</button>
      </div>

      <!-- ETIQUETA DE CANTIDAD DE MUEBLES -->
      <div class="main-content">
        <h2>Venta</h2>
        <h3>413,447 Inmuebles en Venta</h3>

        <!-- LISTA DE PROPIEDADES -->
        <div id = "pl" class="property-list">
        </div>
      </div>
    </div>
  </main>
@endsection

@section('js')
    <!-- EJEMPLO DE FUNCION PARA AGREGAR LAS TARJETAS DE PROPIEDADES() -->
<script>
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