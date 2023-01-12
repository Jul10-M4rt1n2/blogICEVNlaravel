<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offers extends Model
{
    use HasFactory;

    protected $table = 'offers';

    protected $fillable = [
        'image',
        'image2',
        'description',
        'updated_at',
        'created_at',
    ];
}
