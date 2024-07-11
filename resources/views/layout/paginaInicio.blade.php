<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('Imagenes/iconito.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    color: #fff;
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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@yield('js')
</html>
