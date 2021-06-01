<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cliente\EntidadeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Deputados\DeputadosController;
use App\Http\Controllers\Deputados\VerbasIndenizatoriaController;

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
    return redirect()->route('login');
});

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); */

require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/tables', function () {
    return view('dashboard.tables');
})->name('tables');

Route::get('/forms', function () {
    return view('dashboard.forms');
})->name('forms');

Route::get('/sweet', [Controller::class, 'sweet'])->name('sweet');

Route::get('/deputados/upload', [DeputadosController::class, 'upload'])->name('deputados.upload');

Route::get('/verbas/upload', [VerbasIndenizatoriaController::class, 'upload'])->name('verbas.upload');