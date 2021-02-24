<?php

use App\Http\Controllers\Admin\UserController;
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
    return view('index');
})->middleware('auth')->name('home');

Route::put('/week1/{user}', [App\Http\Controllers\Week1Controller::class, 'week1'])->name('week1');
Route::put('/week2/{user}', [App\Http\Controllers\Week2Controller::class, 'week2'])->name('week2');
Route::put('/week3/{user}', [App\Http\Controllers\Week3Controller::class, 'week3'])->name('week3');
Route::put('/week4/{user}', [App\Http\Controllers\Week4Controller::class, 'week4'])->name('week4');
Route::put('/week5/{user}', [App\Http\Controllers\Week5Controller::class, 'week5'])->name('week5');
Route::put('/week6/{user}', [App\Http\Controllers\Week6Controller::class, 'week6'])->name('week6');
Route::put('/week7/{user}', [App\Http\Controllers\Week7Controller::class, 'week7'])->name('week7');
Route::put('/final/{user}', [App\Http\Controllers\FinalController::class, 'final'])->name('final');

// Admin Routes
Route::prefix('admin')->middleware(['auth', 'auth.isAdmin'])->name('admin.')->group(function (){
    Route::resource('/users', App\Http\Controllers\Admin\UserController::class);
});


