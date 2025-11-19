<?php

use App\Http\Controllers\Backend\AuthenticateController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Middleware\BackendMiddleware;
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

Route::get('categories', [CategoryController::class, 'index'])->name('category_list')->middleware([BackendMiddleware::class]);
Route::get('categories/create', [CategoryController::class, 'create'])->name('category_create')->middleware([BackendMiddleware::class]);
Route::post('categories/store', [CategoryController::class, 'store'])->name('category_store')->middleware([BackendMiddleware::class]);
Route::get('categories/remove/{id}', [CategoryController::class,'delete'])->name('category_delete')->middleware([BackendMiddleware::class]);
Route::get('categories/edit/{id}', [CategoryController::class, 'edit'])->name('category_edit')->middleware([BackendMiddleware::class]);
Route::post('categories/update/{id}', [CategoryController::class, 'update'])->name('category_update')->middleware([BackendMiddleware::class]);

Route::get('sub_categories', [SubCategoryController::class, 'index'])->name('sub_category_list')->middleware([BackendMiddleware::class]);
Route::get('sub_categories/create', [SubCategoryController::class, 'create'])->name('sub_category_create')->middleware([BackendMiddleware::class]);
Route::post('sub_categories/store', [SubCategoryController::class, 'store'])->name('sub_category_store')->middleware([BackendMiddleware::class]);
Route::get('sub_categories/edit/{id}', [SubCategoryController::class, 'edit'])->name('sub_category_edit')->middleware([BackendMiddleware::class]);
Route::post('sub_categories/update/{id}', [SubCategoryController::class, 'update'])->name('sub_category_update')->middleware([BackendMiddleware::class]);
Route::get('sub_categories/fetchDropDownSubCategory/{category_id}', [SubCategoryController::class, 'fetchDropDownSubCategory'])->name('sub_category_fetchDropDownSubCategory')->middleware([BackendMiddleware::class]);

Route::get('products', [ProductController::class, 'index'])->name('product_list')->middleware([BackendMiddleware::class]);
Route::get('products/create', [ProductController::class, 'create'])->name('product_create')->middleware([BackendMiddleware::class]);
Route::post('products/store', [ProductController::class, 'store'])->name('product_store')->middleware([BackendMiddleware::class]);
Route::get('products/edit/{product}', [ProductController::class, 'edit'])->name('product_edit')->middleware([BackendMiddleware::class]);
Route::post('products/update/{id}', [ProductController::class, 'update'])->name('product_update')->middleware([BackendMiddleware::class]);

Route::get('login', [AuthenticateController::class, 'singIn'])->name('login');
Route::post('authenticate', [AuthenticateController::class, 'authetnicateCheck'])->name('authenticate');

Route::get('register', [AuthenticateController::class, 'register'])->name('register');
Route::post('register', [AuthenticateController::class, 'storeUser'])->name('register_store_user');

Route::get('logout', [AuthenticateController::class, 'logout'])->name('logout');

