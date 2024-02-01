<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class EventRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:2', 'max:15'],
            'description' => ['required', 'string', 'min:2'],
            'location' => ['required'],
            'date' => ['required'],
            'hour' => ['required'],
            'type' => ['required'],
            'tags' => ['required'],

        ];
    }

    public function messages ()
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser una cadena de caracteres.',
            'name.min' => 'El nombre debe tener al menos :min caracteres.',
            'name.max' => 'El nombre no puede tener más de :max caracteres.',

            'description.required' => 'La descripción es obligatoria.',
            'description.string' => 'La descripción debe ser una cadena de caracteres.',
            'description.min' => 'La descripción debe tener al menos :min caracteres.',

            'location.required' => 'La localización es obligatoria.',
            'date.required' => 'La fecha es obligatoria.',
            'hour.required' => 'La hora es obligatoria.',
            'type.required' => 'El tipo es obligatorio.',
            'tags.required' => 'Los tags son obligatorios.',
        ];
    }
}
