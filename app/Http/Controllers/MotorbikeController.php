<?php

namespace App\Http\Controllers;

use App\Models\Motorbike;
use Illuminate\Http\Request;

class MotorbikeController extends Controller
{
    public function motoForm(){
        return view("motorbike.create");

    }

    public function motoSubmit( Request $request){

        dd($request->all());

        $motorbike = Motorbike::create(
        [
            "brand" => $request->input("brand"),
            "model" => $request->input("model"),
            "engine_cc" => $request->input("engine_cc"),
            "horsepower" => $request->input("horsepower"),
            "production_year" => $request->input("production_year"),
            "description" => $request->input("description"),
            "category" => $request->input("category"),
            "license_type" => $request->input("license_type")
        ]
        );
    }
    
}
