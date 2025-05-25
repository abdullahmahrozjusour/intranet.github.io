<?php

use App\Http\Controllers\Web\WebController;
use App\Http\Controllers\Web\NewsletterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Subscriber;



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
Route::get('/form', function () {
    return view('pages/form');
})->name('form');

Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

Route::get('/unsubscribe', function (Request $request) {
    $email = $request->query('email');
    Subscriber::where('email', $email)->delete();
    return 'You have been unsubscribed.';

})->name('unsubscribe');

