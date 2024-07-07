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
              <option value="todo">Todo</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4+</option>
            </select>
          </div>
        </div>

        <button class="filter-button"><img class="filtro" src="{{asset('Imagenes/filtroIcono.png')}}">Más filtros</button>
      </div>

      

      <div class="main-content">
        <h2>Venta</h2>
        <h3>413,447 Inmuebles en Venta</h3>

        <div class="property-list">
          <div class="property-card">
            <img src="https://via.placeholder.com/300x200" alt="Property Image" class="property-image">
            <h3 class="property-title">Agatha Monolith Torre C</h3>
            <p class="property-price">Desde $ 3,193,842 MXN</p>
            <div class="property-details">
              <div class="property-detail">
                <i class="fas fa-bed property-detail-icon"></i>
                <span>1-3 Recámaras</span>
              </div>
              <div class="property-detail">
                <i class="fas fa-bath property-detail-icon"></i>
                <span>1-2 Baños</span>
              </div>
              <div class="property-detail">
                <i class="fas fa-ruler-combined property-detail-icon"></i>
                <span>62-94 m² construidos</span>
              </div>
            </div>
            <button class="property-button">Ver más info</button>
          </div>

          <div class="property-card">
            <img src="https://via.placeholder.com/300x200" alt="Property Image" class="property-image">
            <h3 class="property-title">Valparaíso</h3>
            <p class="property-price">$ 2,500,000 MXN</p>
            <div class="property-details">
              <div class="property-detail">
                <i class="fas fa-bed property-detail-icon"></i>
                <span>3 Recámaras</span>
              </div>
              <div class="property-detail">
                <i class="fas fa-bath property-detail-icon"></i>
                <span>2 Baños</span>
              </div>
              <div class="property-detail">
                <i class="fas fa-ruler-combined property-detail-icon"></i>
                <span>150 m² construidos</span>
              </div>
            </div>
            <button class="property-button">Ver más info</button>
          </div>

          <div class="property-card">
            <img src="https://via.placeholder.com/300x200" alt="Property Image" class="property-image">
            <h3 class="property-title">Residencial Jardines</h3>
            <p class="property-price">$ 1,800,000 MXN</p>
            <div class="property-details">
              <div class="property-detail">
                <i class="fas fa-bed property-detail-icon"></i>
                <span>2 Recámaras</span>
              </div>
              <div class="property-detail">
                <i class="fas fa-bath property-detail-icon"></i>
                <span>1 Baños</span>
              </div>
              <div class="property-detail">
                <i class="fas fa-ruler-combined property-detail-icon"></i>
                <span>100 m² construidos</span>
              </div>
            </div>
            <button class="property-button">Ver más info</button>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection

@section('js')
    
@endsection