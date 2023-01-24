<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\FlavorController;
use App\Http\Controllers\Admin\ProductController;

Route::resource('types', TypeController::class)->names('admin.types');
Route::resource('flavors', FlavorController::class)->names('admin.flavors');
Route::resource('products', ProductController::class)->names('admin.products');