<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;

class alumnosController extends Controller
{
    public function registrarAlumnos(){
    	return view('registrarAlumno');
    }

    public function guardarAlumno(Request $datos){
    	$alumno= new Alumno();
    	$alumno->nombre=$datos->input('nombre');
    	$alumno->edad=$datos->input('edad');
    	$alumno->sexo=$datos->input('sexo');
    	$alumno->carrera=$datos->input('carrera');
    	$alumno->correo=$datos->input('correo');
    	$alumno->save();

    	return Redirect('/');
    }

    public function consultarAlumnos() {
        $alumnos=Alumno::all();
        return view('consultarAlumnos', compact('alumnos'));
    }

	public function editarAlumno($id)
	{
		$alumnos = Alumno::find($id);
		return view('editarAlumno', compact('alumnos'));
	}

	public function actualizarAlumno(Request $datos, $id)
	{
		$alumnos = Alumno::find($id);
		$alumnos->nombre = $datos->input('nombre');
		$alumnos->edad = $datos->input('edad');
		$alumnos->sexo = $datos->input('sexo');
		$alumnos->carrera = $datos->input('carrera');
		$alumnos->correo = $datos->input('correo');
		$alumnos->save();

		return Redirect('/consultarAlumnos');
	}

	public function alumnosPDF()
	{
		$alumnos = Alumno::all();
		$vista = view('alumnosPDF', compact('alumnos'));
		$dompdf = \App::make('dompdf.wrapper');
		$dompdf->loadHTML($vista);
		return $dompdf->stream('reporte.pdf');
	}
}










