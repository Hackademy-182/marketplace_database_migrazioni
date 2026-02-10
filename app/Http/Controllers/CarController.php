<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function carForm(){
        return view("car.create");
    }

    public function cardView(){
        $cars = Car::All();
        return view("car.carCard", compact("cars"));
    }

    public function carSubmit( Request $request){
        // dd($request);
        // dd($request->all());
        //mass assignament
        $car = Car::create(
        [ 
            "brand" => $request->input("brand"),
            "model" => $request->input("model"),
            "engine_cc" => $request->input("engine_cc"),
            "horsepower" => $request->input("horsepower"),
            "production_year" => $request->input("production_year"),
            "description" => $request->input("description"),
            "body_type" => $request->input("body_type"),
            "doors" => $request->input("doors")
        ]

        );

        return redirect()->route("cardCar");
    }
    
    
}

