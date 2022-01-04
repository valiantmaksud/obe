<?php

use App\Http\Controllers\CurrentEnrollSemisterController;
use App\Http\Controllers\CurrentMarkEntrySemisterController;
use App\Http\Controllers\PoController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SemisterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});


/*
|---------------------------------------------------------------------------
|Login, Logout Helper Route
|---------------------------------------------------------------------------
 */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::resource('programs',                     ProgramController::class);
    Route::resource('users',                        UserController::class);
    Route::resource('semisters',                    SemisterController::class);
    Route::resource('pos',                          PoController::class);
    Route::resource('students',                     StudentController::class);
    Route::resource('current_enroll_semister',      CurrentEnrollSemisterController::class)->names('current_semister');
    Route::resource('current_mark_entry_semister',  CurrentMarkEntrySemisterController::class);
});
