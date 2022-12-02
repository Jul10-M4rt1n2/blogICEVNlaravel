<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Contracts\StudiesServiceInterface;
use Illuminate\Http\Request;

class StudiesSiteController extends Controller
{
    public function __construct(StudiesServiceInterface $model)
    {
        $this->model = $model;
    }
    
    public function index()
    {
        $registros = $this->model->all();
        $registro = $registros->last();
        return view('site.studies.index', [
            'registros' => $registros,
            'registro' => $registro
        ]);
    }

    public function show($id)
    {
        $registro = $this->model->find($id);
        return view('site.studies.show', [
            'registro' => $registro
        ]);
    }
}
