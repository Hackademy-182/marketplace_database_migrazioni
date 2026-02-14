<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarController;
use App\Http\Controllers\MotorbikeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/car/Inserisci Auto", [CarController::class, "carForm"])->name("car-form");
Route::get("/car/create", [CarController::class, "cardView"])->name("cardCar");
Route::post("/car/submit", [CarController::class, "carSubmit"])->name("car-submit");

Route::get("motorbike/create",[MotorbikeController::class, "cardView"])->name("motoCard");
Route::get("/motorbike/Inserisci Moto",[MotorbikeController::class, "motoForm"])->name("moto-form");
Route::post("/motorbike/submit", [MotorbikeController::class, "motoSubmit"])->name("moto-submit");
