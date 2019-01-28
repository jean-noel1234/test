<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', 'ContactController@getshow');
Route::post('contact', 'ContactController@postshow');

Route::get('photo', 'PhotoController@getshow');
Route::post('photo', 'PhotoController@postshow');

Route::get('ajout_utilisateur', 'AjoutUtilisateurController@getshow');
Route::post('ajout_utilisateur', 'AjoutUtilisateurController@postshow');

Route::get('connexion', 'ConnexionController@getshow');
Route::post('connexion', 'ConnexionController@postshow');
