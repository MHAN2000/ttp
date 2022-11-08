<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\SubjectController;
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
    // return view('home.home');
    return view('record.public-record');
})->name('inicio');

Route::get('/inicia_sesion', function () {
    return view('login.login');
});

Route::get('/catalogo', function() {
    return view('catalogo.index');
});


Route::post('/usuario_sesion',  [UserController::class, 'login'])->name('usuario_sesion');
Route::post('/crear_registro_publico',  [RecordController::class, 'store_public'])->name('crear_registro_publico');

Route::resource('levels', LevelController::class);

Route::resource('records', RecordController::class);

Route::get('tabla_records', [RecordController::class, 'getRecords'])->name('getRecords');


// Ruta directo de PDF para pruebas jsjs
Route::get('record_pdf/{id}', [RecordController::class, 'exportPDF'])->name('export_pdf');

Route::get('tabla_levels', [LevelController::class, 'getLevels'])->name('getLevels');

Route::resource('subjects', SubjectController::class);

Route::get('tabla_subjects', [SubjectController::class, 'getSubjects'])->name('getSubjects');

Route::resource('municipios', MunicipioController::class);

Route::get('tabla_municipios', [MunicipioController::class, 'getMunicipios'])->name('getMunicipios');
