<?php

use App\Http\Controllers\Admin\ModalController;
use Illuminate\Support\Facades\Route;

Route::resource('modal', ModalController::class);
Route::get('modal/{id}/audit',[ModalController::class,'audit'])->name('modal.audit');
