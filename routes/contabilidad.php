<?php
/**
 * Created by PhpStorm.
 * User: charlie
 * Date: 12/8/17
 * Time: 16:45
 */

Route::get('objetos-contabilidad', [
    'uses' => 'ContabilidadController@getObjetos',
    'as'   => 'contabilidad.getObjetos'
]);

Route::get('agregar-objeto', [
    'uses' => 'ContabilidadController@getAgregarObjeto',
    'as'   => 'contabilidad.getAgregarObjeto'
]);

Route::post('agregar-objeto', [
    'uses' => 'ContabilidadController@postAgregarObjeto',
    'as'   => 'contabilidad.postAgregarObjeto'
]);



Route::get('comprobantes-de-ingreso', [
    'uses'  => 'ContabilidadController@getComprobantesIngreso',
    'as'    => 'contabilidad.getComprobantesIngreso'
]);

Route::get('agregar-comprobante-de-ingreso', [
    'uses'  => 'ContabilidadController@getAgregarComprobanteIngreso',
    'as'    => 'contabilidad.getAgregarComprobanteIngreso'
]);

Route::post('agregar-comprobante-de-ingreso', [
    'uses'  => 'ContabilidadController@postAgregarComprobanteIngreso',
    'as'    => 'contabilidad.postAgregarComprobanteIngreso'
]);



Route::get('detalle-comprobamte-de-ingreso/{id_comprobante}', [
    'uses'  => 'ContabilidadController@getDetalleCI',
    'as'    => 'contabilidad.getDetalleCI'
]);

Route::get('agregar-detalle-comprobante-de-ingreso/{id_comprobante}', [
    'uses'  => 'ContabilidadController@getAgregarDetalleCI',
    'as'    => 'contabilidad.getAgregarDetalleCI'
]);

Route::post('agregar-detalle-comprobante-de-ingreso', [
    'uses'  => 'ContabilidadController@postAgregarDetalleCI',
    'as'    => 'contabilidad.postAgregarDetalleCI'
]);