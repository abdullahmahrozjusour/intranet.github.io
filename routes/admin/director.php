<?php

use App\Http\Controllers\Admin\DirectorController;
use Illuminate\Support\Facades\Route;

Route::resource('director', DirectorController::class);
Route::put('director/{id}/updateData', [DirectorController::class, 'updateData'])->name('director.updateData');
Route::get('director/{id}/audit',[DirectorController::class,'audit'])->name('director.audit');
Route::get('director/{id}/main/audit',[DirectorController::class,'auditMain'])->name('director.main.audit');
