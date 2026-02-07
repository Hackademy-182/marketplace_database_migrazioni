<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        "brand","model","engine_cc","horsepower","production_year","description","body_type","doors"
    ];
}
