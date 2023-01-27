<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|Di sinilah Anda dapat mendaftarkan rute API untuk aplikasi Anda. Rute ini dimuat oleh RouteServiceProvider dalam grup yang diberi grup middleware "api". Selamat membangun API Anda!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('minuman','MinumanController@index');
Route::get('makanan','MakananController@index');
