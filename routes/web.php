<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PlantController;

/*
|--------------------------------------------------------------------------
| AUTH (Login & Register)
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess'])->name('login.process');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerProcess'])->name('register.process');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| PUBLIC PAGE
|--------------------------------------------------------------------------
*/

Route::get('/', [LandingController::class, 'index'])->name('landing');


/*
|--------------------------------------------------------------------------
| PROTECTED ROUTES (HARUS LOGIN)
|--------------------------------------------------------------------------
*/

Route::middleware(['authcheck'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Kategori
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('/categories/{id}/update', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('/categories/{id}/delete', [CategoryController::class, 'destroy'])->name('categories.delete');

    // Tanaman
    Route::get('/plants', [PlantController::class, 'index'])->name('plants.index');
    Route::get('/plants/create', [PlantController::class, 'create'])->name('plants.create');
    Route::post('/plants/store', [PlantController::class, 'store'])->name('plants.store');
    Route::get('/plants/{id}/edit', [PlantController::class, 'edit'])->name('plants.edit');
    Route::post('/plants/{id}/update', [PlantController::class, 'update'])->name('plants.update');
    Route::get('/plants/{id}/delete', [PlantController::class, 'destroy'])->name('plants.delete');

    // EXPORT PDF
    Route::get('/plants/export/pdf', [PlantController::class, 'exportPdf'])->name('plants.export.pdf');

    // EXPORT EXCEL
    Route::get('/plants/export/excel', [PlantController::class, 'exportExcel'])->name('plants.export.excel');
});
