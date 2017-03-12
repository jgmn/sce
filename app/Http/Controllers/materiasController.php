<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Materia;

class materiasController extends Controller
{
    public function registrarMaterias()
    {
        return view('registrarMateria');
    }

    public function guardarMateria(Request $datos)
    {
        $materias= new Materia();   
    	$materias->nombre=$datos->input('nombre');
        $materias->creditos=$datos->input('creditos');
    	$materias->carrera=$datos->input('carrera');
    	$materias->save();
        return Redirect('/');
    }

    public function editarMateria($id)
    {
        $materia = Materia::find($id);
        //dd($materias);
        return view('editarMateria', compact('materia'));
    }

    public function consultarMaterias()
    {
        $materias =  Materia::all();
        return view('consultarMaterias', compact('materias'));
    }
}
