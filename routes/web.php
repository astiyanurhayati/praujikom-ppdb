<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
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
    return view('frontend.landing');
});


Route::get('/form-pendaftaran', [FormController::class, 'index'])->name('form.index');


Route::post('/form-pendaftaran/store', [FormController::class, 'store'])->name('form.store');

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login/store', [AuthController::class, 'auth'])->name('auth.store');

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('admin');
Route::get('/dashboard/data-siswa', [PageController::class, 'dataSiswa'])->name('data.siswa');

Route::delete('/dashbaord/siswa-delete/{nisn}', [FormController::class, 'destroy'])->name('siswa.destroy');
Route::get('/dashbaord/siswa-update/{nisn}', [FormController::class, 'edit'])->name('siswa.edit');
Route::patch('/dashbaord/siswa-update/{nisn}', [FormController::class, 'update'])->name('siswa.update');




















Route::group(['middleware' => 'isLogin', 'cekRole:admin,user'], function () {
});

Route::middleware(['isLogin', 'cekRole:admin'])->group(function () {
});

Route::middleware(['isLogin', 'cekRole:user'])->group(function () {
});


Route::middleware('isGuest')->group(function () {
    Route::post('/login/auth', [AuthController::class, 'auth'])->name('login.auth');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');




Route::get('/dashboard', function () {
    return view('backend.dashboard');
});
