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

        .navbar {
        background-color: #CCDBFF;
        padding: 1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        }

        .btn-outline-primary{
            border-radius: 15px;
            border: 0.1mm solid;
        }

        .dropdown-center:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu {
            margin-top: 0;
        }

        .dropdown-menu-center {
            left: 50%;
            transform: translateX(-50%);
        }

        .nav-links {
        list-style: none;
        display: flex;
        justify-content: space-between;
        align-items: center;
        }

        .nav-links li {
            margin-right: 20px;
        }

        .nav-links a {
            color: #4970f3;
            text-decoration: none;
        }

        .burger {
            display: none;
        }

        .burger div {
            width: 30px;
            height: 3px;
            background-color: #fff;
            margin: 5px;
        }

        .logo{
            width: 350px;
            height: auto;
        }

        @media (max-width: 768px) {
            .nav-links {
                    display: none;
            }

            .burger {
                    display: block;
            }
        }
    </style>
    @yield('style')
</head>

<body>
    <nav class="navbar">
        <img src="{{asset('Imagenes/LOGO2.png')}}" class="logo">
        <ul class="nav-links">
            <li><a href="/">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li>
                <div class="dropdown-center">
                    <button class="btn btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    USUARIO_AQUI
                    </button>
                    <ul class="dropdown-menu dropdown-menu-center">
                    <li><a class="dropdown-item" href="#">Mis Publicaciones</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    @yield('body')
</body>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@yield('js')
</html>
