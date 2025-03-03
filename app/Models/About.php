<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'image',
        'title',
        'description',
        'thumbnail',
        'linkedin',
        'github',
        'whatsapp',
        'resume'  // Add this line
    ];

    protected $casts = [
        'thumbnail' => 'array'
    ];

    public function getThumbnailAttribute($value)
    {
        return is_string($value) ? json_decode($value, true) : $value;
    }
}
