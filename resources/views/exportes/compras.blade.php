<?php

header('Content-type:application/xls');
header('Content-Disposition: attachment; filename=compras.xls');

?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>    
<table class="table" border="1">
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
    @foreach($compras as $compra)
        <tr>
            <th scope="row">{{ $compra->id }}</th>
            <td>{{ $compra->cantidad }}</td>
            <td>{{ $compra->precio }}</td>
            <td>{{ $compra->user->name }}</td>
            <td>{{ $compra->user->departamento->nombre }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>