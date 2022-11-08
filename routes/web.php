<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
use App\Models\Level;
use App\Models\Municipio;
use App\Models\Record;
use App\Models\Subject;
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
    $municipios = Municipio::all();
    $asuntos = Subject::all();
    $niveles = Level::all();

    return view('record.public-record', compact('municipios', 'asuntos', 'niveles'));
})->name('inicio');

Route::get('/inicia_sesion', function () {
    return view('login.login');
});

Route::get('/catalogo', function () {
    return view('catalogo.index');
});


Route::post('/usuario_sesion',  [UserController::class, 'login'])->name('usuario_sesion');
Route::post('/crear_registro_publico',  [RecordController::class, 'store_public'])->name('crear_registro_publico');

Route::resource('levels', LevelController::class);

Route::resource('records', RecordController::class);

Route::get('tabla_records', [RecordController::class, 'getRecords'])->name('getRecords');

Route::put('status_registro/{id}', [RecordController::class, 'changeStatus'])->name('changeStatus');


// Ruta directo de PDF para pruebas jsjs
Route::get('record_pdf/{id}', [RecordController::class, 'exportPDF'])->name('export_pdf');

Route::get('encontrar_registro_curp/{curp}', [RecordController::class, 'encontrarCURP'])->name('encontrarCURP');

Route::get('/editar_registro_publico/{curp}', [RecordController::class, 'editPublico'])->name('editPublico');

Route::put('actualizar_registro_publico/{id}', [RecordController::class, 'updatePublic'])->name('updatePublic');

Route::get('tabla_levels', [LevelController::class, 'getLevels'])->name('getLevels');

Route::resource('subjects', SubjectController::class);

Route::get('tabla_subjects', [SubjectController::class, 'getSubjects'])->name('getSubjects');

Route::resource('municipios', MunicipioController::class);

Route::get('tabla_municipios', [MunicipioController::class, 'getMunicipios'])->name('getMunicipios');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('inicia_sesion');
})->name('logout');
