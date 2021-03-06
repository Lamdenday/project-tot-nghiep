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
    return view('locations.index');
});

Route::get('/location',[\App\Http\Controllers\Admin\LocationController::class,'index'])->name('location.index');
Route::get('/location/create',[\App\Http\Controllers\Admin\LocationController::class,'deleted'])->name('location.deleted');



