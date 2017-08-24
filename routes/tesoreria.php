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