<?php

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/login', "login")->name('login');
Route::view('/registro', "registro")->name('registro');
Route::view('/perfil', "perfil")->middleware('auth')->name('perfil');

Route::post('/registrar', [loginController::class, 'registrar'])->name('registrar');
Route::post('/iniciarSesion', [loginController::class, 'ingresar'])->name('ingresar');
Route::post('/cerrarSesion', [loginController::class, 'cerrarSesion'])->name('cerrarSesion');

