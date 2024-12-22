<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TripController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("trips", [TripController::class, "index"]);
Route::get("services", [ServiceController::class, "index"]);