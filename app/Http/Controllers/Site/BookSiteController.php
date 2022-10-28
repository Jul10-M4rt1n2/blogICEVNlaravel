<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Services\Contracts\BookServiceInterface;
use Illuminate\Http\Request;

class BookSiteController extends Controller
{
    public function __construct(BookServiceInterface $model)
    {
        $this->model = $model;
    }
    
    public function index()
    {
        $registros = $this->model->all();
        $registro = $registros->last();
        return view('site.books.index', [
            'registros' => $registros,
            'registro' => $registro
        ]);
    }

    public function show($id)
    {
        $registro = $this->model->find($id);
        return view('site.books.show', [
            'registro' => $registro
        ]);
    }
}
