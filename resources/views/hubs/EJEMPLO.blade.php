@extends('layout.paginaInicio')

@section('title', 'perfil')
@section('style')
<style>
    body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f8f8;
}

.container {
    display: flex;
    margin: 20px;
}

.sidebar {
    width: 300px;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.sidebar h2 {
    margin-top: 0;
    font-size: 1.5rem;
    font-weight: bold;
    color: #333;
}

.sidebar .profile {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.sidebar .profile img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 10px;
}

.sidebar .profile h3 {
    margin: 0;
    font-weight: bold;
    color: #333;
}

.sidebar .profile p {
    margin: 0;
    color: #777;
}

.sidebar .form-group {
    margin-bottom: 15px;
}

.sidebar .form-group label {
    display: block;
    margin-bottom: 5px;
    color: #333;
}

.sidebar .form-group input,
.sidebar .form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.sidebar button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.sidebar button:hover {
    background-color: #0062cc;
}

.main {
    flex: 1;
    margin-left: 30px;
}

.main .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.main .header h2 {
    margin: 0;
    font-size: 1.5rem;
    font-weight: bold;
    color: #333;
}

.main .header .nav {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
}

.main .header .nav li {
    margin-left: 20px;
}

.main .header .nav li a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
}

.main .content {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.main .content .card {
    margin-bottom: 20px;
}

.main .content .card .image {
    height: 200px;
    overflow: hidden;
    border-radius: 10px;
}

.main .content .card .image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.main .content .card .info {
    padding: 15px;
}

.main .content .card .info h3 {
    margin-top: 0;
    font-weight: bold;
    color: #333;
}

.main .content .card .info p {
    margin: 0;
    color: #777;
}

.main .content .card .info .details {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
}

.main .content .card .info .details .price {
    font-size: 1.2rem;
    font-weight: bold;
    color: #007bff;
}

.main .content .card .info .details .actions {
    display: flex;
}

.main .content .card .info .details .actions button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 8px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-left: 10px;
}

.main .content .card .info .details .actions button:hover {
    background-color: #0062cc;
}

.main .content .pagination {
    display: flex;
    justify-content: center;
    align-items: center;
}

.main .content .pagination button {
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    margin: 0 5px;
}

.main .content .pagination button.active {
    background-color: #007bff;
    color: #fff;
    border: none;
}
</style>
@endsection

@section('body')
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Mi Perfil</h2>
            <div class="profile">
                <img src="profile.png" alt="Profile Picture">
                <h3>Instate User</h3>
                <p>instate@gmail.com</p>
            </div>
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" value="Instate User">
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" value="instate@gmail.com">
            </div>
            <div class="form-group">
                <label for="phone">Teléfono</label>
                <input type="tel" id="phone" value="87 169 6720">
            </div>
            <div class="form-group">
                <label for="user-type">Tipo de usuario</label>
                <select id="user-type">
                    <option value="propietario">Propietario (1 propiedad)</option>
                    <option value="agente">Agente</option>
                </select>
            </div>
            <button>Guardar cambios</button>
        </div>
        <div class="main">
            <div class="header">
                <h2>Mis propiedades</h2>
                <ul class="nav">
                    <li><a href="#">Destacados</a></li>
                    <li><a href="#">Estadísticas</a></li>
                </ul>
            </div>
            <div class="content">
                <div class="card">
                    <div class="image">
                        <img src="property1.jpg" alt="Property Image">
                    </div>
                    <div class="info">
                        <h3>Casa</h3>
                        <p>Camino Tornoson, San Pedro Garza García con Blvd San Jose, lote 505, Colonia Sendas del Bosque, C.P. 37422</p>
                        <div class="details">
                            <div class="price">$ 2, 250, 000 MXN</div>
                            <div class="actions">
                                <button>Editar</button>
                                <button>En Pausa</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="property2.jpg" alt="Property Image">
                    </div>
                    <div class="info">
                        <h3>Casa</h3>
                        <p>Camino Tornoson, San Pedro Garza García con Blvd San Jose, lote 505, Colonia Sendas del Bosque, C.P. 37422</p>
                        <div class="details">
                            <div class="price">$ 2, 250, 000 MXN</div>
                            <div class="actions">
                                <button>Editar</button>
                                <button>En Pausa</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="property3.jpg" alt="Property Image">
                    </div>
                    <div class="info">
                        <h3>Casa</h3>
                        <p>Camino Tornoson, San Pedro Garza García con Blvd San Jose, lote 505, Colonia Sendas del Bosque, C.P. 37422</p>
                        <div class="details">
                            <div class="price">$ 2, 250, 000 MXN</div>
                            <div class="actions">
                                <button>Editar</button>
                                <button>En Pausa</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination">
                    <button class="active">1</button>
                    <button>2</button>
                    <button>3</button>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

@section('js')

@endsection