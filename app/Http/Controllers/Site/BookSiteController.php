<?php

namespace App\Http\Controllers\Site;

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
        $flipbooks = \DB::table('flipbook')->where('status', '1')->get();
        $registros = $this->model->all();
        $registro = $registros->last();
        return view('site.books.index', [
            'registros' => $registros,
            'registro' => $registro,
            'flipbooks' => $flipbooks
        ]);
    }

    public function show($id)
    {
        $registro = $this->model->find($id);
        $images = explode(",",$registro->images);

        return view('site.books.show', [
            'flipbook' => $registro,
            'content' => json_decode($registro->images),
        ]);
    }
}
