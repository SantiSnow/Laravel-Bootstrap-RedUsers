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
                    <th scope="col">Cant. de Usuarios</th>
                </tr>
                </thead>
                <tbody>
                @foreach($departamentos as $departamento)
                    <tr>
                        <th scope="row">{{ $departamento->id }}</th>
                        <td>{{ $departamento->nombre }}</td>
                        <td>{{ $departamento->user_count }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
