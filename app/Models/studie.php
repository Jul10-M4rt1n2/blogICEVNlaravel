<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studie extends Model
{
    use HasFactory;

    //variavel que recebe o nome da tabela
    protected $table = 'studies';
    //variavel que recebe o nome da chave primaria
    protected $primaryKey = 'id';
    //variavel que recebe o nome das colunas que podem ser preenchidas
    protected $fillable = [
        'id',
        'title', //titulo do estudo
        'subtitle', //subtitulo do estudo
        'pdf', //arquivo do estudo
        'summary', //resumo do estudo
        'image1', //imagem de destaque do estudo
        'image2', //imagem da capa do estudo
        'category', //categoria do estudo
        'created_at',
        'updated_at'
    ];
}
