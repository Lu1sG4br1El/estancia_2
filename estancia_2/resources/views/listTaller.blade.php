@extends('plantilla')
@section('contenido')
<style>
    .container-xl{
        border-color: black;
        border-style: solid;
        border-radius: 5px;
        margin-top: 10px;
        position: relative;
        width: 40%;
        background-color: white;
    }
</style>
<div class="container-xl my-5 text-black" style="background-color: #EEEEEE">
    <br>
    <h2 class="text-center">Lista de talleres</h2>
    <div class="card m-4">
        <p>Karate</p>
        <p>Acondicionamiento Fisico</p>
        <p>Futbol</p>
    </div>
</div>
@endsection