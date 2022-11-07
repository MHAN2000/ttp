<?php

use App\Http\Controllers\CatalogosController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\UserController;
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
    return view('home.home');
})->name('inicio');

Route::get('/inicia_sesion', function () {
    return view('login.login');
});

Route::get('/catalogo', function() {
    return view('catalogo.index');
});


Route::post('/usuario_sesion',  [UserController::class, 'login'])->name('usuario_sesion');

Route::resource('levels', LevelController::class);

Route::resource('records', RecordController::class);

// Ruta directo de PDF para pruebas jsjs
Route::get('record_pdf/{id}', [RecordController::class, 'exportPDF']);

Route::get('tabla_levels', [LevelController::class, 'getLevels'])->name('getLevels');
