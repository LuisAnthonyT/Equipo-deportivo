<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'subject' => ['required', 'string', 'min:2', 'max:100'],
            'text' => ['required', 'string', 'min:2'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser una cadena de caracteres.',
            'name.min' => 'El nombre debe tener al menos :min caracteres.',
            'name.max' => 'El nombre no debe exceder los :max caracteres.',

            'subject.required' => 'El asunto es obligatorio.',
            'subject.string' => 'El asunto debe ser una cadena de caracteres.',
            'subject.min' => 'El asunto debe tener al menos :min caracteres.',
            'subject.max' => 'El asunto no debe exceder los :max caracteres.',

            'text.required' => 'El mensaje es obligatorio.',
            'text.string' => 'El mensaje debe ser una cadena de caracteres.',
            'text.min' => 'El mensaje debe tener al menos :min caracteres.',
        ];
    }
}
