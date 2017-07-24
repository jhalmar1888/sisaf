<?php


Route::get('hola', function (){
    return 'almacen';
});

Route::get('articulos', [
    'uses'  => 'AlmacenController@getArticulos',
    'as'    => 'almacen.getArticulos'
]);

Route::get('agregar-articulos', [
    'uses'  => 'AlmacenController@getAgregarArticulo',
    'as'    => 'almacen.getAgregarArticulo'
]);

Route::post('agregar-articulos', [
    'uses'  => 'AlmacenController@postAgregarArticulo',
    'as'    => 'almacen.postAgregarArticulo'
]);







Route::get('almacenes', [
    'uses'  => 'AlmacenController@getAlmacenes',
    'as'    => 'almacen.getAlmacenes'
]);