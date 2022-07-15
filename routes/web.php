<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AllEventController;
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

// Login Routes 
Auth::routes();

// Home Routes
Route::get('/', [HomeController::class, 'index'])
->name('home');

// Event Routes
Route::resource('event', EventController::class)->middleware(['auth']);

// User Routes
// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
->name('dashboard')
->middleware(['auth']);

// Profile
Route::get('/profile', 'App\Http\Controllers\ProfileController@index')
    ->name('profile')
    ->middleware(['auth']);

// Route::get('/all-event', 'App\Http\Controllers\AllEventController@index')
//     ->name('all-event')
//     ->middleware(['auth']);

// Route::get('/add-event', 'App\Http\Controllers\AllEventController@add')
//     ->name('add-event')
//     ->middleware(['auth']);

// Admin Routes   
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