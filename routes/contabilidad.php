 <?php

Route::get('catalogocuentasemi', [
    'uses'  => 'ContabilidadController@getCatalogoCuentasemi',
    'as'    => 'contabilidad.getCatalogoCuentasemi'
]);

Route::get('agregar-catalogocuentaemi', [
    'uses'  => 'ContabilidadController@getAgregarCatalogoCuentaemi',
    'as'    => 'contabilidad.getAgregarCatalogoCuentasemi'
]);

Route::post('agregar-catalogocuentaemi', [
    'uses'  => 'ContabilidadController@postAgregarCatalogoCuentaemi',
    'as'    => 'contabilidad.postAgregarCatalogoCuentaemi'
]);

Route::get('habilitacion-catalogocuentaemi/{id_catalogocuentaemi}', [
    'uses'  => 'ContabilidadController@getHabilitacion',
    'as'    => 'contabilidad.getHabilitacion'
]);

Route::get('modificar-catalogocuentaemi/{id_catalogocuentaemi}', [
    'uses'  => 'ContabilidadController@getModificarCatalogoCuentaemi',
    'as'    => 'contabilidad.getModificarCatalogoCuentaemi'
]);

Route::put('modificar-catalogocuentaemi', [
    'uses'  => 'ContabilidadController@putModificarCatalogoCuentaemi',
    'as'    => 'contabilidad.putModificarCatalogoCuentaemi'
]);
// a partir de aqui routas para la subcuentas
Route::get('co_subcuentas', [
    'uses'  => 'ContabilidadController@getCo_Subcuentas',
    'as'    => 'contabilidad.getCo_Subcuentas'
]);

Route::get('agregar-co_subcuenta', [
    'uses'  => 'ContabilidadController@getAgregarCo_Subcuenta',
    'as'    => 'contabilidad.getAgregarCo_Subcuenta'
]);
Route::post('agregar-co_subcuenta', [
    'uses'  => 'ContabilidadController@postAgregarCo_Subcuenta',
    'as'    => 'contabilidad.postAgregarCo_Subcuenta'
]);
Route::get('habilitacion-co_subcuenta/{id_co_subcuenta}', [
    'uses'  => 'ContabilidadController@getHabilitacionsubcuenta',
    'as'    => 'contabilidad.getHabilitacionsubcuenta'
]);
Route::get('modificar-co_subcuenta/{id_subcuenta}', [
    'uses'  => 'ContabilidadController@getModificarCo_Subcuenta',
    'as'    => 'contabilidad.getModificarCo_Subcuenta'
]);
Route::put('modificar-co_subcuenta', [
    'uses'  => 'ContabilidadController@putModificarCo_Subcuenta',
    'as'    => 'contabilidad.putModificarCo_Subcuenta'
]);

// para tipo de monedas
Route::get('co_tipomonedas', [
    'uses'  => 'ContabilidadController@getCo_Tipomonedas',
    'as'    => 'contabilidad.getCo_Tipomonedas'
]);
// para tipo de documento
 Route::get('co_tipodocumentos', [
     'uses'  => 'ContabilidadController@getCo_Tipodocumentos',
     'as'    => 'contabilidad.getCo_Tipodocumentos'
 ]);