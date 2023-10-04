<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\HomeController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');

// Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');

// Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::namespace('api')->group(function () {
    Route::post('/register', 'LoginController')->name('register');
    Route::post('/login', 'LoginController')->name('login');
    Route::post('/logout', 'LogoutController')->name('logout');
});