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

        .profile-img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
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

        .simboloContainer img{
            width: 30px;
            height: 30px;
            margin: 12px 40px 0 0;
            cursor: pointer;
        }

        .nav-links .dropdown-center{
            display: flex;
            margin-right: 15px;
        }

        #page-footer {
        background-color: #004CFF;
        width: 100%;
        margin-top: 200px;
    }
    
    .container-info{
        margin-top: 20px;
        display: inline-block;
        margin-left: 120px;
        color: #FFFFFF;
        margin-bottom: 50px;
    }

    .container-info2{
        margin-top: 20px;
        display: inline-block;
        margin-left: 120px;
        color: #FFFFFF;
        margin-bottom: 50px;
    }
    
    .container-info h2{
        font-size: 28px;
        margin-bottom: 20px;
    }
    
    .container-info hr{
        margin-right: 56%;
        border: 2px solid #ffffff;
    }

    .container-info2 h2{
        font-size: 28px;
        margin-bottom: 20px;
    }
    
    .container-info2 hr{
        margin-right: 56%;
        border: 2px solid #FFFFFF;
    }
    
    .container-info img{
        width: 200px;
        height: 200px;
        transform: translateY(-5px);
        position: absolute;
    }
    
    .container-info p{
        margin-top: 150px;
        transform: translate(-20px, 50px);
    }
    
    .container-info a{
        color: #FFFFFF;
        text-decoration: none;
    }

    .container-info2 p{
        margin-top: 150px;
        transform: translate(-20px, 50px);
    }
    
    .container-info2 a{
        color: #FFFFFF;
        text-decoration: none;
    }

    .container-social{
        width: 30px;
        margin-right: 20px;
        display: inline-block;
    }
    
    .container-social img{
        width: 23px;
        height: 23px;
        margin-right: 10px;
    }

    .btn-white{
      color: #3370FF;
      background-color: #FFFFFF;
      border: 1px solid #3370FF;
      border-radius: 6px;
      cursor: default;
    }

    .btn-blue{
      color: #FFFFFF;
      background-color: #3370FF;
      border: none;
      border-radius: 6px;
      cursor: default;
    }

    @media(min-width: 576px){
        .dropdown-menu{
            transform: translate(150px, 30px);
        }
    }

    @media(max-width: 576px){
        .navbar{
            display: flex;
        }

        .logo{
            width: 45vw;
        }

        .perfilContainer{
            width: 10vw;
            height: 10vw;
            transform: translate(6vw, -5px);
        }

        .simboloContainer img{
            width: 6vw;
            height: 6vw;
            transform: translate(10vw, -8px);
        }

        .dropdown-menu{
            transform: translate(25vw, 30px);
        }

        .dropdown-menu a{
            font-size: 3vw;
        }
    }

    @media(max-width: 391px){
        .navbar{
            display: flex;
        }

        .logo{
            width: 45vw;
        }

        .perfilContainer{
            width: 10vw;
            height: 10vw;
            transform: translate(8vw, -3px);
        }

        .simboloContainer img{
            width: 6vw;
            height: 6vw;
            transform: translate(14vw, -8px);
        }

        .dropdown-menu{
            transform: translate(32vw, 30px);
        }

        .dropdown-menu a{
            font-size: 3vw;
        }
    }
    </style>
    @yield('style')
</head>

<body>
    <nav class="navbar">
        <img src="{{asset('Imagenes/LOGO2.png')}}" class="logo">
        <ul class="nav-links">
            <li>
                @auth
                <div class="dropdown-center dropstart">
                    
                    <div class="perfilContainer" data-bs-toggle="dropdown" aria-expanded="false">
                        @if (Auth::user()->Foto)
                        <img src="{{asset('storage/profile_photos/'.Auth::user()->Foto)}}" class="profile-img" style="width: 100%; height: 100%; object-fit: cover;">
                        @else
                        <img src="{{asset('Imagenes/iconito.png')}}" class="profile-img" style="width: 100%; height: 100%; object-fit: cover;">
                        @endif
                    </div>
                    <ul class="dropdown-menu">
                        <li><label class="dropdown-item">👋 Hola, {{Auth::user()->Nombre}}</label></li>
                        <hr>
                        <li><a class="dropdown-item" href="{{ route('perfil', Auth::user()->id) }}">Mi perfil</a></li>
                        @if (Auth::user()->administrador)
                        <li><a class="dropdown-item" href="{{route('catalogo.Admin')}}">Catálogo</a></li>
                        @else
                        <li><a class="dropdown-item" href="{{route('catalogo')}}">Catálogo</a></li>
                        @endif
                        <hr>
                        <li>
                            <form style="display: inline" action="/logout" method="POST">
                                @csrf
                                <a href="#" onclick="this.closest('form').submit()" class="dropdown-item">Cerrar Sesión</a>
                            </form>
                        </li>
                    </ul>
                </div>
                @endauth
                @guest
                <div class="button-container">
                    <button class="btn btn-outline-primary"><a class="nav-link" href="{{route('registro')}}">Registrate</a></button>
                    <button class="btn btn-primary"><a class="nav-link" href="{{route('login')}}">Iniciar Sesión</a></button>
                </div>
                @endguest
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
