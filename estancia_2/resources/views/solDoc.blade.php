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
	}
    .card1{
		width: 65px;
	}
</style>

<div class="container-xl formxd mt-5 text-black" style="background-color: #EEEEEE">
	<h1 class="text-center">Documentos</h1>
	<div class="card1 m-4">	
	    <p>Constancia<a href="{{route('descargarPDF')}}" class="btn btn-primary">Descargar PDF</a></p>
	</div>
	<div class="card1 m-4">
		<p>Kardex <a href="{{route('descargarPDF2')}}" class="btn btn-primary">Descargar PDF</a></p>
	</div>
	<div class="card1 m-4">
		<p>Historial Academico <a href="{{route('descargarPDF3')}}" class="btn btn-primary">Descargar PDF</a></p>
	</div>
</div>
@endsection