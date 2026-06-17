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
            'name'             => ['required', 'string', 'max:100', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/'],
            'email'            => ['required', 'email:rfc,dns', 'max:150'],
            'phone'            => ['nullable', 'regex:/^(\+57\s?)?(\d{3}\s?\d{3}\s?\d{4})$/'],
            'service_interest' => ['required', 'in:diseno,ciberseguridad,otro'],
            'message'          => ['required', 'string', 'min:10', 'max:2000'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'             => 'El nombre es obligatorio.',
            'name.regex'                => 'El nombre solo puede contener letras y espacios.',
            'email.required'            => 'El correo es obligatorio.',
            'email.email'               => 'Ingresa un correo válido.',
            'phone.regex'               => 'El formato del teléfono debe ser: +57 300 000 0000 o 300 000 0000',
            'service_interest.required' => 'Selecciona el servicio de tu interés.',
            'service_interest.in'       => 'Servicio no válido.',
            'message.required'          => 'El mensaje es obligatorio.',
            'message.min'               => 'El mensaje debe tener al menos 10 caracteres.',
        ];
    }
}