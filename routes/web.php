<?php

use App\Http\Controllers\Backend\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('categories', [CategoryController::class, 'index'])->name('category_list');
Route::get('categories/create', [CategoryController::class, 'create'])->name('category_create');
Route::post('categories/store', [CategoryController::class, 'store'])->name('category_store');
Route::get('categories/remove/{id}', [CategoryController::class,'delete'])->name('category_delete');
Route::get('categories/edit/{id}', [CategoryController::class, 'edit'])->name('category_edit');
Route::post('categories/update/{id}', [CategoryController::class, 'update'])->name('category_update');