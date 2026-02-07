<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function carForm(){
        return view("car.create");
    }

    public function carSubmit( Request $request){
        // dd($request);
    }
    
    
}

