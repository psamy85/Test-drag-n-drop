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

Route::get('/', 'MovieController@index');                                 //Création de la route index
Route::post('/movie/upPosition', 'MovieController@upPosition');       //Création de la route appelé en AJAX pour mettre à jour les positions
