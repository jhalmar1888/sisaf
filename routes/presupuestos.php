<?php


Route::get('p1', function (){
    return 'presupuestos';
});



Route::get('objetos', [
    'uses'  => 'PresupuestosController@getObjetos',
    'as'    => 'presupuestos.getObjetos'
]);

Route::get('agregar-objeto', [
    'uses'  => 'PresupuestosController@getAgregarObjeto',
    'as'    => 'presupuestos.getAgregarObjetos'
]);

Route::post('agregar-objeto', [
    'uses'  => 'PresupuestosController@postAgregarObjeto',
    'as'    => 'presupuestos.postAgregarObjeto'
]);

Route::get('borrar-objeto/{id_objeto}', [
    'uses'  => 'PresupuestosController@getBorrarObjeto',
    'as'    => 'presupuestos.getBorrarObjeto'
]);

Route::get('modificar-objeto/{id_objeto}', [
    'uses'  => 'PresupuestosController@getModificarObjeto',
    'as'    => 'presupuestos.getModificarObjeto'
]);

Route::post('modificar-objeto', [
    'uses'  => 'PresupuestosController@postModificarObjeto',
    'as'    => 'presupuestos.postModificarObjeto'
]);






// para los comprobantes de FPG

Route::get('comprobante-formulacion-presupuestaria-gastos', [
    'uses'  => 'PresupuestosController@getCFPG',
    'as'    => 'presupuestos.getCFPG'
]);

Route::get('agregar-comprobante-formulacion-presupuestaria-gasto', [
    'uses'  => 'PresupuestosController@getAgregarCFPG',
    'as'    => 'presupuestos.getAgregarCFPG'
]);

Route::post('agregar-comprobante-formulacion-presupuestaria-gasto', [
    'uses'  => 'PresupuestosController@postAgregarCFPG',
    'as'    => 'presupuestos.postAgregarCFPG'
]);

Route::get('borrar-comprobante-formulacion-presupuestaria-gastos/{id_comprobante}', [
    'uses'  => 'PresupuestosController@getBorrarCFPG',
    'as'    => 'presupuestos.getBorrarCFPG'
]);



Route::get('detalle-comprobante-formulacion-presupuestaria-gastos/{id_comprobante}', [
    'uses'  => 'PresupuestosController@getDetalleCFPG',
    'as'    => 'presupuestos.getDetalleCFPG'
]);

Route::get('agregar-detalle-comprobante-formulacion-presupuestaria-gastos/{id_comprobante}', [
    'uses'  => 'PresupuestosController@getAgregarDetalleCFPG',
    'as'    => 'presupuestos.getAgregarDetalleCFPG'
]);

Route::post('agregar-detalle-comprobante-formulacion-presupuestaria-gastos', [
    'uses'  => 'PresupuestosController@postAgregarDetalleCFPG',
    'as'    => 'presupuestos.postAgregarDetalleCFPG'
]);

Route::get('borrar-detalle-comprobante-formulacion-presupuestaria-gastos/{id_registro}', [
    'uses'  => 'PresupuestosController@getBorrarRegistroCFPG',
    'as'    => 'presupuestos.getBorrarRegistroCFPG'
]);