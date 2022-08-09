<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', 'App\Http\Controllers\HomeController@index')
    ->name('home');

Auth::routes();

Route::get('/event', 'App\Http\Controllers\EventController@index')
    ->name('event');

Route::get('/detail-event/{id}', 'App\Http\Controllers\DetailContentController@index')
    ->name('detail-event');

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')
    ->name('dashboard')
    ->middleware(['auth']);

// Route::get('/profile', 'App\Http\Controllers\ProfileController@index')
//     ->name('profile')
//     ->middleware(['auth']);

Route::resource('/profile', 'App\Http\Controllers\ProfileController')->middleware(['auth']);

Route::get('/edit-profile', 'App\Http\Controllers\ProfileController@edit')
    ->name('edit-profile')
    ->middleware(['auth']);

Route::resource('/all-event', 'App\Http\Controllers\AllEventController')->middleware(['auth']);

Route::get('/add-event', 'App\Http\Controllers\AllEventController@add')
    ->name('add-event')
    ->middleware(['auth']);

Route::get('/dashboard-admin', 'App\Http\Controllers\DashboardAdminController@index')
    ->name('dashboard-admin')
    ->middleware(['auth']);

Route::prefix('database-user')
    ->middleware(['auth'])
    ->group(function(){
        Route::get('/', 'App\Http\Controllers\DbUser@index');
        Route::resource('/database-user', 'App\Http\Controllers\DbUser');
});
    
Route::prefix('database-event')
    ->middleware(['auth'])
    ->group(function(){
        Route::get('/', 'App\Http\Controllers\DbEvent@index');
        Route::resource('/database-event', 'App\Http\Controllers\DbEvent');
});

