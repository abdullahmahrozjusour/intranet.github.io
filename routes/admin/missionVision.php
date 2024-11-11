<?php

use App\Http\Controllers\Admin\MissionVisionController;
use Illuminate\Support\Facades\Route;

Route::resource('missionVision', MissionVisionController::class);
Route::put('missionVision/{id}/updateData', [MissionVisionController::class, 'updateData'])->name('missionVision.updateData');
