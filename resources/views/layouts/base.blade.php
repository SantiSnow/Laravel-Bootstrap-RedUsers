<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Librerias JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Estilos Bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Iconos Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <style>
        a{
            color: white;
        }
        a:hover{
            color: #d9d9d9;
        }
    </style>

</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item p-3">
                        <a class="nav-link" href="{{ url('/') }}"> <i class="fas fa-home"></i> Inicio </a>
                    </li>
                    <li class="nav-item p-3">
                        <a class="nav-link" href="{{ url('/compras') }}"><i class="fas fa-shopping-cart"></i> Compras </a>
                    </li>
                    <li class="nav-item p-3">
                        <a class="nav-link" href="{{ url('/departamentos') }}"> <i class="fas fa-building"></i> Departamentos </a>
                    </li>
                    <li class="nav-item p-3">
                        <a class="nav-link" href="{{ url('/exportes') }}"> <i class="fas fa-file-export"></i> Exportes </a>
                    </li>
                    <li class="nav-item p-3">
                        <a class="nav-link" href="{{ url('/ventas') }}"> <i class="fas fa-balance-scale-left"></i> Ventas </a>
                    </li>
                    <li class="nav-item p-3">
                        <a class="nav-link" href="{{ url('/usuarios') }}"> <i class="fas fa-address-book"></i> Usuarios </a>
                    </li>
                    <li class="nav-item p-3">
                        <a class="nav-link" href="{{ url('/perfil') }}"><i class="fas fa-address-card"></i> Información del usuario </a>
                    </li>
                    <li class="nav-item p-4">
                       <a class="nav-link btn btn-light" href="{{ url('/logout') }}">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap p-3 mb-3">
                @yield('contenido')
            </div>
        </main>
    </div>
</div>
</body>
</html>
