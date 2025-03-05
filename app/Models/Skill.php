<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'thumbnail',
        'frontend',
        'backend',
        'database',
        'tools',
        'others',
    ];

    protected $casts = [
        'thumbnail' => 'array'
    ];

    public function getThumbnailAttribute($value)
    {
        return is_string($value) ? json_decode($value, true) : $value;
    }
}
