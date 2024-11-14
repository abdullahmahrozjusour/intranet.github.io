<?php

use App\Http\Controllers\Admin\OrganizationController;
use Illuminate\Support\Facades\Route;

Route::resource('organization', OrganizationController::class);
Route::get('organization/{id}/audit',[OrganizationController::class,'audit'])->name('organization.audit');
