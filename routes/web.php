<?php

/*
|--------------------------------------------------------------------------
| Routas de la pagina Web prueba de git ramos
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rutas de autenticacion o inicio de sesion
Route::get('inicio-de-sesion', [
    'uses'  => 'Auth\LoginController@showLoginForm',
    'as'    => 'login'
]);
Route::post('inicio-de-sesion', [
    'uses'  => 'Auth\LoginController@login',
    'as'    => 'login'
]);
Route::post('cerrar-sesion', [
    'uses'  => 'Auth\LoginController@logout',
    'as'    => 'logout'
]);

// aca adentro iran las rutas que necesiten autenticacion
Route::group(['middleware' => 'auth'], function (){

    Route::get('/', [
        'uses'  => 'HomeController@index',
        'as'    => 'home.home'
    ]);

    // para superadmin

    /** @noinspection PhpIncludeInspection */
    require base_path('routes/superadmin.php');

    // para tesoreria

    /** @noinspection PhpIncludeInspection */
    require base_path('routes/tesoreria.php');

    // para almacenes

    /** @noinspection PhpIncludeInspection */
    require base_path('routes/almacenes.php');

});
