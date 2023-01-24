<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\FlavorController;

Route::resource('types', TypeController::class)->names('admin.types');
Route::resource('flavors', FlavorController::class)->names('admin.flavors');