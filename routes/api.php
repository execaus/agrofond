<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\api\Controllers\TelephoneController;
use \App\Http\Controllers\api\Controllers\HomeSliderItemsController;
use \App\Http\Controllers\api\Controllers\AddressController;
use \App\Http\Controllers\api\Controllers\EmailAddressController;

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

Route::apiResource('telephone', TelephoneController::class);

Route::post('telephone/get-telephone', [TelephoneController::class, 'getTelephone']);

Route::apiResource('home-slider-items', HomeSliderItemsController::class);

Route::apiResource('address', AddressController::class);

Route::apiResource('email', EmailAddressController::class);
