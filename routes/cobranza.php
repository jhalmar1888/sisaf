<?php
/**
 * Created by PhpStorm.
 * User: charlie
 * Date: 12/8/17
 * Time: 16:45
 */


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
Route::get('objetos-contabilidad', [
    'uses' => 'ContabilidadController@getObjetos',
    'as'   => 'contabilidad.getObjetos'
]);


Route::get('certificados', [
    'uses' => 'CobranzaController@getCertificado',
    'as'   => 'cobranza.@getCertificado'
]);

Route::get('informes', [
    'uses' => 'CobranzaController@getInforme',
    'as'   => 'cobranza.@getInforme'
]);

Route::get('memos', [
    'uses' => 'CobranzaController@getMemo',
    'as'   => 'cobranza.@getMemo'
]);


Route::get('notificaciones', [
    'uses' => 'CobranzaController@getNotificacion',
    'as'   => 'cobranza.@getNotificacion'
]);

Route::get('emails', [
    'uses' => 'CobranzaController@getEmail',
    'as'   => 'cobranza.@getEmail'
]);

Route::get('llamadas', [
    'uses' => 'CobranzaController@getLlamada',
    'as'   => 'cobranza.@getLlamada'
]);

Route::get('smss', [
    'uses' => 'CobranzaController@getSms',
    'as'   => 'cobranza.@getSms'
]);

