@extends('master')

@section('titulo')
	<h2>Editar Alumno</h2>
	<hr>
@stop

@section('contenido')
<div class="col-xs-12">
	<form action="{{url('/actualizarAlumno')}}/{{$alumnos->id}}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input name="nombre" type="text" placeholder="Teclea Nombre" class="form-control" value="{{$alumnos->nombre}}" required>
		</div>
		<div class="form-group">
			<label for="edad">Edad:</label>
			<input name="edad" type="number" placeholder="Teclea Edad" class="form-control" value="{{$alumnos->edad}}" required>
		</div>
		<div class="form-group">
			<label for="sexo">Sexo:</label>
			<select name="sexo" class="form-control"  required>
				<option value=""selected>Selecciona sexo</option>
				@if($alumnos->sexo == 0)
					<option value="0" selected>Femenino</option>
					<option value="1">Masculino</option>
				@else
					<option value="0">Femenino</option>
					<option value="1" selected>Masculino</option>
				@endif
			</select>
		</div>
		<div class="form-group">
			<label for="carrera">Carrera:</label>
			<select name="carrera" class="form-control" required>
				<option value="{{$alumnos->carrera}}"selected>{{$alumnos->nombre_carrera}}</option>
				<option value="1">Ing. en Sistemas Computacionales</option>
				<option value="2">Ing. Industrial</option>
				<option value="3">Ing. Electrónica</option>
				<option value="4">Ing. Bioquímica</option>
			</select>
		</div>
		<div class="form-group">
			<label for="correo">Correo:</label>
			<input name="correo" type="email" placeholder="Teclea Email" class="form-control" value="{{$alumnos->correo}}"required>
		</div>
		<button type="submit" class="btn btn-success">Guardar</button>
		<a href="{{url('/consultarAlumnos')}}" class="btn btn-danger">Cancelar</a>
	</form>
</div>
@stop




