<?php

use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;

Route::resource('role', RoleController::class);
Route::get('role/{id}/audit',[RoleController::class,'audit'])->name('role.audit');
