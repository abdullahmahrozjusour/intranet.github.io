<?php

use App\Http\Controllers\Admin\OrganizationController;
use Illuminate\Support\Facades\Route;

Route::resource('organization', OrganizationController::class);
