<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Alumnos de la carrera {{$carrera->nombre}}</title>
        <meta charset="UTF-8">
        <style>
            body {
            font-size: 14px;
            line-height: 1.4;
            }
            .responsive {
            width: 100%;
            border-collapse: collapse;
            }
            .responsive tr:nth-of-type(odd) {
            background: #eee;
            }
            .responsive th {
            font-weight: bold;
            background: #333;
            color: white;
            }
            .responsive th, .responsive td {
            text-align: left;
            padding: 6px;
            }
            @media only screen and (max-width: 640px) {
            .frame {
                padding: 20px;
            }
            .responsive, .responsive thead, .responsive tbody, .responsive th, .responsive td, .responsive tr {
                display: block;
            }
            .responsive {
                border-top: 1px solid #bbb;
                border-left: 1px solid #bbb;
                border-right: 1px solid #bbb;
            }
            .responsive thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }
            .responsive td {
                border: none;
                border-bottom: 1px solid #ddd;
                position: relative;
                padding-left: 50%;
            }
            .responsive td:nth-of-type(4) {
                border-bottom: 0;
            }
            .responsive tr {
                border-bottom: 1px solid #bbb;
            }
            .responsive td:before {
                position: absolute;
                top: 6px;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                font-weight: bold;
            }
            .responsive td:nth-of-type(1):before {
                content: "NDC";
            }
            .responsive td:nth-of-type(2):before {
                content: "DESCRIPTION";
            }
            .responsive td:nth-of-type(3):before {
                content: "ABC";
            }
            .responsive td:nth-of-type(4):before {
                content: "CARDINAL";
            }
        }
        </style>
    </head>
    <body>
    <table>
    <tr>
    <td width="560" class="frame">
      <table class="responsive">
        <thead>
          <tr>
            <th class="table-id">ID</th>
            <th class="table-nombre">Nombre</th>
            <th class="table-edad">Edad</th>
            <th class="table-sexo">Sexo</th>
            <th class="table-carrera">Carrera</th>
            <th class="table-correo">Correo</th>
          </tr>
        </thead>
        <tbody>
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
                        <td>{{$carrera->nombre}}</td>
                        <td>{{$a->correo}}</td>
                    </tr>
                @endforeach
        </tbody>
      </table>
    </td>
  </tr>
</table>
    </body>
</html>