<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Services\Contracts\TimelineServiceInterface;
use Illuminate\Http\Request;

class TimelineSiteController extends Controller
{
    //contrutor
    public function __construct(TimelineServiceInterface $model)
    {
        $this->model = $model;
    }

    //index
    public function index()
    {
        $registros = $this->model->all();
        $registro = $registros->last();
        return view('site.timeline.index', [
            'registros' => $registros,
            'registro' => $registro
        ]);
    }

}