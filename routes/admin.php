<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\FlavorController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SaleController;
use App\Http\Controllers\Admin\StockController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', [HomeController::class, 'index'])->name('admin.home');
Route::resource('types', TypeController::class)->except('show')->names('admin.types');
Route::resource('flavors', FlavorController::class)->except('show')->names('admin.flavors');
Route::resource('products', ProductController::class)->except('show')->names('admin.products');
Route::resource('expenses', ExpenseController::class)->except('show')->names('admin.expenses');

Route::resource('sales', SaleController::class)->except('show')->names('admin.sales');

Route::resource('stocks', StockController::class)->names('admin.stocks');
Route::resource('users', UserController::class)->names('admin.users');
Route::resource('roles', RoleController::class)->names('admin.roles');
Route::resource('permissions', PermissionController::class)->names('admin.permissions');