<?php

use App\Http\Controllers\Customer\LoginController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view('/', 'welcome');
Route::view('/about', 'welcome');
Route::view('/#services', 'welcome');
Route::view('/project', 'welcome');
Route::view('/blog', 'welcome');
Route::view('/contact', 'welcome');
Route::view('/login', 'welcome');
Route::view('/partners', 'welcome');
Route::view('/privacy', 'welcome');
Route::view('/videos', 'welcome');

Route::post('/login',[LoginController::class,'login']);