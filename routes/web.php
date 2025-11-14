<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SubCategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('template', function () {
    return view('template');
});

Route::get('dashboard', function () {
    return view('backend.dashboard');
});

Route::get('email', function () {
    return view('backend.email');
});

Route::get('categories', [CategoryController::class, 'index'])->name('category_list');
Route::get('categories/create', [CategoryController::class, 'create'])->name('category_create');
Route::post('categories/store', [CategoryController::class, 'store'])->name('category_store');
Route::get('categories/remove/{id}', [CategoryController::class,'delete'])->name('category_delete');
Route::get('categories/edit/{id}', [CategoryController::class, 'edit'])->name('category_edit');
Route::post('categories/update/{id}', [CategoryController::class, 'update'])->name('category_update');

Route::get('sub_categories', [SubCategoryController::class, 'index'])->name('sub_category_list');
Route::get('sub_categories/create', [SubCategoryController::class, 'create'])->name('sub_category_create');
Route::post('sub_categories/store', [SubCategoryController::class, 'store'])->name('sub_category_store');
Route::get('sub_categories/edit/{id}', [SubCategoryController::class, 'edit'])->name('sub_category_edit');
Route::post('sub_categories/update/{id}', [SubCategoryController::class, 'update'])->name('sub_category_update');
Route::get('sub_categories/fetchDropDownSubCategory/{category_id}', [SubCategoryController::class, 'fetchDropDownSubCategory'])->name('sub_category_fetchDropDownSubCategory');

Route::get('products', [ProductController::class, 'index'])->name('product_list');
Route::get('products/create', [ProductController::class, 'create'])->name('product_create');
Route::post('products/store', [ProductController::class, 'store'])->name('product_store');
Route::get('products/edit/{product}', [ProductController::class, 'edit'])->name('product_edit');
Route::post('products/update/{id}', [ProductController::class, 'update'])->name('product_update');
