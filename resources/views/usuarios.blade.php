@extends('layouts.base')
@section('contenido')

    <h1>Usuarios del sistema</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Email</th>
            <th scope="col">Departamento</th>
            <th scope="col">Ventas</th>
            <th scope="col">Compras</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Santiago</td>
            <td>Aguirre</td>
            <td>santiago@gmail.com</td>
            <td>Deportes</td>
            <td>4</td>
            <td>4</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Micaela</td>
            <td>Aguirre</td>
            <td>micaela@gmail.com</td>
            <td>Textil</td>
            <td>1</td>
            <td>3</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Pablo</td>
            <td>Lopéz</td>
            <td>pablo@gmail.com</td>
            <td>Informática</td>
            <td>5</td>
            <td>9</td>
        </tr>
        </tbody>
    </table>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Crear nuevo usuario</h3>
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
@endsection

