<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlayerRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:15'],
            'twitter' => ['nullable', 'string', 'max:255'],
            'instagram' => ['nullable', 'string', 'max:255'],
            'twitch' => ['nullable', 'string', 'max:255'],
            'visible' => ['boolean'],
            'position' => ['nullable', 'string', 'max:255'],
            'jersey_number' => ['nullable', 'integer', 'min:0'],
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser una cadena de caracteres.',
            'name.max' => 'El nombre no puede tener más de :max caracteres.',
            'twitter.string' => 'El Twitter debe ser una cadena de caracteres.',
            'twitter.max' => 'El Twitter no puede tener más de :max caracteres.',
            'instagram.string' => 'El Instagram debe ser una cadena de caracteres.',
            'instagram.max' => 'El Instagram no puede tener más de :max caracteres.',
            'twitch.string' => 'El Twitch debe ser una cadena de caracteres.',
            'twitch.max' => 'El Twitch no puede tener más de :max caracteres.',
            'visible.boolean' => 'El campo visible debe ser un valor booleano.',
            'position.string' => 'La posición debe ser una cadena de caracteres.',
            'position.max' => 'La posición no puede tener más de :max caracteres.',
            'jersey_number.integer' => 'El número de dorsal debe ser un valor entero.',
            'jersey_number.min' => 'El número de dorsal debe ser como mínimo :min.',
        ];
    }
}
