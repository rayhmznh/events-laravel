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

// Admin Routes   
Route::get('/dashboard-admin', 'App\Http\Controllers\DashboardAdminController@index')
    ->name('dashboard-admin')
    ->middleware(['auth', 'admin']);

Route::get('/database-user', 'App\Http\Controllers\DbUser@index')
    ->name('database-user')
    ->middleware(['auth', 'admin']);
    
Route::get('/database-event', 'App\Http\Controllers\DbEvent@index')
    ->name('database-event')
    ->middleware(['auth', 'admin']);