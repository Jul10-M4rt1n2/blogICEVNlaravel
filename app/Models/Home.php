<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    //variavel que recebe o nome da tabela
    protected $table = 'homes';
    //variavel que recebe o nome da chave primaria
    protected $primaryKey = 'id';
    //variavel que recebe o nome das colunas que podem ser preenchidas
    protected $fillable = [
        'id', 
        'image', 
        'section2_title', 
        'section2_description', 
        'image2', 
        'section3_title', 
        'section3_sub_title', 
        'section3_title_card1',
        'section3_description_card1', 
        'section3_title_card2',
        'section3_description_card2', 
        'section3_title_card3',
        'section3_description_card3',
        'section4_title',
        'section4_description',
        'created_at', 
        'updated_at'
    ];
}
