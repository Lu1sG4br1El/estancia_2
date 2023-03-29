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
	@if(session()->has('confirmacion'))
	    {!! "<script> Swal.fire('Listo','Los datos se han guadado correctamente', 'success') </script>"!!}
	    <div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
	        <strong>{{session('confirmacion')}}</strong>
	        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
	    </div>
	@endif

	<br>
	<div>
	    <div>
	        <div class="container-xl formxd mt-5 text-black" style="background-color: #EEEEEE">
                <br>
				<h2 class="text-center">Taller</h2>
	             <i class="bi bi-wechat"></i>
	        
	@if($errors->any())
	            @foreach($errors->all() as $error)
	            <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
	                <strong>Formulario Incompleto!</strong>{{$error}}
	                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	            </div>
	            @endforeach
	        @endif
	    <div>
	        <form class="row g-3" method="post" action="{{ route('listaT.update', $tallerid->idt) }}">
	            @csrf
                {!! method_field('PUT')!!}
                <br>
	    <h5 class="text-center">Editar datos de la solicitud</h5>
		<br>
		<div class="col-md-3">	
	        <label class="form-label text-center text-black" name="labelAlum">Nombre del alumno: </label>
			<input type="text" class="form-control" name="txtnameAlum" value="{{$tallerid->nameAlum}}" required>
	        <p class="fw-bold text-danger"> {{$errors->first('txtnameAlum')}}</p>
	    </div>
		<div class="col-md-3">
	        <label class="form-label text-center text-black" name="labelTaller">Nombre del taller: </label>
			<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="txtnameTaller" value="{{$tallerid->nameTaller}}">
				<option disabled selected>Selecciona una opción</option>
				<option value="Karate">Karate</option>
				<option value="Taekwondo">Taekwondo</option>
				<option value="Acondicionamiento Fisico">Acondicionamiento Fisico</option>
				<option value="Futbol">Futbol</option>
				<option value="Atletismo">Atletismo</option>
				<option value="Voleibol">Voleibol</option>
				<option value="Basquetbol">Basquetbol</option>
				<option value="Baile de Salon">Baile de Salon</option>
				<option value="Danza Folklorica">Danza Folklorica</option>
				<option value="Dibujo">Dibujo</option>
				<option value="Ajedrez">Ajedrez</option>
				<option value="Música">Música</option>
				<option value="Personas que Laboran">Personas que Laboran</option>
			  </select>
	        <p class="fw-bold text-danger"> {{$errors->first('txtnameTaller')}}</p>
	    </div>
	    <div class="col-md-3">
	        <label class="form-label text-center text-black" name="labelDocente">Nombre del docente: </label>
			<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="txtnameDocente" value="{{$tallerid->nameDocente}}">
				<option disabled selected>Selecciona una opción</option>
				<option value="Gabo">Gabo</option>
				<option value="Gabriel">Gabriel</option>
				<option value="Luis">Luis</option>
				<option value="Alonso Espinosa Villaverde">Alonso Espinosa Villaverde</option>
			  </select>
	        <p class="fw-bold text-danger"> {{$errors->first('txtnameDocente')}}</p>
	    </div>
	    
	    <div class="col-md-3">
	        <label class="form-label text-center text-black" name="labelFH">Horarios: </label>
			<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="txtfh" value="{{$tallerid->fh}}">
				<option disabled selected>Selecciona una opción</option>
				<option value="Lunes 1:00 pm a 2:00 pm">Lunes 1:00 pm a 2:00 pm</option>
				<option value="Lunes 12:00 pm a 1:00 pm">Lunes 12:00 pm a 1:00 pm</option>
				<option value="Miercoles 1:00 pm a 2:00 pm">Miercoles 1:00 pm a 2:00 pm</option>
				<option value="Miercoles 2:00 pm a 3:00 pm">Miercoles 2:00 pm a 3:00 pm</option>
				<option value="Viernes 1:00 pm a 2:00 pm">Viernes 1:00 pm a 2:00 pm</option>
				<option value="Viernes 11:00 am a 12:00 pm">Viernes 11:00 am a 12:00 pm</option>
			  </select>
	        <p class="fw-bold text-danger"> {{$errors->first('txtfh')}}</p>
	    </div>
	        <div>
	        <button class="btn btn-info" type="submit" name="btnActualizar">Actualizar</button>
	        </div>
	        </form>
            <br>
	    </div>
	</div>
	<br>

@endsection