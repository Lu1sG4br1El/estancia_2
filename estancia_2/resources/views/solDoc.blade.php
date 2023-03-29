@extends('plantilla')
@section('contenido')
<style>
	div.formxd{
        border-color: black;
        border-style: solid;
        border-radius: 5px;
        margin-top: 10px;
        position: relative;
        width: 60%;
        background-color: white;
    }
    .guardar{
		border: none;
		background-color: green;
		padding: 8px 18px;
		font-size: 16px;
		cursor: pointer;
		display: inline-block;
		display: block;
		margin-right: auto;
		margin-left: auto;
		color: white;
	}
    .container-xl{
		width: 65%;
		top: 50px;
	}
    .card1{
		width: 65px;
	}
</style>

<div class="container-xl formxd mt-5 text-black" style="background-color: #F0F8FF">
	<h1 class="text-center text-black">Documentos</h1>
	<div class="card1 m-4 text-black">	
	    <p>Constancia</p>
		<a href="{{route('descargarPDF')}}" class="btn btn-outline-primary">Descargar PDF</a>
	</div>
	<div class="card1 m-4 text-black">
		<p>Kardex </p>
		<a href="{{route('descargarPDF2')}}" class="btn btn-outline-primary">Descargar PDF</a>
	</div>
	<div class="card1 m-4 text-black">
		<p>Historial Academico </p>
		<a href="{{route('descargarPDF3')}}" class="btn btn-outline-primary">Descargar PDF</a>
	</div>
</div>
@endsection