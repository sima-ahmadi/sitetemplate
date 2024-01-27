<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


/* App */
Route::get('/', [AppController::class, 'index']);
Route::get('/event/{event}', [AppController::class, 'showEvent']);
Route::get('/sans/{sans}/buy', [AppController::class, 'buyTicket']);
Route::get('/sans/{sans}/submit-buy/chair/{chair}/name/{name}', [AppController::class, 'submitBuyTicket']);

Route::get('/about-us', [AppController::class, 'aboutUs']);
Route::get('/contact', [AppController::class, 'contact']);
Route::get('/news-single', [AppController::class, 'newsSingle']);
Route::get('/schedule', [AppController::class, 'schedule']);
Route::get('/sponsors', [AppController::class, 'sponsors']);
Route::get('/bio', [AppController::class, 'bio']);


/* Auth */
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware(['guest']);
Route::post('/login', [AuthController::class, 'loginController'])->middleware(['guest']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware(['auth']);


/* Admin */
Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth']);
Route::get('/admin/events', [AdminController::class, 'events'])->middleware(['auth']);
Route::get('/admin/event/create', [AdminController::class, 'createEvent'])->middleware(['auth']);
Route::post('/admin/event/create', [AdminController::class, 'saveEvent'])->middleware(['auth']);
Route::get('/admin/tickets', [AdminController::class, 'tickets'])->middleware(['auth']);
Route::get('/admin/ticket/{ticket}/cancel', [AdminController::class, 'cancelTicket'])->middleware(['auth']);
