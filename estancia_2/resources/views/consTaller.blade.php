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
    <h2 class="text-center te">Alumnos inscritos</h2>
    @foreach ($consultarTalleres as $buscarTaller)
    <div class="card m-4">
        <h5 class="card-header text-black"><i class="bi bi-calendar3"></i>Taller: {{ $buscarTaller->nameTaller }} </h5>
        <div class="card-body text-black">
            <p class="card-text fw-light"> Fecha y hora: {{ $buscarTaller->fh }}</p>
            <p class="card-text fw-light"> Docente del taller: {{ $buscarTaller->nameDocente }}</p>
            <p class="card-text fw-light"> Alumno: {{ $buscarTaller->nameAlum }}</p>
        </div>
        
    </div>
    <a href="{{ route('listaT.edit', $buscarTaller->idt) }}" class="btn btn-warning">Editar <i class="bi bi-pencil"></i></a>
    <a href="{{ route('listaT.confirm', $buscarTaller->idt) }}" class="btn btn-danger">Borrar <i class="bi bi-trash"></i></a>
<div>
@endforeach
@endsection