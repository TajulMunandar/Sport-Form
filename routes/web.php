<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\FinalController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\JalanController;
use App\Http\Controllers\KecakapanController;
use App\Http\Controllers\KerapianController;
use App\Http\Controllers\LariController;
use App\Http\Controllers\LemparController;
use App\Http\Controllers\LompatController;
use App\Http\Controllers\PelatihController;
use App\Http\Controllers\PenguasaanController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TanggungController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WasitController;
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
Route::get('/buku', function () {
    return view('buku');
});

Route::get('/dashboard', [PortalController::class, 'index'])->name('portal.index')->middleware('auth');

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index')->name('register')->middleware('guest');
    Route::post('/register', 'store')->middleware('guest');
});

Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'index')->middleware('auth');
    Route::put('/profile/{id}', 'update')->name('profile.update')->middleware('auth');
});

Route::prefix('/form')->middleware('auth')->group(function () {
    Route::resource('/utama', FormController::class);
    Route::resource('/tanggung', TanggungController::class);
    Route::resource('/penguasaan', PenguasaanController::class);
    Route::resource('/kecakapan', KecakapanController::class);
    Route::resource('/kerapian', KerapianController::class);
    Route::resource('/final', FinalController::class);
    Route::resource('/lari', LariController::class);
    Route::resource('/lompat', LompatController::class);
    Route::resource('/jalan', JalanController::class);
    Route::resource('/lempar', LemparController::class);
});

Route::prefix('/peraturan')->middleware('auth')->group(function () {
    Route::get('/buku1', function () {
        $title = "BUKU ATLETIK COVER HIJAU";
        return view('dashboard.peraturan.buku1')->with(compact("title"));
    });
    Route::get('/buku2', function () {
        $title = "Competition and Technical Rules – 2024 Edition";
        return view('dashboard.peraturan.buku2')->with(compact("title"));
    });
});

Route::resource('/user', UserController::class)->middleware('auth');
Route::put('/user/reset-password/{user}', [UserController::class, 'resetPasswordAdmin'])->name('user.password')->middleware('auth');
Route::resource('/buku', BukuController::class)->middleware('auth');
Route::resource('/wasit', WasitController::class)->middleware('auth');
Route::resource('/pelatih', PelatihController::class)->middleware('auth');
Route::resource('/penilaian', PenilaianController::class)->middleware('auth');
Route::get('/peraturan', [PeraturanController::class, 'index'])->name('peraturan.index')->middleware('auth');
