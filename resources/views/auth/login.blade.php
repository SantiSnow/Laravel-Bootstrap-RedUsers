<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Librerias JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Estilos Bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
    .btn{
        margin: 15px;
    }
    </style>
</head>
<body>

    <div class="container">
        <div class="row d-flex justify-content-center" id="titulo-login">
            <div class="col-md-5 text-center">
                <h1>Ingreso al sistema</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">

                <form method="POST" action="{{ url('/login') }}" class="form-group">
                    @csrf
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" required autofocus />

                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password" required />

                    <button type="submit" class="btn btn-primary">Ingresar</button>
                    <button type="reset" class="btn btn-danger">Limpiar campos</button>
                </form>

            </div>
        </div>
    </div>


</body>
</html>