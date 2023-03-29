<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorP;
use App\Http\Controllers\c_BD_taller;
use App\Http\Controllers\c_BD_serv;
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
Route::get('/solSer', [controladorP::class, 'fsolServi'])->name('NsolSer');
Route::get('/listTaller', [controladorP::class, 'flistTaller'])->name('NlistTaller');
Route::get('/consTaller', [controladorP::class, 'fconsTaller'])->name('NconsTaller');
Route::get('/listaT/create', [c_BD_taller::class, 'create'])->name('listaT.create');
Route::get('/listaS/create', [c_BD_serv::class, 'create'])->name('listaS.create');
Route::get('/listaT', [c_BD_taller::class, 'index'])->name('listaT.index');
Route::get('/listaS', [c_BD_serv::class, 'index'])->name('listaS.index');
Route::get('/listaT/{id}/edit',[c_BD_taller::class, 'edit'])->name('listaT.edit');
Route::put('/listaT/{id}',[c_BD_taller::class, 'update'])->name('listaT.update');
Route::get('/listaT/{id}/confirm', [c_BD_taller::class, 'confirm'])->name('listaT.confirm');
Route::post('/guardarTaller',[controladorP::class, 'store'])->name('listaT.store');
Route::post('/guardarServi', [ControladorP::class, 'procesarServe'])->name('NProcesarS');
Route::post('/listaT', [c_BD_taller::class, 'store'])->name('listaT.store');
Route::post('/listaS', [c_BD_serv::class, 'store'])->name('listaS.store');
Route::delete('/listaT/{id}', [c_BD_taller::class, 'destroy'])->name('listaT.destroy');

Route::get('/solDoc', [controladorP::class, 'fDocCons'])->name('NDocCons');

Route::get('/pdf', [PDFController::class, 'PDF'])->name('descargarPDF');
Route::get('/pdf2', [PDFController::class, 'PDF2'])->name('descargarPDF2');
Route::get('/pdf3', [PDFController::class, 'PDF3'])->name('descargarPDF3');