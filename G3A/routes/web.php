<?php

use Illuminate\Support\Facades\Route;

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

Route::group([
    'middleware' => 'App\Http\Middleware\Auth',
], function () {
    Route::post('/password_modification', 'App\Http\Controllers\UserAccountController@mdp_confirmation');
    Route::get('/password_modification', 'App\Http\Controllers\UserAccountController@form_mdp_confirmation');
    
    Route::get('/signout', 'App\Http\Controllers\UserAccountController@signout');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', 'App\Http\Controllers\UserAccountController@dashboard');

Route::get('/connexion', 'App\Http\Controllers\ConnexionController@form');

Route::get('/inscription', 'App\Http\Controllers\InscriptionController@inscription');

Route::post('/inscription', 'App\Http\Controllers\InscriptionController@formulaire');

Route::post('/connexion', 'App\Http\Controllers\ConnexionController@connexion');

Route::get('/users', 'App\Http\Controllers\UsersController@index');

Route::get('/catalogue', 'App\Http\Controllers\CatalogueController@catalogue');

Route::get('/contact', function () {
    return view('contact');
});
