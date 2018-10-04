<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QualifRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            "idbarber" => "required|min:1",
            "idstyle" => "required|min:1",
        ];
    }

    public function messages()
    {
        return [
            // Barber
            "idbarber.required" => "The barber is required",
            "idbarber.min" => "The barber is required",
            // Style
            "idstyle.required" => "The style is required",
            "idstyle.min" => "The style is required"
        ];
    }
}
