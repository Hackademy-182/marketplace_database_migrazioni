<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motorbike extends Model
{
    protected $fillable = [
        "title","brand","model","engine_cc","horsepower","production_year","description","license_type","category", "img"
    ]; 
}
