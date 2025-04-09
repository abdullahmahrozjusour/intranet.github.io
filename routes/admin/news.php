<?php

use App\Http\Controllers\Admin\NewsController;
use Illuminate\Support\Facades\Route;

Route::resource('news', NewsController::class);
Route::get('news/{id}/audit',[NewsController::class,'audit'])->name('news.audit');
