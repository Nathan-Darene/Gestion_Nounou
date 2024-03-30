<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/inscription',[PostController::class, 'inscription'],);

/*Route::get('/connexion',[PostController::class, 'connexion'],);

Route::get('/deconnexion',[PostController::class, 'deconnexion'],);

Route::get('/profil',[PostController::class, 'profil'],);

Route::get('/dashboard',[PostController::class, 'dashboard'],);

Route::get('/notification',[PostController::class, 'notification'],);

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


Route::get('/inscription', function () {
    return view('inscription');
});

/*Route vers la page page_user */

Route::get('/page_user', function () {
    return view('page_user');
});

/*Route vers la page page_admin */

Route::get('/page_admin', function () {
    return view('page_admin');
});

/*Route vers la page page_admin */
