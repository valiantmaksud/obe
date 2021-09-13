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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('test','master');

Route::group(['namespace'   => 'App\Http\Controllers\Backend', 'prefix' => 'admin'],function(){

    Route::resource('subjects',      'SubjectController');
    Route::resource('outcomes',      'OutcomeController');
    Route::resource('results',       'ResultController');

});