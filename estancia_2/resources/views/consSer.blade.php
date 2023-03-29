@extends('plantilla')
@section('contenido')
<style>
	.container-xl{
		width: 65%;
        border-color: black;
        border-style: solid;
        border-radius: 5px;
        margin-top: 10px;
        position: relative;
        top: 50px;
        background-color: white;
        
	}
</style>

<div class="container-xl mt-5 text-black" style="background-color: #F0F8FF">
    <br>
    <h2 class="text-center text-black">Servicios actuales</h2>
    @foreach ($consultarServ as $buscarServ)
    <div class="card m-4">
        <h5 class="card-header text-black"><i class="bi bi-calendar3"></i>Descripción del servicio: {{ $buscarServ->nameServicio }} </h5>
        <div class="card-body text-black">
            <p class="card-text fw-light"> ID: {{ $buscarServ->ids }}</p>
            <p class="card-text fw-light"> Solicitante: {{ $buscarServ->nameAlumno }}</p>
            <p class="card-text fw-light"> Fecha: {{ $buscarServ->fecha }}</p>
        </div>
        
    </div>
<div>
@endforeach
@endsection