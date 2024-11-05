<?php

use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'index'])->name('');
Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/organization', [WebController::class, 'organization'])->name('organization');
Route::get('/ourMission', [WebController::class, 'ourMission'])->name('ourMission');
Route::get('/boardOfDirector', [WebController::class, 'boardOfDirector'])->name('boardOfDirector');
Route::get('/usefulContacts', [WebController::class, 'usefulContacts'])->name('usefulContacts');
Route::get('/downloadCenter', [WebController::class, 'downloadCenter'])->name('downloadCenter');
