<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Models\Car;
// 

class CarController extends Controller
{
    public function carForm(){
        return view("car.create");
    }

    public function cardView(){
        $cars = Car::All();
        return view("car.carCard", compact("cars"));
    }

    public function carSubmit( CarRequest $request){
        // dd($request);
        // dd($request->all());
        //mass assignament
        $car = Car::create(
        [ 
            "title"=>$request->input("title"),
            "brand" => $request->input("brand"),
            "model" => $request->input("model"),
            "engine_cc" => $request->input("engine_cc"),
            "horsepower" => $request->input("horsepower"),
            "production_year" => $request->input("production_year",4),
            "description" => $request->input("description"),
            "body_type" => $request->input("body_type"),
            "doors" => $request->input("doors"),
            // "img"=> $request->file("img")->store("img", "public") 
            // se l'utente non inserisce l'immagine apparirà questa di default  
            // questo è un if/else 
            
            "img" => $request->hasFile("img") ? $request->file("img")->store("img", "public") : "img/image-not-found_0221202211372462137974b6c1a.png",
        ]

        );

        return redirect()->route("cardCar");
    }
    
    
}

