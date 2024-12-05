<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

FacadesAuth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/show-product', [AdminController::class, 'show_product'])->name('show-product');
    Route::get('/add-product', [AdminController::class, 'add_product'])->name('add-product');
    Route::post('/product/store', [AdminController::class, 'product_store'])->name('admin.product_store');
    Route::delete('/product/{product}', [AdminController::class, 'destroy'])->name('admin.products.destroy');

    Route::get('/show-picture', [AdminController::class, 'show_picture'])->name('show-picture');
    Route::get('/add-picture', [AdminController::class, 'add_picture'])->name('add-picture');
    Route::post('/picture/store', [AdminController::class, 'picture_store'])->name('admin.picture_store');
    Route::delete('/picture/{picture}', [AdminController::class, 'destroy_picture'])->name('admin.pictures.destroy');

    Route::get('/show-project', [AdminController::class, 'show_project'])->name('show-project');
    Route::get('/add-project', [AdminController::class, 'add_project'])->name('add-project');
    Route::post('/project/store', [AdminController::class, 'project_store'])->name('admin.project_store');
    Route::delete('/project/{project}', [AdminController::class, 'destroy_project'])->name('admin.projects.destroy');
});
