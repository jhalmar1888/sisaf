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