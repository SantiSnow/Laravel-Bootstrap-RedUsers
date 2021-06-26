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
                <h1>Registro en el sistema</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">

                <form method="POST" action="{{ url('/register') }}" class="form-group">
                @csrf
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" required />

                    <label for="email">Email</label>
                    <input type="email" name="email" id="" class="form-control" required />

                    <label for="departamento_id">Departamento</label>
                    <input type="number" name="departamento_id" class="form-control" id="" required />

                    <label for="password">Password</label>
                    <input type="password" name="password" id="" class="form-control" required />

                    <button type="submit" class="btn btn-primary">Registro</button>
                    <button type="reset" class="btn btn-danger">Limpiar campos</button>
                </form>
            </div>
        </div>
    </div>


</body>
</html>