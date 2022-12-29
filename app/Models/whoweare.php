<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class whoweare extends Model
{
    use HasFactory;

    protected $table = 'whoweares';
    protected $fillable = [
        'id',
        'title',
        'subtitle',
        'description',
        'icon',
        'created_at',
        'updated_at',
    ];
}
