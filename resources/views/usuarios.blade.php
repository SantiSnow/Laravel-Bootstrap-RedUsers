@extends('layouts.base')
@section('contenido')

    <h1>Usuarios del sistema</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Departamento</th>
            <th scope="col">Compras</th>
            <th scope="col">Ventas</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <th scope="row">{{ $usuario->id }}</th>
            <td>{{ $usuario->name }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->departamento->nombre }}</td>
            <td>{{ $usuario->compras_count }}</td>
            <td>{{ $usuario->ventas_count }}</td>
        </tr>
        @endforeach
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

