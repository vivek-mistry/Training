<?php

use App\Http\Controllers\Backend\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('categories', [CategoryController::class, 'index'])->name('category_list');
