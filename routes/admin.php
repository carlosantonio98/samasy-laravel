<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TypeController;

Route::resource('types', TypeController::class)->names('admin.types');