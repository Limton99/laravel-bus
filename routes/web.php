<?php

use App\Http\Controllers\CruiseController;
use App\Http\Controllers\PassengerController;
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

Route::get('/', [CruiseController::class, 'cruise'])->name('cruises');
Route::get('/cruise/{id}', [CruiseController::class, 'cruiseOne'])->name('cruise-one');
Route::get('/delete/{id}', [PassengerController::class, 'delete'])->name('delete-passenger');


