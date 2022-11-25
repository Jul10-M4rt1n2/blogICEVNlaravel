<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class timeline extends Model
{
    use HasFactory;

    protected $table = 'timelines';
    protected $fillable = [
        'id',
        'start_time',
        'end_time',
        'date',
        'day',
        'description',
        'created_at',
        'updated_at',
    ];
}
