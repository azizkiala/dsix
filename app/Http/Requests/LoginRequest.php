<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'telephone' => 'required|numeric|min:10',
            'password' => 'required|min:8',
        ];
    }

    public function messages(){
        return [

            'telephone.required' => "Entrer le numéro mobile",
            'telephone.numeric' => "Numéro mobile doit avoir les caractères numériques",
            'telephone.unique' => "Numéro mobile déjà utilisé",
            'telephone.min' => "Numéro mobile doit avoir 10 caractères",
            'password.required' => "Entrer mot de passe",
            'password.min' => "Mot de passe doit avoir 8 caractères",
            'password.confirmed' => "Mot de passe de confirmation doit avoir 8 caractères",
        ];

    }
}
