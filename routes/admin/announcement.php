<?php

use App\Http\Controllers\Admin\AnnouncementController;
use Illuminate\Support\Facades\Route;

Route::resource('announcement', AnnouncementController::class);
Route::get('announcement/{id}/audit',[AnnouncementController::class,'audit'])->name('announcement.audit');
