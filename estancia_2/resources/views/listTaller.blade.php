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
        top: 50px;
        background-color: white;
    }
</style>
<div class="container-xl my-5 text-black" style="background-color: #F0F8FF">
    <br>
    <h2 class="text-center text-black">Lista de talleres</h2>
    <div class="card m-4">
        <p>Karate</p>
        <p>Taekwondo</p>
        <p>Acondicionamiento Fisico</p>
        <p>Futbol</p>
        <p>Atletismo</p>
        <p>Voleibol</p>
        <p>Basquetbol</p>
        <p>Baile de Salon</p>
        <p>Danza Folklorica</p>
        <p>Dibujo</p>
        <p>Ajedrez</p>
        <p>Música</p>
        <p>Personas que Laboran</p>
    </div>
</div>
@endsection