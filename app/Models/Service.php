<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
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
