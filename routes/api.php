<?php

use App\Http\Controllers\Api\GetController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware'=>['api.password','lang']],function(){
    Route::post('/contact',[PostController::class,'contact']);
    Route::post('/package',[PostController::class,'package']);

    Route::get('/get-vedios',[GetController::class,'vedios']);
    Route::get('/get-partenar',[GetController::class,'partenar']);
    Route::get('/get-posts',[GetController::class,'posts']);
    Route::get('/get-post-{id}',[GetController::class,'getPost']);
    Route::get('/get-contact-side',[GetController::class,'contactSide']);
    Route::get('/get-privacy',[GetController::class,'privacy']);
    Route::get('/get-master-images',[GetController::class,'masterImages']);
    Route::get('/get-header-footer',[GetController::class,'headerFooter']);
    Route::get('/get-level-page',[GetController::class,'levelPage']);
    Route::get('/get-about',[GetController::class,'about']);
    Route::get('/get-home',[GetController::class,'home']);
});
