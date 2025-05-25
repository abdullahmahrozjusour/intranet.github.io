<?php

use App\Http\Controllers\Admin\SubscriberController;
use Illuminate\Support\Facades\Route;

Route::resource('subscriber', SubscriberController::class);
Route::get('subscriber/{id}/audit',[SubscriberController::class,'audit'])->name('subscriber.audit');
