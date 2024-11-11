<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

include('website/index.php');

Route::group(['as' => 'admin.', 'prefix' => 'admin'], function () {
    include('admin/auth.php');

    Route::get('/',function(){
        return redirect('admin/dashboard');
    });

    Route::middleware('auth')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::group(['as' => 'configuration.', 'prefix' => 'configuration'], function () {
            include('admin/announcement.php');
            include('admin/link.php');
            include('admin/event.php');
            include('admin/modal.php');
            include('admin/downloadCenter.php');
            include('admin/organization.php');
        });

        Route::group(['as' => 'administration.', 'prefix' => 'administration'], function () {
            include('admin/user.php');
            include('admin/usefulContact.php');
            include('admin/contact.php');
        });

        Route::group(['as' => 'operation.', 'prefix' => 'operation'], function () {
            include('admin/missionVision.php');
            include('admin/director.php');
        });

        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    });
});
