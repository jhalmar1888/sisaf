<?php

Route::get('cargos', [
    'uses'  => 'RecursosController@getCargos',
    'as'    => 'rh.getCargos'
]);

Route::get('agregar-cargo', [
    'uses'  => 'RecursosController@getAgregarCargo',
    'as'    => 'rh.getAgregarCargo'
]);

Route::post('agregar-cargo', [
    'uses'  => 'RecursosController@postAgregarCargo',
    'as'    => 'rh.postAgregarCargo'
]);


Route::get('personas', [
    'uses'  => 'RecursosController@getPersonas',
    'as'    => 'rh.getPersonas'
]);

Route::get('agregar-persona', [
    'uses'  => 'RecursosController@getAgregarPersona',
    'as'    => 'rh.getAgregarPersona'
]);

Route::post('agregar-persona', [
    'uses'  => 'RecursosController@postAgregarPersona',
    'as'    => 'rh.postAgregarPersona'
]);



Route::get('empleados', [
    'uses'  => 'RecursosController@getEmpleados',
    'as'    => 'rh.getEmpleados'
]);

Route::get('agregar-empleado', [
    'uses'  => 'RecursosController@getAgregarEmpleado',
    'as'    => 'rh.getAgregarEmpleado'
]);

Route::post('agregar-empleado', [
    'uses'  => 'RecursosController@postAgregarEmpleado',
    'as'    => 'rh.postAgregarEmpleado'
]);


route::get('hoja-de-vida/{id_persona}', [
    'uses'  => 'RecursosController@getHojaVida',
    'as'    => 'rh.getHojaVida'
]);


Route::get('agregar-estudios-primarios-secundarios', [
    'uses'  => 'RecursosController@getAgregarEstudiosps',
    'as'    => 'rh.getAgregarEstudiosps'
]);

Route::post('agregar-estudios-primarios-secundarios', [
    'uses'  => 'RecursosController@postAgregarEstudiosps',
    'as'    => 'rh.postAgregarEstudiosps'
]);


Route::get('agregar-estudios-superiores', [
    'uses'  => 'RecursosController@getAgregarEstudiossup',
    'as'    => 'rh.getAgregarEstudiossup'
]);

Route::post('agregar-estudios-superiores', [
    'uses'  => 'RecursosController@postAgregarEstudiossup',
    'as'    => 'rh.postAgregarEstudiossup'
]);


Route::get('agregar-cursos-asistidos', [
    'uses'  => 'RecursosController@getAgregarCursos',
    'as'    => 'rh.getAgregarCursos'
]);

Route::post('agregar-cursos-asistidos', [
    'uses'  => 'RecursosController@postAgregarCursos',
    'as'    => 'rh.postAgregarCursos'
]);


Route::get('agregar-experiencia-laboral', [
    'uses'  => 'RecursosController@getAgregarExperiencia',
    'as'    => 'rh.getAgregarExperiencia'
]);

Route::post('agregar-experiencia-laboral', [
    'uses'  => 'RecursosController@postAgregarExperiencia',
    'as'    => 'rh.postAgregarExperiencia'
]);


Route::get('agregar-computacion', [
    'uses'  => 'RecursosController@getAgregarComputacion',
    'as'    => 'rh.getAgregarComputacion'
]);

Route::post('agregar-computacion', [
    'uses'  => 'RecursosController@postAgregarComputacion',
    'as'    => 'rh.postAgregarComputacion'
]);


Route::get('agregar-otros', [
    'uses'  => 'RecursosController@getAgregarOtros',
    'as'    => 'rh.getAgregarOtros'
]);

Route::post('agregar-otros', [
    'uses'  => 'RecursosController@postAgregarOtros',
    'as'    => 'rh.postAgregarOtros'
]);


Route::get('agregar-referencias-personales', [
    'uses'  => 'RecursosController@getAgregarReferencias',
    'as'    => 'rh.getAgregarReferencias'
]);

Route::post('agregar-referencias-personales', [
    'uses'  => 'RecursosController@postAgregarReferencias',
    'as'    => 'rh.postAgregarReferencias'
]);


Route::get('agregar-caracteristicas-personales', [
    'uses'  => 'RecursosController@getAgregarCaracteristicas',
    'as'    => 'rh.getAgregarCaracteristicas'
]);

Route::post('agregar-carateristicas-personales', [
    'uses'  => 'RecursosController@postAgregarCaracteristicas',
    'as'    => 'rh.postAgregarCaracteristicas'
]);