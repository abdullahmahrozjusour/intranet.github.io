<?php

use App\Http\Controllers\Admin\CeoMessageController;
use Illuminate\Support\Facades\Route;

Route::resource('ceoMessage', CeoMessageController::class);
