<?php

use App\Http\Controllers\Admin\RequestController;
use Illuminate\Support\Facades\Route;

Route::resource('request', RequestController::class);
Route::get('request/{id}/audit',[RequestController::class,'audit'])->name('request.audit');
