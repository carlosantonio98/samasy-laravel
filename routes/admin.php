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
Route::get('types/{type}/delete', [TypeController::class, 'delete'])->name('admin.types.delete');

Route::resource('flavors', FlavorController::class)->except('show')->names('admin.flavors');
Route::get('flavors/{flavor}/delete', [FlavorController::class, 'delete'])->name('admin.flavors.delete');

Route::resource('products', ProductController::class)->except('show')->names('admin.products');
Route::get('products/{product}/delete', [ProductController::class, 'delete'])->name('admin.products.delete');

Route::resource('expenses', ExpenseController::class)->except('show')->names('admin.expenses');
Route::get('expenses/{expense}/delete', [ExpenseController::class, 'delete'])->name('admin.expenses.delete');

Route::resource('sales', SaleController::class)->except('show')->names('admin.sales');
Route::get('sales/{sale}/delete', [SaleController::class, 'delete'])->name('admin.sales.delete');

Route::resource('stocks', StockController::class)->names('admin.stocks');
Route::get('stocks/{stock}/delete', [StockController::class, 'delete'])->name('admin.stocks.delete');

Route::resource('users', UserController::class)->names('admin.users');
Route::get('users/{user}/delete', [UserController::class, 'delete'])->name('admin.users.delete');

Route::resource('roles', RoleController::class)->names('admin.roles');
Route::get('roles/{role}/delete', [RoleController::class, 'delete'])->name('admin.roles.delete');

Route::resource('permissions', PermissionController::class)->names('admin.permissions');
Route::get('permissions/{permission}/delete', [PermissionController::class, 'delete'])->name('admin.permissions.delete');