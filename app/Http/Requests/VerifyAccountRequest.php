<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VerifyAccountRequest extends FormRequest
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
            'nom' => 'required|string|max:250',
            'prenom' => 'required|string|max:250',

            'dateNais' => 'required|date',
            'lieu_naissance' => 'required|string',
            'sexe' => 'required|string',
            'cni' => 'required|string',
            'cni_verso' => 'required|image|mimes:png,jpg,jpeg',
            'cni_recto' => 'required|image|mimes:png,jpg,jpeg',
            'photos' => 'required|image|mimes:png,jpg,jpeg',
            'adresse' => 'required|string',
            'ville' => 'required|string',
            'numero_permis' => 'required|string',
            'image_permis' => 'required|image|mimes:png,jpg,jpeg',
            'date_obtention' => 'required|date',
            'marque' => 'required|string',
            'immatriculation' => 'required|string',
        ];
    }
}
