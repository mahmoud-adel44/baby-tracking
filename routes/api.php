<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BabiesController;
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

Route::middleware('auth:sanctum')
    ->group(function () {
        Route::post('add', [BabiesController::class, 'store']);
        Route::post('assignPartners', [BabiesController::class, 'assignPartners']);
        Route::put('assignBabySetter/{baby}', [BabiesController::class, 'assignBabySetter']);
        Route::get('show/{baby}', [BabiesController::class, 'show']);
    });

Route::post('/login', LoginController::class);


