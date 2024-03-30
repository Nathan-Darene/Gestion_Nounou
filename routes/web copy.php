<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RegisterController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

/* Définir la route pour l'inscription */
Route::get('/inscription', [PostController::class, 'inscription']);

// Définir la route pour le profil
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

/*Definir la route pour les message */
Route::get('/message', [MessageController::class, 'message']);

// Définir la route pour afficher le formulaire d'inscription
Route::get('/inscription', 'RegisterController@showRegistrationForm')->name('showRegistrationForm');

/*Route::get('/inscription', [RegisterController::class, 'showRegistrationForm'])->name('inscription');*/

Route::post('/inscription', 'RegisterController@register');

/* */


Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


// Définir la route pour traiter le formulaire d'inscription
Route::post('/inscription', [RegisterController::class, 'inscription']);





/*Route::get('/message', function () {
    return view('message');
});
*/




/* Route vers la page d'acceuil*/

Route::get('/acceuil', function () {
    return view('acceuil');
});


/* Route vers la page de connexion*/


Route::get('/connexion', function () {
    return view('connexion');
});

/* Route vers la page de profil*/

Route::get('/profil', function () {
    return view('profil');
});

/* Route vers la page d'inscription*/


/*Route::get('/inscription', function () {
    return view('inscription');
});
*/
/*Route vers la page page_user */

Route::get('/page_user', function () {
    return view('page_user');
});

/*Route vers la page page_admin */

Route::get('/page_admin', function () {
    return view('page_admin');
});

/*Route vers la page page_admin */
