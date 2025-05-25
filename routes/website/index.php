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
Route::post('/contact/store', [WebController::class, 'contact'])->name('contact.store');
Route::get('/{type}/policy', [WebController::class, 'policy'])->name('policy');
Route::get('/{type}/procedure', [WebController::class, 'procedure'])->name('procedure');
Route::get('/request/{slug}', [WebController::class, 'requestForm'])->name('request');
Route::post('/request/{slug}/submit', [WebController::class, 'requestFormSubmit'])->name('request.submit');
