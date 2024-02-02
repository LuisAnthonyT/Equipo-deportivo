<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class SignupRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'email', 'min:10', 'max:255', 'unique:users'],
            'birthday' => ['required', 'date'],
            'password' => ['required', 'min:8', 'confirmed', Rules\Password::defaults()],
        ];
    }

    public function messages ()
    {
        return [

            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser una cadena de caracteres.',
            'name.min' => 'El nombre debe tener al menos :min caracteres.',
            'name.max' => 'El nombre no puede tener más de :max caracteres.',

            'email.required' => 'La dirección de correo electrónico es obligatoria.',
            'email.email' => 'La dirección de correo electrónico debe de tener un @ y dominio.',
            'email.min' => 'La dirección de correo electrónico debe tener al menos :min caracteres.',
            'email.max' => 'La dirección de correo electrónico no puede tener más de :max caracteres.',
            'email.unique' => 'Esta dirección de correo electrónico ya está registrada.',

            'birthday.required' => 'La fecha de nacimiento es obligatorio',

            'password.required' => 'La contraseña es obligatoria.',
            'password.confirmed' => 'La confirmación de contraseña no coincide.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres',
        ];
    }
}
