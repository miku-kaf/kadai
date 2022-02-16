<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenerateSheetController;
use App\Http\Controllers\CubeController;
use App\Http\Controllers\area_circleController;
use App\Http\Controllers\DateBaseController;

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

Route::middleware(['middleware' => 'api'])->group(function () {
    Route::get('/squared', [GenerateSheetController::class, 'index']);
    Route::get('/cube', [CubeController::class, 'index']);
    Route::get('/area_circle', [area_circleController::class, 'index']);
    Route::get('/data', [DateBaseController::class, 'index']);
});