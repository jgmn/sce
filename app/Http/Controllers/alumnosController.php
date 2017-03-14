<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Carrera;
use DB; /*Query Builder*/

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
        $alumnos = DB::table('alumnos')
		->join('carreras','alumnos.carrera', '=', 'carreras.id')
		->select('alumnos.*', 'carreras.nombre AS nombre_carrera')
		->paginate(5);
        return view('consultarAlumnos', compact('alumnos'));
    }

	public function editarAlumno($id)
	{
		/*Falta traer el nombre de la carrera*/
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

	public function carrerasAlumnosPDF($id)
	{
		/*Todos los alumnos de la carrera*/
		$alumnos = DB::table('alumnos') 
		->where('carrera', '=', $id)
		->get();

		/*Todos los datos de la carrera*/
		$carrera = Carrera::find($id);

		$vista = view('carrerasAlumnosPDF', compact('alumnos', 'carrera'));
		$dompdf = \App::make('dompdf.wrapper');
		$dompdf->loadHTML($vista);
		return $dompdf->stream('lista.pdf');
	}
}










