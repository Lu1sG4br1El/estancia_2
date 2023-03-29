@extends('plantilla')
@section('contenido')
<style>
	div.formxd{
        border-color: black;
        border-style: solid;
        border-radius: 5px;
        margin-top: 10px;
        width: 60%;
		width: 65%;
        background-color: white;
    }
	.card1{
		width: 65px;
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
	.form-control{
		width: 400px;
		margin-right: auto;
		margin-left: auto;
	}
	.form-select{
		width: 400px;
		margin-right: auto;
		margin-left: auto;
	}
	.container-xl{
		width: 65%;
		position: relative;
		top: 50px;
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
	        <div class="container-xl formxd mt-5 text-white" style="background-color: #F0F8FF">
                <br>
				<h2 class="text-center text-black">Servicios</h2>
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
	        <form class="row g-3" method="post" action="{{ route('listaS.store') }}">
	            @csrf
                <br>
	    <h5 class="text-center text-black">Solicitar servicios</h5>
		<br>
		<div class="col-md-6">	
	        <label class="form-label text-center text-black" name="labelAlumn">Nombre del alumno: </label>
			<input type="text" class="form-control" name="txtnameAlumn" value="{{old('txtnameAlumn')}}" required>
	        <p class="fw-bold text-danger"> {{$errors->first('txtnameAlumn')}}</p>
	    </div>
		<div class="col-md-6">
	        <label class="form-label text-center text-black" name="labelServe">Tipo de servicio: </label>
			<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="txtnameServe" value="{{old('txtnameServe')}}">
				<option disabled selected>Selecciona una opción</option>
				<option value="ADEUDO">ADEUDO</option>
				<option value="CERTIFICACION INDUSTRIA 4.0 CUATRIMESTRAL - $643.00">CERTIFICACION INDUSTRIA 4.0 CUATRIMESTRAL - $643.00</option>
				<option value="CERTIFICACION INDUSTRIA 4.0 CUATRIMESTRAL EN 2 PAGOS BIMESTRALES - $360.00">CERTIFICACION INDUSTRIA 4.0 CUATRIMESTRAL EN 2 PAGOS BIMESTRALES - $360.00</option>
				<option value="CERTIFICACION INDUSTRIA 4.0 CUATRIMESTRAL EN 4 PAGOS MENSUALES - $181.00">CERTIFICACION INDUSTRIA 4.0 CUATRIMESTRAL EN 4 PAGOS MENSUALES - $181.00</option>
				<option value="CERTIFICADO DE ESTUDIOS PARCIAL - $622.00">CERTIFICADO DE ESTUDIOS PARCIAL - $622.00</option>
				<option value="REPOSICION DE BOLETA DE CALIFICACIONES - $114.00">REPOSICION DE BOLETA DE CALIFICACIONES - $114.00</option>
				<option value="REPOSICION DE CREDENCIAL (TAG) ESTUDIANTE / TRANSPORTE - $184.00">REPOSICION DE CREDENCIAL TAG ESTUDIANTE / TRANSPORTE - $184.00</option>
				<option value="EMISION DE TITULO POSGRADO - $2,542.00">EMISION DE TITULO POSGRADO - $2,542.00</option>
			  </select>
	        <p class="fw-bold text-danger"> {{$errors->first('txtnameServe')}}</p>
	    </div>
	        <div>
	        <button class="btn btn-outline-success" type="submit" name="btnGuardar">Guardar</button>
	        </div>
	        </form>
            <br>
	    </div>
	</div>
	<br>

@endsection