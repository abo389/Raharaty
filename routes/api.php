<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TripController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("trips", [TripController::class, "index"]);
Route::get("services", [ServiceController::class, "index"]);
Route::get("plans", [PlanController::class, "index"]);
Route::get("testimonials", [TestimonialController::class, "index"]);
Route::post("contact", [ContactController::class, "store"]);