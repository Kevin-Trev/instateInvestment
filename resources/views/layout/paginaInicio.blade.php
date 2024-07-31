<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('Imagenes/iconito.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        *{
            font-family: 'Roboto';
            margin: 0;
            padding: 0;
        }

        .navbar{
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 80px;
        }

        .nav-links {
        list-style: none;
        display: flex;
        justify-content: space-between;
        align-items: center;
        }

        .nav-links li {
            margin: 10px 30px 10px 0;
        }

        .logo{
            width: 320px;
            height: auto;
            transform: translate(5px, -12px);
        }

        .perfilContainer{
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 80%;
            cursor: pointer;
            border: transparent;
            width: 50px;
            height: 50px;
        }
        .dropdown-item{
            margin-bottom: 5px;
        }

        .dropdown-menu .dropdown-item:hover{
            color: black;
            background-color: transparent;
            transition: .3s;
        }

        .dropdown-menu{
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .dropdown-menu a{
            color: rgb(78, 78, 78);
        }

    </style>
    @yield('style')
</head>

<body>
    <nav class="navbar">
        <img src="{{asset('Imagenes/LOGO2.png')}}" class="logo">
        <ul class="nav-links">
            <li>
                <div class="dropdown-center dropstart">
                    <div class="perfilContainer" data-bs-toggle="dropdown" aria-expanded="false">
                        {{-- Agregar la imagen del usuario --}}
                    </div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Mi perfil</a></li>
                        <li><a class="dropdown-item" href="#">Catálogo</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
    @yield('body')
</body>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@yield('js')
</html>
