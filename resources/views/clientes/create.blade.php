@extends('layouts.plantillabase');
@section('contenido')
    <form action="/clientes" method="POST">
        @csrf

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">IDENTIFICACION</span>
            </div>
            <input id="CI" name="CI" type="CI" class="form-control" tabindex="1">
            <a class="dropdown-item" href="#"> </a>
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">NOMBRE</span>
            </div>
            <input id="nombre" name="nombre" type="nombre" class="form-control" tabindex="2">
            <a class="dropdown-item" href="#"> </a>
        </div>



        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">SEXO</span>
            </div>
            <input  id="sexo" name="sexo" type="sexo" class="form-control" tabindex="3">
            <a class="dropdown-item" href="#"> </a>
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">FECHA NACIMIENTO</span>
            </div>
            <input id="fechanac" name="fechanac" type="fechanac" class="form-control tabindex="4"">
            <a class="dropdown-item" href="#"> </a>
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">TELEFONO</span>
            </div>
            <input id="telefono" name="telefono" type="telefono" class="form-control" tabindex="5">
            <a class="dropdown-item" href="#"> </a>
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">EMAIL</span>
            </div>
            <input id="email" name="email" type="email" class="form-control" tabindex="6">
            <a class="dropdown-item" href="#"> </a>
        </div>

        <a href="/clientes" class="btn btn-secondary" tabindex="8">CANCELAR</a>
        <button type= "submit" class="btn btn-primary" tabindex="7">GUARDAR</button>

    </form>
@endsection
