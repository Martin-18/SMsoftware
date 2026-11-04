<?php

namespace App\Models;

use Database\Factories\ServiceFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /** @use HasFactory<ServiceFactory> */
    use HasFactory;

    protected $fillable = ['title', 'description', 'category', 'image'];

    protected function casts(): array
    {
        return [
            'title' => 'string',
            'description' => 'string',
            'category' => 'string',
            'image' => 'string',
        ];
    }

    public function getImageUrlAttribute(): string
    {
        if ($this->image) {
            return asset('storage/'.$this->image);
        }

        return asset('images/default-service.jpg');
    }
}
