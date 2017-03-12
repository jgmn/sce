<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Control Escolar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="{{url('/')}}"><b>S</b>CE</a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#Inicio">Inicio<span class="sr-only">(current)</span></a></li>
	        <li><a href="#Acercade">Acerca de</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Opciones <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="{{url('/registrarAlumnos')}}">Registrar Alumno</a></li>
	            <li><a href="{{url('/consultarAlumnos')}}">Consultar Alumnos</a></li>
	            <li><a href="{{url('/registrarMaterias')}}">Registrar Materia</a></li>
							<li><a href="{{url('/consultarMaterias')}}">Consultar Materias</a></li>
	            <!--<li class="divider"></li>
	            <li><a href="#"></a></li>
	            <li class="divider"></li>
	            <li><a href="#"k</a></li>-->
	          </ul>
	        </li>
	      </ul>
	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <!--<li><a href="#">Link</a></li>-->
	      </ul>
	    </div>
	  </div>
	</nav>

	<div class="container">
		@yield('titulo')
		@yield('contenido')
	</div>

	<footer class="text-center">
		<hr>
		Ingeniería Web &copy; 2017
	</footer>
	<script src="{{asset("js/jquery-3.1.1.js")}}"></script>
	<script src="{{asset("js/bootstrap.min.js")}}"></script>
</body>
</html>






