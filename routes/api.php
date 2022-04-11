<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/footballers', [\App\Http\Controllers\FootballerController::class, 'index'])->name('show.footballers');
Route::get('/footballers/{id}', [\App\Http\Controllers\FootballerController::class, 'show'])->name('show.footballer');
