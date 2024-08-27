<header>
<nav class="navbar navbar-expand-lg navbar-custom" style="background-color: #343a40;">
    <a class="navbar-brand" href="{{ url ('/')}}">
        <span style="color: #f8f9fa;">FAIRY</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url ('/') }}" style="color: #f8f9fa;">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url ('/') }}" style="color: #815f0a;">INICIO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url ('/productos') }}" style="color: #f8f9fa;">PRODUCTOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url ('/cliente') }}" style="color: #f8f9fa;">CLIENTES</a>
            </li>
        </ul>
        <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="color: #f8f9fa;">
                Usuario
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Perfil</a></li>
                <li><a class="dropdown-item" href="#">Ajustes</a></li>
                <a class="nav-link" href="{{ url('logout') }}" >Cerrar Session</a>
            </ul>
        </div>
    </div>
</nav>
@yield('navbar')
@vite('resources/js/app.js')
</header>
<style>

    .navbar-custom {
        background: linear-gradient(90deg, #460743 0%, #d376ce 100%);
        border-bottom: 2px solid #ffffff;
    }


    .navbar-brand span {
        font-weight: bold;
        font-size: 1.5rem;
        color: #f8f9fa; }


    .nav-link {
        font-weight: 500;
        color: #f8f9fa;
        transition: color 0.3s ease, background-color 0.3s ease; 
    }


    .nav-link.active {
        font-weight: 700;
        background: linear-gradient(135deg, #729ac2 0%, #81287a 100%); 
        border-radius: .25rem; 
    }




    .dropdown-item:hover {
        background-color: #495057; 
        color: #f8f9fa; 
    }


    .navbar-toggler-icon {
        background-image: url('https://img.icons8.com/material-outlined/24/ffffff/menu--v1.png'); /* Icono personalizado para el botón de toggle */
    }


    .dropdown-menu-end {
        border-radius: .25rem; 
        box-shadow: 0 0 0 0 rgba(0,0,0,0.1); 
    }
</style>
