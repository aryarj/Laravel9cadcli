<?php

use App\Http\Controllers\ClienteController;
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

Route::get('/', [ClienteController::class, 'incluir'])->name('novocliente');
Route::post('/clienteStore', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('/clienteStore2', [ClienteController::class, 'store2'])->name('cliente.store2');
Route::get('/index', [ClienteController::class, 'index'])->name('index');
Route::get('/cliente/{id}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('/cliente/{id}', [ClienteController::class, 'update'])->name('cliente.update');
Route::get('/cliente/{id}', [ClienteController::class, 'delete'])->name('cliente.delete');
Route::delete('/cliente/{id}', [ClienteController::class, 'delete2'])->name('cliente.delete2');

Route::get('/w', function () {
    return view('welcome');
});
