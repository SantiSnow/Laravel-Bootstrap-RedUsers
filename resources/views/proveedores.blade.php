@extends('layouts.base')
@section('contenido')

<div class="container">
    <div class="row">
        <h2>Departamentos</h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                </tr>
                </thead>
                <tbody>
                @foreach($proveedores as $proveedor)
                    <tr>
                        <th scope="row">{{ $proveedor->id }}</th>
                        <td>{{ $proveedor->nombre }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Nuevo proveedor</h3>
            <form action="{{ url('/nuevo-proveedor') }}" method="post">
                @csrf
                <label for="nombre" class="form-label">Nombre </label>
                <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre">
                <br />
                <button type="submit" class="btn btn-primary">Registrar compra</button>
            </form>
        </div>
    </div>
</div>

@endsection
