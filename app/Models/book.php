<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    //variavel que recebe o nome da tabela
    protected $table = 'books';
    //variavel que recebe o nome da chave primaria
    protected $primaryKey = 'id';
    //variavel que recebe o nome das colunas que podem ser preenchidas
    protected $fillable = [
        'id', 
        'title', //titulo do livro
        'subtitle', //subtitulo do livro
        'pdf', //arquivo do livro
        'summary', //resumo do livro
        'image1', //imagem de destaque do livro
        'image2', //imagem da capa do livro
        'category', //categoria do livro
        'created_at', 
        'updated_at'
    ];
}
