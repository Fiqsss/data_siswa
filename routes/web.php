<?php
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\SiswaController;
use Illuminate\Auth\Events\PasswordReset;

use App\Http\Controllers\ExcelExportController;

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
// routes/web.php

Route::middleware(['auth'])->group(function () {
    Route::get('/export-siswa', [ExcelExportController::class, 'export'])->name('export.siswa');
    Route::get('/', [SiswaController::class, 'index'])->name('home');
    Route::get('/createsiswa', [SiswaController::class, 'createSiswa'])->name('createsiswa');
    Route::post('/addsiswa', [SiswaController::class, 'addSiswa'])->name('addsiswa');
    Route::get('/deletesiswa/{id}', [SiswaController::class, 'deleteSiswa'])->name('deletesiswa');
    Route::get('/formeditsiswa/{id}', [SiswaController::class, 'formEditSiswa'])->name('formeditsiswa');
    Route::post('/editsiswa/{id}', [SiswaController::class, 'editSiswa'])->name('editsiswa');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});

Route::middleware(['guest'])->group(function() {
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/login', [AuthController::class, 'loginView'])->name('loginView');
    Route::get('/lupapassword', [AuthController::class, 'lupaPassword'])->name('lupapassword');
    Route::post('/lupa_act', [AuthController::class, 'lupaPassword_act'])->name('lupapassword_act')->name('password.reset');
    Route::get('/reset-password/{token}', function (string $token) {
        return view('login.resetpassword', ['token' => $token]);
    })->name('password.reset');
    Route::post('/reset-password', [AuthController::class,'reset'])->name('password.update');



});
