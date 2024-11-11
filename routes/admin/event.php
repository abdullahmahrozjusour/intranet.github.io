<?php

use App\Http\Controllers\Admin\EventController;
use Illuminate\Support\Facades\Route;

Route::resource('event', EventController::class);
