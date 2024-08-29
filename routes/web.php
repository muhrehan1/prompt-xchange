<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\backend\BackendController;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {return view('home');});
Route::get('/', [FrontController::class, 'home'])->name('prompt.home');
Route::get('/about-us',[FrontController::class,'about'])->name('prompt.about');
Route::get('/contact-us',[FrontController::class,'contactus'])->name('prompt.contact');
Route::get('/pricing',[FrontController::class,'pricing'])->name('prompt.pricing');
Route::get('/blogs',[FrontController::class,'blogs'])->name('prompt.blogs');;
Route::get('/blog-details',[FrontController::class,'blogs_details'])->name('prompt.blogs_details');;



Route::get('/discover',[FrontController::class,'discover'])->name('prompt.explore');
Route::get('/hire',[FrontController::class,'hire'])->name('prompt.hire');
Route::get('/profile',[FrontController::class,'profile'])->name('prompt.profile');


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard',[BackendController::class,'dashboard'])->name('dashboard');
    Route::get('/create',[FrontController::class,'create'])->name('prompt.create');
    Route::get('/subcsription-create',[BackendController::class,'create_subscription'])->name('subscription.create');
    Route::get('/subcsription-lists',[BackendController::class,'list_subscription'])->name('subscription.lists');
    Route::get('/get-subs', [BackendController::class, 'get_subs'])->name('subscriptions.index');
    Route::post('/prices', [BackendController::class, 'store_subscription'])->name('prices.store');
    Route::put('/prices/{id}', [BackendController::class, 'update_subscription'])->name('prices.update');
    Route::delete('/prices/{id}', [BackendController::class, 'destroy_subcscription'])->name('prices.destroy');
});

Route::middleware(['auth', 'role:general_user'])->group(function () {
    Route::get('/dashboard',[BackendController::class,'dashboard'])->name('dashboard');
    Route::get('/create',[FrontController::class,'create'])->name('prompt.create');;
});

Route::middleware(['auth', 'role:content_creator'])->group(function () {
    Route::get('/dashboard',[BackendController::class,'dashboard'])->name('dashboard');
    Route::get('/create',[FrontController::class,'create'])->name('prompt.create');;
    Route::post('/test-api',[BackendController::class,'testApi'])->name('generate.image');
});

Route::post('/logout',[\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
Auth::routes();


