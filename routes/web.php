<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PegawaiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\KabupatenController;
use App\Http\Controllers\Backend\ProvinsiController;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->prefix('backend')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('backend.main');
    Route::resource('/pegawai', PegawaiController::class)->names('backend.pegawai');
    Route::resource('/kabupaten', KabupatenController::class)->names('backend.kabupaten');
    Route::resource('/provinsi', ProvinsiController::class)->names('backend.provinsi');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
