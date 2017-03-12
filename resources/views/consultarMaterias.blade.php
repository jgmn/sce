@extends('master')

@section('titulo')
    <h2>Consultar Materias</h2>
@stop

@section('contenido')
    <div class="col-xs-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Clave</th>
                    <th>Nombre</th>
                    <th>Créditos</th>
                    <th>Carrera</th>
                    <th><a href="{{url('/registrarMaterias')}}" class="btn btn-success btn-xs">Registrar</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach($materias as $m)
                <tr>
                    <td>{{$m->id}}</td>
                    <td>{{$m->nombre}}</td>
                    <td>{{$m->creditos}}</td>
                    <td>{{$m->carrera}}</td>  
                    <td>
                        <a href="/editarMateria/{{$m->id}}" class="btn btn-xs btn-primary">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        <button type="button" class="btn btn-xs btn-danger" id="{{$m->id}}" data-toggle="modal" data-target="#myModal" aria-label="Left Align">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">¿Deseas eliminar la materia?</h4>
      </div>
      <div class="modal-body">
        ¡No se podrá recuperar el registro!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		<button href="{{url('/eliminarMateria')}}" type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>