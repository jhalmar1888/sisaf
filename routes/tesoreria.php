<?php

Route::get('alumnos', [
    'uses'  => 'TesController@getAlumnos',
    'as'    => 'tes.getAlumnos'
]);

Route::get('agregar-alumno', [
    'uses'  => 'TesController@getAgregarAlumno',
    'as'    => 'tes.getAgregarAlumno'
]);

Route::post('agregar-alumno', [
    'uses'  => 'TesController@postAgregarAlumno',
    'as'    => 'tes.postAgregarAlumno'
]);


Route::get('becas', [
    'uses'  => 'TesController@getBecas',
    'as'    => 'tes.getBecas'
]);

Route::get('agregar-beca', [
    'uses'  => 'TesController@getAgregarBeca',
    'as'    => 'tes.getAgregarBeca'
]);

Route::post('agregar-beca', [
    'uses'  => 'TesController@postAgregarBeca',
    'as'    => 'tes.postAgregarBeca'
]);

Route::get('carreras', [
    'uses'  => 'TesController@getCarreras',
    'as'    => 'tes.getCarreras'
]);

Route::get('agregar-carrera', [
    'uses'  => 'TesController@getAgregarCarrera',
    'as'    => 'tes.getAgregarCarrera'
]);

Route::post('agregar-carrera', [
    'uses'  => 'TesController@postAgregarCarrera',
    'as'    => 'tes.postAgregarCarrera'
]);
Route::get('gestion', [
    'uses'  => 'TesController@getGestion',
    'as'    => 'tes.getGestion'
]);

Route::get('agregar-gestion', [
    'uses'  => 'TesController@getAgregarGestion',
    'as'    => 'tes.getAgregarGestion'
]);

Route::post('agregar-gestion', [
    'uses'  => 'TesController@postAgregarGestion',
    'as'    => 'tes.postAgregarGestion'
]);

Route::get('pagos', [
    'uses'  => 'TesController@getPagos',
    'as'    => 'tes.getPagos'
]);

Route::get('agregar-pagos', [
    'uses'  => 'TesController@getAgregarPagos',
    'as'    => 'tes.getAgregarPagos'
]);

Route::post('agregar-pagos', [
    'uses'  => 'TesController@postAgregarPagos',
    'as'    => 'tes.postAgregarPagos'
]);

Route::get('cursos', [
    'uses'  => 'TesController@getCursos',
    'as'    => 'tes.getCursos'
]);

Route::get('agregar-cursos', [
    'uses'  => 'TesController@getAgregarCursos',
    'as'    => 'tes.getAgregarCursos'
]);

Route::post('agregar-cursos', [
    'uses'  => 'TesController@postAgregarCursos',
    'as'    => 'tes.postAgregarCursos'
]);

Route::get('modificar-cursos/{id_curso}', [
    'uses'  => 'TesController@getModificarCurso',
    'as'    => 'tes.getModificarCurso'
]);

Route::post('modificar-cursos', [
    'uses'  => 'TesController@postModificarCurso',
    'as'    => 'tes.postModificarCurso'
]);