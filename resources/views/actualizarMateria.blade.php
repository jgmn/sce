@extends('master')

@section('titulo')
    <h2>Editar Materia</h2>
@stop

@section('contenido')
    <div class="col-xs-12">
        <form action="{{url('/guardarMateria')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                 <label for="nombre">Materia:</label>
                 <input name="nombre" type="text" value="{{$materia->nombre}}" class="form-control" placeholder="Teclea el nombre de la materia" required>
            </div>
            <div class="form-group">
                <label for="creditos">Créditos:</label>
                <select name="creditos" class="form-control" required>
                    <option value="{{$materia->creditos}}"selected>{{$materia->creditos}}</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
           <div class="form-group">
			<label for="carrera">Carrera:</label>
			<select name="carrera" class="form-control" required>
				<option value="" selected>Selecciona la carrera</option>
				<option value="1">Ing. en Sistemas Computacionales</option>
				<option value="2">Ing. Industrial</option>
				<option value="3">Ing. Electrónica</option>
				<option value="4">Ing. Bioquímica</option>
			</select>
		</div>
        <button type="submit" class="btn btn-success">Guardar</button>
		<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
@stop