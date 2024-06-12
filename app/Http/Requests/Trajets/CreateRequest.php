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
        $rules = [
            'date_depart' => 'sometimes|required|date',
            'heure_depart' => 'sometimes|required',
            'point_depart' => 'sometimes|required|string',
            'destination' => 'sometimes|required|string',
            'nombre_place' => 'sometimes|required|numeric',
            'prix' => 'sometimes|required|numeric',
            'status' => 'sometimes|required|boolean'
        ];

        // Si la méthode de la requête est PUT ou PATCH, les champs image ne sont pas obligatoires
        if ($this->isMethod('PUT') || $this->isMethod('PATCH')) {
            $rules['image'] = 'sometimes|image|mimes:png,jpg,jpeg';
        } else {
            // Sinon, pour les autres méthodes (POST), les champs image sont obligatoires
            $rules['image'] = 'required|image|mimes:png,jpg,jpeg';
        }

        return $rules;
    }
}
