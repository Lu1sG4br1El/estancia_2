<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorP;
use App\Http\Controllers\c_BD_taller;
use App\Http\Controllers\PDFController;
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
    return view('welcome');
});

Route::get('/', [controladorP::class, 'findex'])->name('Nindex');
Route::get('/solTaller', [controladorP::class, 'fsolTaller'])->name('NsolTaller');
Route::get('/listTaller', [controladorP::class, 'flistTaller'])->name('NlistTaller');
Route::get('/consTaller', [controladorP::class, 'fconsTaller'])->name('NconsTaller');
Route::get('/listaT/create', [c_BD_taller::class, 'create'])->name('listaT.create');
Route::get('/listaT', [c_BD_taller::class, 'index'])->name('listaT.index');

Route::post('/guardarTaller',[controladorP::class, 'procesarTaller'])->name('NprocesarT');
Route::post('/listaT', [c_BD_taller::class, 'store'])->name('listaT.store');

Route::get('/solDoc', [controladorP::class, 'fDocCons'])->name('NDocCons');

Route::get('/pdf', [PDFController::class, 'PDF'])->name('descargarPDF');
Route::get('/pdf2', [PDFController::class, 'PDF2'])->name('descargarPDF2');
Route::get('/pdf3', [PDFController::class, 'PDF3'])->name('descargarPDF3');