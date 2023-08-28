<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CardController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DistingController;
use App\Http\Controllers\Admin\HeaderPhotoController;
use App\Http\Controllers\Admin\LevelController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\PartenarController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\PrivacyController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\VedioController;
use App\Http\Controllers\HomeController;
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

Route::get('/login-admin',[LoginController::class, 'login']);
Route::post('/login-admin',[LoginController::class, 'loginStore']);
Route::get('/logout', [HomeController::class, 'logOut']);
Route::group(['middleware'=>'auth:admin'],function(){
    
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/admins',[AdminController::class,'index'])->name('admin.admins');
    Route::get('/admin-delete-{id}',[AdminController::class,'delete'])->name('admin.admin.delete');
    Route::get('/admin-create',[AdminController::class,'create'])->name('admin.create.admin');
    Route::post('/admin-create',[AdminController::class,'store'])->name('admin.create.admin.store');

    Route::get('/setting',[SettingController::class,'index']);
    Route::post('/setting',[SettingController::class,'store']);

    Route::get('/sliders',[SliderController::class,'index']);
    Route::get('/slider-delete-{id}',[SliderController::class,'delete']);
    Route::get('/slider-create',[SliderController::class,'create']);
    Route::post('/slider-create',[SliderController::class,'store']);

    Route::get('/header-photos',[HeaderPhotoController::class,'index']);
    Route::get('/header-photo-edite-{id}',[HeaderPhotoController::class,'edite']);
    Route::post('/header-photo-edite',[HeaderPhotoController::class,'store']);

    Route::get('/privacy',[PrivacyController::class,'index']);
    Route::post('/privacy',[PrivacyController::class,'store']);

    Route::get('/partenars',[PartenarController::class,'index']);
    Route::get('/partenar-delete-{id}',[PartenarController::class,'delete']);
    Route::get('/partenar-create',[PartenarController::class,'create']);
    Route::post('/partenar-create',[PartenarController::class,'store']);
    Route::get('/partenar-edite-{id}',[PartenarController::class,'edite']);
    Route::post('/partenar-edite',[PartenarController::class,'update']);

    Route::get('/vedios',[VedioController::class,'index']);
    Route::get('/vedio-delete-{id}',[VedioController::class,'delete']);
    Route::get('/vedio-create',[VedioController::class,'create']);
    Route::post('/vedio-create',[VedioController::class,'store']);
    Route::get('/vedio-edite-{id}',[VedioController::class,'edite']);
    Route::post('/vedio-edite',[VedioController::class,'update']);

    Route::get('/contacts',[ContactController::class,'index']);

    Route::get('/contact-side',[ContactController::class,'indexSide']);
    Route::get('/contact-side-delete-{id}',[ContactController::class,'delete']);
    Route::get('/contact-side-create',[ContactController::class,'create']);
    Route::post('/contact-side-create',[ContactController::class,'store']);

    Route::get('/posts',[PostController::class,'index']);
    Route::get('/post-delete-{id}',[PostController::class,'delete']);
    Route::get('/post-create',[PostController::class,'create']);
    Route::post('/post-create',[PostController::class,'store']);
    Route::get('/post-edite-{id}',[PostController::class,'edite']);
    Route::post('/post-edite',[PostController::class,'update']);
    Route::get('/post-slider-{id}',[PostController::class,'indexSlider']);
    Route::get('/post-slide-delete-{id}',[PostController::class,'deleteSlide']);
    Route::get('/post-create-slide-{id}',[PostController::class,'createSlide']);
    Route::post('/post-create-slide',[PostController::class,'storeSlide']);

    Route::get('/about',[AboutController::class,'index']);
    Route::post('/about',[AboutController::class,'store']);

    Route::get('/level',[LevelController::class,'index']);
    Route::post('/level',[LevelController::class,'store']);

    Route::get('/services',[ServiceController::class,'index']);
    Route::get('/service-delete-{id}',[ServiceController::class,'delete']);
    Route::get('/service-create',[ServiceController::class,'create']);
    Route::post('/service-create',[ServiceController::class,'store']);
    Route::get('/service-edite-{id}',[ServiceController::class,'edite']);
    Route::post('/service-edite',[ServiceController::class,'update']);

    Route::get('/cards',[CardController::class,'index']);
    Route::get('/card-delete-{id}',[CardController::class,'delete']);
    Route::get('/card-create',[CardController::class,'create']);
    Route::post('/card-create',[CardController::class,'store']);
    Route::get('/card-edite-{id}',[CardController::class,'edite']);
    Route::post('/card-edite',[CardController::class,'update']);

    Route::get('/distings',[DistingController::class,'index']);
    Route::get('/disting-delete-{id}',[DistingController::class,'delete']);
    Route::get('/disting-create',[DistingController::class,'create']);
    Route::post('/disting-create',[DistingController::class,'store']);
    Route::get('/disting-edite-{id}',[DistingController::class,'edite']);
    Route::post('/disting-edite',[DistingController::class,'update']);

    Route::get('/packages',[PackageController::class,'index']);
    Route::get('/package-delete-{id}',[PackageController::class,'delete']);
    Route::get('/package-create',[PackageController::class,'create']);
    Route::post('/package-create',[PackageController::class,'store']);
    Route::get('/package-edite-{id}',[PackageController::class,'edite']);
    Route::post('/package-edite',[PackageController::class,'update']);
    Route::get('/package-show-{id}',[PackageController::class,'getData']);

    Route::get('/customers',[CustomerController::class,'index']);
    Route::get('/customer-delete-{id}',[CustomerController::class,'delete']);
    Route::get('/customer-create',[CustomerController::class,'create']);
    Route::post('/customer-create',[CustomerController::class,'store']);
    Route::get('/customer-show-{id}',[CustomerController::class,'getData']);
    Route::get('/customer-sites-{id}',[CustomerController::class,'sites']);
    Route::get('/customer-site-delete-{id}',[CustomerController::class,'deleteSiteNow']);
    Route::get('/customer-create-site-{id}',[CustomerController::class,'createSite']);
    Route::post('/customer-create-site',[CustomerController::class,'storeSite']);

    Route::get('/tickets',[TicketController::class,'tickets']);
    Route::get('/ticket-{id}',[TicketController::class,'ticketMessage']);
    Route::post('/ticket-replay',[TicketController::class,'storeReplay']);
});

