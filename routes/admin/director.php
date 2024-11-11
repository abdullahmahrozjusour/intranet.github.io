<?php

use App\Http\Controllers\Admin\DirectorController;
use Illuminate\Support\Facades\Route;

Route::resource('director', DirectorController::class);
Route::put('director/{id}/updateData', [DirectorController::class, 'updateData'])->name('director.updateData');
