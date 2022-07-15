<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
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

// Route::get('/detail-event/{id}', 'App\Http\Controllers\DetailContentController@index')
//     ->name('detail-event');

Route::middleware(['auth'])->group(function () {
    Route::resource('event', EventController::class); // Event Routes
    
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard'); // Dashboard User
        
    Route::get('/profile', 'App\Http\Controllers\ProfileController@index')
        ->name('profile'); // Profile User
        
    Route::get('/dashboard-admin', 'App\Http\Controllers\DashboardAdminController@index')
        ->name('dashboard-admin'); // Dashboard Admin
        
    Route::prefix('database-user') // Database User
        ->group(function(){
            Route::get('/', 'App\Http\Controllers\DbUser@index');
            Route::resource('/database-user', 'App\Http\Controllers\DbUser');
    });
    
    Route::prefix('database-event') // Database Event
    ->group(function(){
        Route::get('/', 'App\Http\Controllers\DbEvent@index');
        Route::resource('/database-event', 'App\Http\Controllers\DbEvent');
});
});

// All Events Route
Route::get('/all-event', 'App\Http\Controllers\AllEventController@index')
    ->name('all-event');
//     ->middleware(['auth']);