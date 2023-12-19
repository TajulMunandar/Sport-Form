<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\KecakapanController;
use App\Http\Controllers\KerapianController;
use App\Http\Controllers\LariController;
use App\Http\Controllers\PenguasaanController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\TanggungController;
use Illuminate\Support\Facades\Route;

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
});

Route::get('/portal', [PortalController::class, 'index'])->name('portal.index')->middleware('auth');

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout');
});

Route::prefix('/form')->middleware('auth')->group(function () {
    Route::resource('/utama', FormController::class);
    Route::resource('/tanggung', TanggungController::class);
    Route::resource('/penguasaan', PenguasaanController::class);
    Route::resource('/kecakapan', KecakapanController::class);
    Route::resource('/kerapian', KerapianController::class);
});
