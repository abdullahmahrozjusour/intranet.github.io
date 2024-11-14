<?php

use App\Http\Controllers\Admin\DownloadCenterController;
use Illuminate\Support\Facades\Route;

Route::resource('downloadCenter', DownloadCenterController::class);
Route::get('downloadCenter/{id}/audit',[DownloadCenterController::class,'audit'])->name('downloadCenter.audit');
