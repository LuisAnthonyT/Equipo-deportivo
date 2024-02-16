<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PlayerController;
use App\Http\Middleware\CheckAdmin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//RUTA PÁGINA PRINCIPAL
Route::get('/', function () {
    return view('index');
})->name('inicio');

// RUTAS PARA LAS POLITICAS
Route::get('/politica-cookies', [FooterController::class, 'politicaCookies'])->name('politica-cookies');
Route::get('/politica-privacidad', [FooterController::class, 'politicaPrivacidad'])->name('politica-privacidad');
Route::get('/terminos-y-condiciones', [FooterController::class, 'terminosYCondiciones'])->name('terminos-y-condiciones');

//RUTA PARA LA SECCIÓN TIENDA
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

//RUTA PARA LA SECCIÓN DONDE ESTAMOS
Route::get('/donde-estamos', function () {
    return view('donde-estamos');
})->name('donde-estamos');

//RUTAS PARA LA SECCIÓN EVENTOS
Route::resource('events', EventController::class);
//Ruta para dar like
Route::post('event/{event}/like', [EventController::class, 'eventLike'])->name('event.like')->middleware('auth');
//Ruta quitar el like
Route::delete('event/{event}/deleteLike', [EventController::class, 'deleteLike'])->name('event.deleteLike')->middleware('auth');

//RUTAS PARA LA PARTE DE USUARIOS
Route::resource('user', UserController::class)
->except(['index']);

Route::get('users', [UserController::class, 'index'])
->name('user.index')
->middleware(CheckAdmin::class);

//RUTAS PARA LA PARTE DE MENSAJES
Route::resource('messages', MessageController::class);

//RUTAS PARA LA PARTE DE JUGADORES
Route::resource('players', PlayerController::class);

// RUTAS PARA REGISTRARSE, LOGIN Y LOGOUT
Route::get('signup', [LoginController::class, 'signupForm'])->name('signupForm');
Route::post('signup', [LoginController::class, 'signup'])->name('signup');
Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');



