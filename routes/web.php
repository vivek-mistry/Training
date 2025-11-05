<?php

use App\Http\Controllers\Backend\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('categories', [CategoryController::class, 'index'])->name('category_list');
Route::get('categories/create', [CategoryController::class, 'create'])->name('category_create');
Route::post('categories/store', [CategoryController::class, 'store'])->name('category_store');
