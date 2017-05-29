<?php

Route::get('superadministradores', [
    'uses'  => 'SuperAdminController@getUsuarios',
    'as'    => 'superadmin.getUsuarios'
]);

Route::get('agregar-usuario', [
    'uses'  => 'SuperAdminController@getAgregarUsuario',
    'as'    => 'superadmin.getAgregarUsuario'
]);

Route::post('agregar-usuario', [
    'uses'  => 'SuperAdminController@postAgregarUsuario',
    'as'    => 'superadmin.postAgregarUsuario'
]);

Route::get('habilitacion-usuario/{id_usuario}', [
    'uses'  => 'SuperAdminController@getHabilitacion',
    'as'    => 'superadmin.getHabilitacion'
]);

Route::get('modificar-usuario/{id_usuario}', [
    'uses'  => 'SuperAdminController@getModificarUsuario',
    'as'    => 'superadmin.getModificarUsuario'
]);

Route::put('modificar-usuario', [
    'uses'  => 'SuperAdminController@putModificarUsuario',
    'as'    => 'superadmin.putModificarUsuario'
]);

/// para los grados

Route::get('grados', [
    'uses'  => 'SuperAdminController@getGrados',
    'as'    => 'superadmin.getGrados'
]);

Route::get('agregar-grado', [
    'uses'  => 'SuperAdminController@getAgregarGrado',
    'as'    => 'superadmin.getAgregarGrado'
]);

Route::post('agregar-grados', [
    'uses'  => 'SuperAdminController@postAgregarGrado',
    'as'    => 'superadmin.postAgregarGrado'
]);

Route::get('habilitacion-grado/{id_grado}', [
    'uses'  => 'SuperAdminController@getHabilitacionGrado',
    'as'    => 'superadmin.getHabilitacionGrado'
]);

Route::get('modificar-grado/{id_grado}', [
    'uses'  => 'SuperAdminController@getEditarGrado',
    'as'    => 'superadmin.getEditarGrado'
]);

Route::put('modificar-grado', [
    'uses'  => 'SuperAdminController@putEditarGrado',
    'as'    => 'superadmin.putEditarGrado'
]);

/// para Especialidades

Route::get('especialidades', [
    'uses'  => 'SuperAdminController@getEspecialidades',
    'as'    => 'superadmin.getEspecialidades'
]);

Route::get('agregar-especialidad', [
    'uses'  => 'SuperAdminController@getAgregarEspecialidad',
    'as'    => 'superadmin.getAgregarEspecialidad'
]);

Route::post('agregar-especialidades', [
    'uses'  => 'SuperAdminController@postAgregarEspecialidad',
    'as'    => 'superadmin.postAgregarEspecialidad'
]);

Route::get('habilitacion-especialidad/{id_especialidad}', [
    'uses'  => 'SuperAdminController@getHabilitacionEspecialidad',
    'as'    => 'superadmin.getHabilitacionEspecialidad'
]);

Route::get('modificar-especialidad{id_especialidad}', [
    'uses'  => 'SuperAdminController@getEditarEspecialidad',
    'as'    => 'superadmin.getEditarEspecialidad'
]);

Route::put('modificar-especialidad', [
    'uses'  => 'SuperAdminController@putEditarEspecialidad',
    'as'    => 'superadmin.putEditarEspecialidad'
]);