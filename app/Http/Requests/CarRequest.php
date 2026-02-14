<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// use Symfony\Contracts\Service\Attribute\Required;

class CarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true
        ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "title"=> "required",
            "brand"=> "required",
            "model"=> "required",
            "engine_cc"=> "required|numeric",
            "horsepower"=> "required|numeric",
            "production_year"=> "required|numeric",
            "description"=> "required",
            "body_type"=> "required",
            "doors"=>"required|numeric"
            
            
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "Il titolo dell'annuncio è obbligatorio",
            "brand.required" => "Il brand dell'annuncio è obbligatorio",
            "model.required"=> "Il modello è obbligatorio",
            "engine_cc.numeric"=> "La cilindrata deve essere un numero",
            "horsepower.numeric"=> "I cavalli di potenza devono essere numeri",
            "production_year.numeric"=> "L'anno di produzione deve essere un numero",
            "description.required"=> "La descrizione della vettura è obbligatoria",
            "body_type.required"=> "Il tipo di carrozzeia della vettura è obbligatorio",
            "doors.numeric"=> "Le porte devono essere un numero",
            "img"=>"image"
                ];
    }
}
