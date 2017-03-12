@extends('master')

@section('titulo')
	<h2>Registro de Alumno</h2>
	<hr>
@stop

@section('contenido')
<div class="col-xs-12">
	<form action="{{url('/guardarAlumno')}}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input name="nombre" type="text" placeholder="Teclea Nombre" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="edad">Edad:</label>
			<input name="edad" type="number" placeholder="Teclea Edad" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="sexo">Sexo:</label>
			<select name="sexo" class="form-control" required>
				<option value="" selected>Selecciona sexo</option>
				<option value="0">Femenino</option>
				<option value="1">Masculino</option>
			</select>
		</div>
		<div class="form-group">
			<label for="carrera">Carrera:</label>
			<select name="carrera" class="form-control" required>
				<option value="" selected>Selecciona carrera</option>
				<option value="Ing. en Sistemas Computacionales">Ing. en Sistemas Computacionales</option>
				<option value="Ing. Industrial">Ing. Industrial</option>
				<option value="Ing. Electrónica">Ing. Electrónica</option>
				<option value="Ing. Bioquímica">Ing. Bioquímica</option>
			</select>
		</div>
		<div class="form-group">
			<label for="correo">Correo:</label>
			<input name="correo" type="email" placeholder="Teclea Email" class="form-control" required>
		</div>
		<button type="submit" class="btn btn-primary">Registrar</button>
		<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
	</form>
</div>
@stop




