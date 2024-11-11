<?php

use App\Http\Controllers\Admin\UsefulContactController;
use Illuminate\Support\Facades\Route;

Route::resource('usefulContact', UsefulContactController::class);
