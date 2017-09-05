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

