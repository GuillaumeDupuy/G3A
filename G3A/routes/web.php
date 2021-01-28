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
    Route::post('/password_modification', 'App\Http\Controllers\UserAccountController@mdp_modification');
    Route::get('/password_modification', 'App\Http\Controllers\UserAccountController@form_mdp_modification');
    Route::get('/dashboard', 'App\Http\Controllers\UserAccountController@dashboard');
    Route::get('/signout', 'App\Http\Controllers\UserAccountController@signout');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produit/{id}', [
    'as' => 'produit',
    'uses' => '\App\Http\Controllers\ProduitController@produit'
]);

Route::get('/connexion', 'App\Http\Controllers\ConnexionController@form');

Route::get('/inscription', 'App\Http\Controllers\InscriptionController@inscription');

Route::post('/inscription', 'App\Http\Controllers\InscriptionController@formulaire');

Route::post('/connexion', 'App\Http\Controllers\ConnexionController@connexion');

Route::get('/catalogue', 'App\Http\Controllers\CatalogueController@catalogue');

Route::get('/upload', 'App\Http\Controllers\FileUploadController@showUploadForm');
Route::post('/upload', 'App\Http\Controllers\FileUploadController@storeUploads');

route::get('/panier', 'App\Http\Controllers\PanierController@panier');
route::post('/panier/ajouter', 'App\Http\Controllers\PanierController@store');
