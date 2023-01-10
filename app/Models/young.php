<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class young extends Model
{
    use HasFactory;

    protected $table = 'youngs';

    protected $fillable = [
        'image',
        'description',
        'updated_at',
        'created_at',
    ];
}
