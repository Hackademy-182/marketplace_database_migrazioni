<?php

use App\Http\Controllers\CarController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/car/Inserisci Auto", [CarController::class, "carForm"])->name("car-form");
Route::post("/car/submit", [CarController::class, "carSubmit"])->name("car-submit");