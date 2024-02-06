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

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/politica-cookies', [FooterController::class, 'politicaCookies'])->name('politica-cookies');
Route::get('/politica-privacidad', [FooterController::class, 'politicaPrivacidad'])->name('politica-privacidad');
Route::get('/terminos-y-condiciones', [FooterController::class, 'terminosYCondiciones'])->name('terminos-y-condiciones');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');


Route::get('/donde-estamos', function () {
    return view('donde-estamos');
})->name('donde-estamos');

Route::resource('events', EventController::class);
Route::resource('user', UserController::class);
Route::resource('messages', MessageController::class);
Route::resource('players', PlayerController::class);


Route::get('signup', [LoginController::class, 'signupForm'])->name('signupForm');
Route::post('signup', [LoginController::class, 'signup'])->name('signup');
Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');



