<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FooterController;

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

Route::get('/donde-estamos', function () {
    return view('donde-estamos');
})->name('donde-estamos');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');



