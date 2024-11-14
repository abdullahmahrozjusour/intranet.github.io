<?php

use App\Http\Controllers\Admin\MissionVisionController;
use Illuminate\Support\Facades\Route;

Route::resource('missionVision', MissionVisionController::class);
Route::put('missionVision/{id}/updateData', [MissionVisionController::class, 'updateData'])->name('missionVision.updateData');
Route::get('missionVision/{id}/audit',[MissionVisionController::class,'audit'])->name('missionVision.audit');
Route::get('missionVision/{id}/main/audit',[MissionVisionController::class,'auditMain'])->name('missionVision.main.audit');
