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
Route::get('/asd/{id}', [CruiseController::class, 'cruiseOne'])->name('cruise-one');
Route::get('/delete/{id}', [PassengerController::class, 'delete'])->name('delete-passenger');
Route::get('/search', [CruiseController::class, 'search'])->name('search');
Route::get('/make-order/{id}', [PassengerController::class, 'saveRoute'])->name('make-order');
Route::post('/make-order-check', [PassengerController::class, 'save'])->name('make-order-check');
Route::get('/update/{id}', [PassengerController::class, 'update'])->name('update-passenger');
Route::post('/update-check/{id}', [PassengerController::class, 'updateCheck'])->name('update-passenger-check');
//Route::get('/searched', [CruiseController::class, 'search'])->name('searched-cruise');


