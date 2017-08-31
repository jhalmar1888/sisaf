<?php


Route::get('almacenes', [
    'uses'  => 'AlmacenController@getAlmacenes',
    'as'    => 'almacen.getAlmacenes'
]);

Route::get('comprobantes-ingreso', [
    'uses'  => 'AlmacenController@getComprobantesIngreso',
    'as'    => 'almacen.getComprobantesIngreso'
]);

Route::get('agregar-comprobante-ingreso', [
    'uses'  => 'AlmacenController@getAgregarComprobanteIngreso',
    'as'    => 'almacen.getAgregarComprobanteIngreso'
]);

Route::post('agregar-comprobante-ingreso', [
    'uses'  => 'AlmacenController@postAgregarComprobanteIngreso',
    'as'    => 'almacen.postAgregarComprobanteIngreso'
]);

Route::get('comprobante-ingreso-kardex/{id_compingreso}', [
    'uses'  => 'AlmacenController@getComprobanteIngresoKardex',
    'as'    => 'almacen.getComprobanteIngresoKardex'
]);

Route::get('agregar-articulos-ci/{id_compingreso}', [
    'uses'  => 'AlmacenController@getAgregarArticuloCI',
    'as'    => 'almacen.getAgregarArticuloCI'
]);

Route::post('agregar-articulos-ci', [
    'uses'  => 'AlmacenController@postAgregarArticuloCI',
    'as'    => 'almacen.postAgregarArticuloCI'
]);

Route::get('comprobantes-salida', [
    'uses'  => 'AlmacenController@getComprobantesSalida',
    'as'    => 'almacen.getComprobantesSalida'
]);

Route::get('comprobante-salida-kardex/{id_compsalida}', [
    'uses'  => 'AlmacenController@getComprobanteSalidaKardex',
    'as'    => 'almacen.getComprobanteSalidaKardex'
]);

Route::get('agregar-comprobante-salida', [
    'uses'  => 'AlmacenController@getAgregarComprobanteSalida',
    'as'    => 'almacen.getAgregarComprobanteSalida'
]);

Route::post('agregar-comprobante-salida', [
    'uses'  => 'AlmacenController@postAgregarComprobanteSalida',
    'as'    => 'almacen.postAgregarComprobanteSalida'
]);

Route::get('agregar-articulos-cs/{id_compsalida}', [
    'uses'  => 'AlmacenController@getAgregarArticuloCS',
    'as'    => 'almacen.getAgregarArticuloCS'
]);

Route::post('agregar-articulos-cs', [
    'uses'  => 'AlmacenController@postAgregarArticuloCS',
    'as'    => 'almacen.postAgregarArticuloCS'
]);


/*** para los articulos *******/

route::get('articulos', [
    'uses'  => 'AlmacenController@getArticulos',
    'as'    => 'almacen.getArticulos'
]);

Route::get('agregar-articulo', [
    'uses'  => 'AlmacenController@getAgregarArticulo',
    'as'    => 'almacen.getAgregarArticulo'
]);

Route::post('agregar-articulo', [
    'uses'  => 'AlmacenController@postAgregarArticulo',
    'as'    => 'almacen.postAgregarArticulo'
]);

Route::get('modificar-articulo/{id_articulo}', [
    'uses'  => 'AlmacenController@getModificarArticulo',
    'as'    => 'almacen.getModificarArticulo'
]);

Route::post('modificar-articulo', [
    'uses'  => 'AlmacenController@gpostModificarArticulo',
    'as'    => 'almacen.postModificarArticulo'
]);

/********** para los proveedores ***************/

Route::get('proveedores', [
    'uses'  => 'AlmacenController@getProveedores',
    'as'    => 'almacen.getProveedores'
]);

Route::get('agregar-proveedor', [
    'uses'  => 'AlmacenController@getAgregarProveedor',
    'as'    => 'almacen.getAgregarProveedor'
]);

Route::post('agregar-proveedor', [
    'uses'  => 'AlmacenController@postAgregarProveedor',
    'as'    => 'almacen.postAgregarProveedor'
]);