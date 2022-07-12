<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')
    ->name('home');

Auth::routes();
// Route::delete('/logout', [HomController::class, 'logout']);
Route::get('/event', 'App\Http\Controllers\EventController@index')
->name('event');

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')
    ->name('dashboard');
    Route::get('/profile', 'App\Http\Controllers\ProfileController@index')
    ->name('profile');
    Route::get('/addevent', 'App\Http\Controllers\AddEventController@index')
    ->name('addevent');
    Route::get('/user-form', 'App\Http\Controllers\UserFormController@index')
    ->name('user-form');
    Route::get('/user-form-edit', 'App\Http\Controllers\UserFormEditController@index')
    ->name('user-form-edit');

    Route::get('/dashboard-admin', 'App\Http\Controllers\DashboardAdminController@index')
    ->name('dashboard-admin');
    Route::get('/database-user', 'App\Http\Controllers\DbUser@index')
    ->name('database-user');
    Route::get('/database-event', 'App\Http\Controllers\DbEvent@index')
    ->name('database-event');
   