<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'service_interest',
        'message',
        'read',
    ];

    protected $casts = [
        'read' => 'boolean',
    ];

    // Label legible para la categoría de interés
    public function getServiceLabelAttribute(): string
    {
        return match ($this->service_interest) {
            'diseno'          => 'Diseño Web',
            'ciberseguridad'  => 'Ciberseguridad',
            default           => 'Otro',
        };
    }
}