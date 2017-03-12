<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Listado de Alumnos</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Lista de Alumnos</h1>
        <hr>
        <table>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Edad</td>
                <td>Sexo</td>
                <td>Carrera</td>
                <td>Correo</td>    
            </tr>
                @foreach($alumnos as $a)
                    <tr>
                        <td>{{$a->id}}</td>
                        <td>{{$a->nombre}}</td>
                        <td>{{$a->edad}}</td>
                        @if($a->sexo == 0)
							<td>Femenino</td>
						@else
							<td>Masculino</td>
					    @endif
                        <td>{{$a->carrera}}</td>
                        <td>{{$a->correo}}</td>
                    </tr>
                @endforeach
        </table>
    </body>
</html>