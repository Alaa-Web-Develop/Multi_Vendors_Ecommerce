<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard\CategoriesController;

// Route::get('/dashboard',[DashboardController::class,'index'])
// // ->middleware(['auth','verified'])
// ->middleware(['auth'])
// ->name('dashboard');

// Route::resource('dashboard/categories',CategoriesController::class)
// ->middleware('auth');

Route::group([
    'middleware'=>'auth',
    'as'=>'dashboard.',
    'prefix'=>'dashboard',
    //'namespace' => 'App\Http\Controllers',

],function(){
    // Route::get('/',DashboardController@index)
    Route::get('/',[DashboardController::class,'index']);
    Route::resource('/categories',CategoriesController::class);
});
 