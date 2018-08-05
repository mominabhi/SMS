<?php

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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

Schema::defaultStringLength(191);

Route::get('/','viewController@loadMain');
Route::get('/','viewController@loadDashboard');
Route::get('/add_sec','viewController@loadSection');



Route::post('/new_sec','formController@newSection');
Route::post('/update_sec','formController@updateSection');

Route::get('/delete/{id}','formController@deleteSection');
Route::get('/edit/{id}','formController@editSection');
