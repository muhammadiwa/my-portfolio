<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Home extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $table = 'home';

    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogsOptions::defaults()
        ->logOnly([
            'title',
            'description',
            'image',
        ])
        ->logFillable()
        ->logOnlyDirty()
        ->dontSubmitEmptyLogs();
    }
}
