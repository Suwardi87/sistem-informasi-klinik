<?php

use App\Http\Controllers\Backend\PasienController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\KunjunganController;
use App\Http\Controllers\Backend\ObatController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\PegawaiController;
use App\Http\Controllers\Backend\ProvinsiController;
use App\Http\Controllers\Backend\TindakanController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\KabupatenController;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth', 'role:admin'])->prefix('backend')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('backend.main');
    Route::resource('/pegawai', PegawaiController::class)->names('backend.pegawai');
    Route::resource('/kabupaten', KabupatenController::class)->names('backend.kabupaten');
    Route::resource('/provinsi', ProvinsiController::class)->names('backend.provinsi');
    Route::resource('/tindakan', TindakanController::class)->names('backend.tindakan');
    Route::resource('/obat', ObatController::class)->names('backend.obat');
    Route::resource('/kunjungan', KunjunganController::class)->names('backend.kunjungan');
    Route::resource('/pasien', PasienController::class)->names('backend.pasien');
    Route::resource('/user', UserController::class)->names('backend.user');
});



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
