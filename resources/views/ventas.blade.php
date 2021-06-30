@extends('layouts.base')
@section('contenido')

<div class="container">
    <div class="row">
        <h2>Ventas</h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Departamento</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ventas as $venta)
                    <tr>
                        <th scope="row">{{ $venta->id }}</th>
                        <td>{{ $venta->cantidad }}</td>
                        <td>{{ $venta->precio }}</td>
                        <td>{{ $venta->user->name }}</td>
                        <td>{{ $venta->user->departamento->nombre }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Nueva venta</h3>
            <form action="{{ url('/nueva-venta') }}" method="post">
                @csrf
                <label for="cantidad" class="form-label">Cantidad </label>
                <input type="number" class="form-control" name="cantidad" placeholder="Ingrese cantidad de articulos">

                <label for="precio" class="form-label">Precio </label>
                <input type="number" class="form-control" name="precio" step=".01" placeholder="Ingrese el precio">

                <label for="user_id" class="form-label">Usuario</label>
                <select name="user_id" class="form-control">
                    @foreach($usuarios as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>

                <br />
                <button type="submit" class="btn btn-primary">Registrar venta</button>
            </form>
        </div>
    </div>
</div>

@endsection
