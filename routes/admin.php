<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\FlavorController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SaleController;

Route::get('/', [HomeController::class, 'index'])->name('admin.home');
Route::resource('types', TypeController::class)->except('show')->names('admin.types');
Route::resource('flavors', FlavorController::class)->except('show')->names('admin.flavors');
Route::resource('products', ProductController::class)->except('show')->names('admin.products');
Route::resource('sales', SaleController::class)->except('show')->names('admin.sales');
Route::get('sales/register-by-qr', [SaleController::class, 'registerByQr'])->name('admin.sales.registerByQr');