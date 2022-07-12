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

Route::get('/event', 'App\Http\Controllers\EventController@index')
->name('event');

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')
<<<<<<< HEAD
    ->name('dashboard');
    Route::get('/profile', 'App\Http\Controllers\ProfileController@index')
    ->name('profile');
    Route::get('/addevent', 'App\Http\Controllers\AddEventController@index')
    ->name('addevent');
    Route::get('/user-form', 'App\Http\Controllers\UserFormController@index')
    ->name('user-form');
    Route::get('/user-form-edit', 'App\Http\Controllers\UserFormEditController@index')
    ->name('user-form-edit');
    
    //gakepanggil
    Route::get('/detail-content', 'App\Http\Controllers\DetailContentController@index')
    ->name('detail-content');
=======
    ->name('dashboard')
    ->middleware(['auth']);
>>>>>>> a378b5ab6941a78af85048a96e5685e2c278a0f0

Route::get('/profile', 'App\Http\Controllers\ProfileController@index')
    ->name('profile')
    ->middleware(['auth']);

Route::get('/all-event', 'App\Http\Controllers\AllEventController@index')
    ->name('all-event')
    ->middleware(['auth']);

Route::get('/add-event', 'App\Http\Controllers\AllEventController@add')
    ->name('add-event');
   
Route::get('/dashboard-admin', 'App\Http\Controllers\DashboardAdminController@index')
    ->name('dashboard-admin');

Route::get('/database-user', 'App\Http\Controllers\DbUser@index')
    ->name('database-user');
    
Route::get('/database-event', 'App\Http\Controllers\DbEvent@index')
    ->name('database-event');
    
