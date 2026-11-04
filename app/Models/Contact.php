<?php

namespace App\Models;

use Database\Factories\ContactFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /** @use HasFactory<ContactFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'service_interest',
        'message',
        'read',
        'privacy_accepted_at',
    ];

    protected $casts = [
        'read' => 'boolean',
        'privacy_accepted_at' => 'datetime',
    ];

    // Label legible para la categoría de interés
    public function getServiceLabelAttribute(): string
    {
        return match ($this->service_interest) {
            'diseno' => 'Diseño Web',
            'ciberseguridad' => 'Ciberseguridad',
            'servicios_tecnicos' => 'Servicios Técnicos',
            default => 'Otro',
        };
    }
}
