<?php

namespace App\Http\Controllers;

use App\Models\Motorbike;
use Illuminate\Http\Request;
use App\Http\Requests\MotorbikeRequest;

class MotorbikeController extends Controller
{
    public function motoForm(){
        return view("motorbike.create");

    }
     public function cardMoto(){
        $motorbikes = Motorbike::All();
        return view("motorbike.motoCard", compact("motorbikes"));
    }

    public function motoSubmit( MotorbikeRequest $request){

        // dd($request->all());

        $motorbike = Motorbike::create(
        [
            "title"=>$request->input("title"),
            "brand" => $request->input("brand"),
            "model" => $request->input("model"),
            "engine_cc" => $request->input("engine_cc"),
            "horsepower" => $request->input("horsepower"),
            "production_year" => $request->input("production_year"),
            "description" => $request->input("description"),
            "category" => $request->input("category"),
            "license_type" => $request->input("license_type"),
            "img" => $request->hasFile("img") ? $request->file("img")->store("img", "public") : "img/image-not-found_0221202211372462137974b6c1a.png",
        ]
        );
        return redirect()->route("motoCard");
    }
    
}
