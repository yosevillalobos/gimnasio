@extends('layouts.plantillabase');
@section('contenido')
    <a href="clientes/create" class="btn btn-primary">CREAR</a>

    <!-- Include the above in your HEAD tag -->


    <table class="table table-dark table-striped mt-4">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CI</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">SEXO</th>
            <th scope="col">FECHA NAC</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">EMAIL</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($clientes as $clientes)


            <tr>

                <td>{{ $clientes->id}}</td>
                <td>{{ $clientes->ci}}</td>
                <td>{{ $clientes->nombre}}</td>
                <td>{{ $clientes->sexo}}</td>
                <td>{{ $clientes->fechanac}}</td>
                <td>{{ $clientes->telefono}}</td>
                <td>{{ $clientes->email}}</td>
                <td>
                    <a class="btn btn-info">EDITAR</a>
                    <button class="btn btn-danger">BORRAR</button>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
@endsection
