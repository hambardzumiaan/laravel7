<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required",
            "model" => "required",
            "power" => "required|numeric:min:100",
            "km" => "required|numeric",
            "price" => "required|numeric|max:50000",
            "year" => "required|numeric",
        ];
    }
}
