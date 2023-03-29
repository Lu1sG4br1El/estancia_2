@extends('plantilla')
@section('contenido')
<style>
	.container-xl{
        border-color: black;
        border-style: solid;
        border-radius: 5px;
        margin-top: 10px;
        position: relative;
        width: 75%;
        top: 50px;
        background-color: white;
    }
</style>

<div class="container-xl mt-5 text-black" style="background-color: #EEEEEE">
    <br>
    <h2 class="text-center">Eliminar la solicitud del taller</h2>
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>Se eliminara la solicitud ¿Desea continuar?...</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
    </div>
    <div class="card m-4">
        <div class="card-body text-black">
            <p class="card-text fw-light"> Taller: {{ $tallerid->nameTaller }}</p>
            <p class="card-text fw-light"> Fecha y hora: {{ $tallerid->fh }}</p>
            <p class="card-text fw-light"> Docente del taller: {{ $tallerid->nameDocente }}</p>
            <p class="card-text fw-light"> Alumno: {{ $tallerid->nameAlum }}</p>
        </div>
        <form action="{{ route('listaT.destroy', $tallerid->idt) }}" method="post">
        {!! method_field('DELETE') !!}
        {!! csrf_field() !!}
        <button type="submit" class="btn btn-outline-danger">Eliminar</button></form>
        <a href="{{ route('listaT.index') }}" type="submit" class="btn btn-outline-info">No eliminar</a>
        
    </div>
    
</div>

@endsection