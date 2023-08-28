<?php

use App\Http\Controllers\Customer\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>'auth:web'],function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home.customer');
    Route::get('/tickets',[HomeController::class, 'tickets']);
    Route::get('/create-ticket',[HomeController::class, 'createTicket']);
    Route::post('/create-ticket',[HomeController::class, 'storeTicket']);
    Route::get('/profile',[HomeController::class, 'profile']);
    Route::post('/profile',[HomeController::class, 'profileStore']);

    Route::get('/ticket-{id}',[HomeController::class,'ticketMessage']);
    Route::post('/ticket-replay',[HomeController::class,'storeReplay']);
    Route::get('/close-ticket-{id}',[HomeController::class,'closeTicket']);
});

