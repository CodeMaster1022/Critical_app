<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\AuthController;


Route::controller(AuthController::class)->group(function(){
    Route::post('register','register');
    Route::post('login','login');
    Route::get('usetdetail','userDetails')->middleware('auth:api');
    Route::post('forgotpassword','forgotpassword');
    Route::post('changepassword','changepassword');
});
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
