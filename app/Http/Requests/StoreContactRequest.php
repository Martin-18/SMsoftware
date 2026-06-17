<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'             => ['required', 'string', 'max:100'],
            'email'            => ['required', 'email', 'max:150'],
            'phone'            => ['nullable', 'string', 'max:20'],
            'service_interest' => ['required', 'in:diseno,ciberseguridad,otro'],
            'message'          => ['required', 'string', 'min:10', 'max:2000'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'             => 'El nombre es obligatorio.',
            'email.required'            => 'El correo es obligatorio.',
            'email.email'               => 'Ingresa un correo válido.',
            'service_interest.required' => 'Selecciona el servicio de tu interés.',
            'service_interest.in'       => 'Servicio no válido.',
            'message.required'          => 'El mensaje es obligatorio.',
            'message.min'               => 'El mensaje debe tener al menos 10 caracteres.',
        ];
    }
}