<?php

use App\Http\Controllers\Admin\LinkController;
use Illuminate\Support\Facades\Route;

Route::resource('link', LinkController::class);