<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/result-addition/{val1}/{val2}',[LabController::class,'addition']);
Route::get('/result-subtraction/{val1}/{val2}',[LabController::class,'subtraction']);
Route::get('/result-multiplication/{val1}/{val2}',[LabController::class,'multiplication']);
Route::get('/result-division/{val1}/{val2}',[LabController::class,'division']);