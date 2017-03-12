<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('home');
});

Route::get('/registrarAlumnos', 'alumnosController@registrarAlumnos');

Route::get('/consultarAlumnos', 'alumnosController@consultarAlumnos');

Route::post('/guardarAlumno', 'alumnosController@guardarAlumno');

Route::get('/editarAlumno/{id}', 'alumnosController@editarAlumno');

Route::post('/actualizarAlumno/{id}', 'alumnosController@actualizarAlumno');

Route::get('/alumnosPDF', 'alumnosController@alumnosPDF');

/*Rutas de Materias*/

Route::get('/registrarMaterias', 'materiasController@registrarMaterias');	

Route::get('/editarMateria/{id}', 'materiasController@editarMateria');

Route::get('/consultarMaterias', 'materiasController@consultarMaterias');

Route::post('/guardarMateria', 'materiasController@guardarMateria');















