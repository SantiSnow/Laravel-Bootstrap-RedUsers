@extends('layouts.base')
@section('contenido')

<div class="container">
    <div class="row">
        <h2>Compras</h2>
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
                    <th scope="col">Fecha</th>
                    <th scope="col">Proveedor</th>
                </tr>
                </thead>
                <tbody>
                @foreach($compras as $compra)
                    <tr>
                        <th scope="row">{{ $compra->id }}</th>
                        <td>{{ $compra->cantidad }}</td>
                        <td>{{ $compra->precio }}</td>
                        <td>{{ $compra->user->name }}</td>
                        <td>{{ $compra->user->departamento->nombre }}</td>
                        <td>{{ $compra->proveedor->nombre }}</td>
                        <td>{{ $compra->fecha_compra }}</td>
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
            <h3>Nueva compra</h3>
            <form action="{{ url('/nueva-compra') }}" method="post">
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
                
                <label for="fecha" class="">Fecha de la compra</label>
                <input type="date" name="fecha" class="form-control" />

                <label for="proveedor" class="form-label">Proveedor</label>
                <select name="proveedor" class="form-control">
                    @foreach($proveedores as $proveedor)
                        <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                    @endforeach
                </select>

                <br />
                <button type="submit" class="btn btn-primary">Registrar compra</button>
            </form>
        </div>
    </div>
</div>

@endsection
