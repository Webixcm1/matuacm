<?php

namespace App\Http\Requests\Trajets;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'date_depart' => 'required|date',
            'heure_depart' => 'required',
            'point_depart' => 'required|string',
            'destination' => 'required|string',
            'nombre_place' => 'required|numeric',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'prix' => 'required|numeric',
            'status' => 'required|boolean'
        ];
    }
}
