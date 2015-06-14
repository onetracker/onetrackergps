<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::post('save', ['as' => 'save', 'uses' => 'ContactformController@contact_save']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Route::get('hola', 'WelcomeController@hola');
Route::get('sociedad', 'WelcomeController@sociedad');
Route::get('contacto', 'ContactformController@contact');
Route::get('rastreo-de-maquinaria', 'WelcomeController@rastreo_maquinaria');
Route::get('rastreo-de-personas', 'WelcomeController@rastreo_personas');
Route::get('rastreo-de-automoviles', 'WelcomeController@rastreo_automoviles');
Route::get('rastreo-de-motos', 'WelcomeController@rastreo_motos');
Route::get('rastreo-de-bicicletas', 'WelcomeController@rastreo_bicicletas');
Route::get('administracion-y-control', 'WelcomeController@administracion_control');
