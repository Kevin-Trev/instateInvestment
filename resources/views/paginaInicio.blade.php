@extends('layout.layout')

@section('style')
    <style>
        .navbar {
    background-color: #333;
    padding: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 1.5rem;
    color: #fff;
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

@media (max-width: 768px) {
   .nav-links {
        display: none;
    }

   .burger {
        display: block;
    }
}
    </style>
@endsection

@section('body')
<nav class="navbar">
    <div class="logo">Logo</div>
    <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>
@endsection