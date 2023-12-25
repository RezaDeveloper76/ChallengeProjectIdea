<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Api version 1
Route::prefix('v1')->group(function () {
    
    //  User Registration Route:
    Route::post('/register', 'App\Http\Controllers\AuthController@register')->name('register');
    
    //  User Login Route:
    Route::post('/login', 'App\Http\Controllers\AuthController@login')->name('login');

    //  Authenticated Routes:
    Route::middleware('auth:api')->group(function () {
        
        //  User Logout Route:
        Route::post('/logout', 'App\Http\Controllers\AuthController@logout');

        //  Get Token Route:
        Route::post('/get-token', 'App\Http\Controllers\AuthController@getToken')->name('get-token');

        //  Get New Token Route:
        Route::post('/get-new-token', 'App\Http\Controllers\AuthController@getNewToken');
    });

});

// Fallback Route:
Route::fallback(function () {
    return response(['message' => 'Not Found'], 404);
});