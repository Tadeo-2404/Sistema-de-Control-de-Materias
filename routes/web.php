<?php

use App\Http\Controllers\TestimoniosController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Testimonios;

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

// COMMON RESOURCE ROUTES
// index - Show all elements
// show - Show single element
// create -

Route::get('/', function() {
    return view('pagina-principal');
});


Route::get('/iniciar-sesion', function () {
    return view('iniciar-sesion');
});

Route::get('/registrarse', [UserController::class, 'registrarse']);
Route::post('/registrarse', [UserController::class, 'store']);

Route::get('/eliminar-cuenta', function() {
    return view('eliminar-cuenta');
});

Route::get('/recuperar-contraseña', function() {
    return view('recuperar-contraseña');
});