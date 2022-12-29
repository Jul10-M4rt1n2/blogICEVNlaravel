<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Contracts\HomeServiceInterface;
use Illuminate\Http\Request;

class HomeSiteController extends Controller
{
    //medogo construtor pegando do HomeServiceInterface
    public function __construct(HomeServiceInterface $model)
    {
        $this->model = $model;
    }

    public function index(Request $request)
    {
        //pegando todos os registros do banco para exibir na view
        $registros = $this->model->all();
        //pegando somente o ultimo registro adicionado
        $registro = $registros->last();
        //retornando a view com os registros e as imagens
        return view('site.index', [
            'registros' => $registros,
            'registro' => $registro,
        ]);
    }

    public function detalhesPost()
    {
        //chama o metodo find do servico
        $post = $this->model->all();
        //pegando somente o ultimo registro adicionado
        $post = $post->last();
        
        //retorna a view com o post
        return view('site.detalhesPost', [
            'post' => $post,
        ]);
    }

    public function detalhesPost2()
    {
        //chama o metodo find do servico
        $post = $this->model->all();
        //pegando somente o ultimo registro adicionado
        $post = $post->last();
        
        //retorna a view com o post
        return view('site.detalhesPost2', [
            'post' => $post,
        ]);
    }

    public function detalhesPost3()
    {
        //chama o metodo find do servico
        $post = $this->model->all();
        //pegando somente o ultimo registro adicionado
        $post = $post->last();
        
        //retorna a view com o post
        return view('site.detalhesPost3', [
            'post' => $post,
        ]);
    }

    public function detalhesPost4()
    {
        //chama o metodo find do servico
        $post = $this->model->all();
        //pegando somente o ultimo registro adicionado
        $post = $post->last();
        
        //retorna a view com o post
        return view('site.detalhesPost4', [
            'post' => $post,
        ]);
    }
}