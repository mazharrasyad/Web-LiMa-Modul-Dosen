<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'revalidate'], function()
{
    Auth::routes();
    // Route::get('/home', 'HomeController@index')->name('home');
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', function () { return view('index'); })->name('dashboard');
        Route::resource('user', 'UserController');
        Route::resource('team', 'TeamController');
        Route::resource('project', 'ProjectController');
    });
});