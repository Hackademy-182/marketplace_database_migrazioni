<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MotorbikeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "title" => "required",
            "brand" => "required",
            "model" => "required",
            "engine_cc" => "required|numeric",
            "horsepower" => "required|numeric",
            "production_year" => "required|numeric",
            "description" => "required",
            "category" => "required",
            "license_type" => "required"
        ];
    }



     public function messages()
    {
        return [
            "title.required" => "Il titolo dell'annuncio è obbligatorio",
            "brand.required" => "Il brand della moto è obbligatorio",
            "model.required" => "Il modello della moto è obbligatorio",
            "engine_cc.numeric" => "La cilindrata deve essere un numero",
            "horsepower.numeric" => "I cavalli di potenza devono essere numeri",
            "production_year.numeric" => "L'anno di produzione deve essere un numero",
            "description.required" => "La descrizione della moto è obbligatoria",
            "category.required" => "La categoria è obbligatoria",
            "license_type.required" => "La tipologia di licenza è obbligatoria",
            "img" => "image"
            ];
}

}