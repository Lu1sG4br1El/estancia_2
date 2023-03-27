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
        width: 60%;
        background-color: white;
	}
</style>

<div class="container-xl mt-5 text-black" style="background-color: #EEEEEE">
    <br>
    <h2 class="text-center">Alumnos inscritos</h2>
    @foreach ($consultarTalleres as $buscarTaller)
    <div class="card m-4">
        <h5 class="card-header text-black"><i class="bi bi-calendar3"></i>ID: {{$buscarTaller->idt}} </h5>
        <div class="card-body text-black">
            <p class="card-text fw-light"> Fecha y hora: {{ $buscarTaller->fh }}</p>
            <p class="card-text fw-light"> Taller: {{ $buscarTaller->nameTaller }}</p>
            <p class="card-text fw-light"> Docente del taller: {{ $buscarTaller->nameDocente }}</p>
            <p class="card-text fw-light"> Alumno: {{ $buscarTaller->nameAlum }}</p>
        </div>
        
    </div>
<div>
@endforeach
@endsection