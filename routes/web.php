<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FrontController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// Route::get('/FoodCayote/Login',[LoginController::class,'login']);

Route::controller(LoginController::class)->group(function () {
    Route::get('/FoodCayote/Login','login');
    Route::get('/FoodCayote/Registration','registration');
 });
 

Route::controller(FrontController::class)->group(function(){
    Route::get('/FoodCayote/admin', 'admindashboard');
});