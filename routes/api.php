<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\UserApiController;
use App\Http\Controllers\Api\HotelApiController;
use App\Http\Controllers\Api\FlightApiController;
use App\Http\Controllers\Api\PassengerApiController;
use App\Http\Controllers\Api\ItineraryApiController;
use App\Http\Controllers\Api\TourRoomApiController;

use Illuminate\Validation\ValidationException;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->post('/logout', function (Request $request) {
    $request->user()->tokens()->delete();

    return response('loggedout',200);
});

Route::post('/login', [UserApiController::class,'login']);

Route::post('/hotel', [HotelApiController::class,'index']);

Route::post('/flight', [FlightApiController::class,'index']);

Route::post('/passenger', [PassengerApiController::class,'index']);

Route::post('/itinerary', [ItineraryApiController::class,'index']);

Route::post('/tour_room', [TourRoomApiController::class,'index']);

Route::post('/tour_room/create', [TourRoomApiController::class,'create']);

Route::post('/tour_room/delete', [TourRoomApiController::class,'destroy']);

Route::post('/tour_room/update', [TourRoomApiController::class,'update']);