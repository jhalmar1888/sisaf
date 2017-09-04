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

/// comprobantes ingresos

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

/////// comprobantes egresos

Route::get('comprobantes-de-egreso', [
    'uses'  => 'ContabilidadController@getComprobantesEgreso',
    'as'    => 'contabilidad.getComprobantesEgreso'
]);

Route::get('agregar-comprobante-de-egreso', [
    'uses'  => 'ContabilidadController@getAgregarComprobanteEgreso',
    'as'    => 'contabilidad.getAgregarComprobanteEgreso'
]);

Route::post('agregar-comprobante-de-egreso', [
    'uses'  => 'ContabilidadController@postAgregarComprobanteEgreso',
    'as'    => 'contabilidad.postAgregarComprobanteEgreso'
]);



Route::get('detalle-comprobante-de-egreso/{id_comprobante}', [
    'uses'  => 'ContabilidadController@getDetalleCE',
    'as'    => 'contabilidad.getDetalleCE'
]);

Route::get('agregar-detalle-comprobante-de-egreso/{id_comprobante}', [
    'uses'  => 'ContabilidadController@getAgregarDetalleCE',
    'as'    => 'contabilidad.getAgregarDetalleCE'
]);

Route::post('agregar-detalle-comprobante-de-egreso', [
    'uses'  => 'ContabilidadController@postAgregarDetalleCE',
    'as'    => 'contabilidad.postAgregarDetalleCE'
]);

/////// comprobantes traspaso

Route::get('comprobantes-de-traspaso', [
    'uses'  => 'ContabilidadController@getComprobantesTraspaso',
    'as'    => 'contabilidad.getComprobantesTraspaso'
]);

Route::get('agregar-comprobante-de-traspaso', [
    'uses'  => 'ContabilidadController@getAgregarComprobanteTraspaso',
    'as'    => 'contabilidad.getAgregarComprobanteTraspaso'
]);

Route::post('agregar-comprobante-de-traspaso', [
    'uses'  => 'ContabilidadController@postAgregarComprobanteTraspaso',
    'as'    => 'contabilidad.postAgregarComprobanteTraspaso'
]);



Route::get('detalle-comprobante-de-traspaso/{id_comprobante}', [
    'uses'  => 'ContabilidadController@getDetalleCT',
    'as'    => 'contabilidad.getDetalleCT'
]);

Route::get('agregar-detalle-comprobante-de-traspaso/{id_comprobante}', [
    'uses'  => 'ContabilidadController@getAgregarDetalleCT',
    'as'    => 'contabilidad.getAgregarDetalleCT'
]);

Route::post('agregar-detalle-comprobante-de-traspaso', [
    'uses'  => 'ContabilidadController@postAgregarDetalleCT',
    'as'    => 'contabilidad.postAgregarDetalleCT'
]);



// apartir de aqui libro mayor

Route::get('libro-mayor', [
    'uses'  => 'ContabilidadController@getLibroMayor',
    'as'    => 'contabilidad.getLibroMayor'
]);



//sumas y saldos

Route::get('sumasysaldos', [
    'uses'  => 'ContabilidadController@getSumasySaldos',
    'as'    => 'contabilidad.getSumasySaldos'
]);