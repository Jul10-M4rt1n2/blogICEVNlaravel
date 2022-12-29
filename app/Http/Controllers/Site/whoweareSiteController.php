<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Contracts\WhoweareServiceInterface;

class whoweareSiteController extends Controller
{
    //contrutor
    public function __construct(WhoweareServiceInterface $model)
    {
        $this->model = $model;
    }

    //index
    public function index()
    {
        $datas = $this->model->all();
        $data = $datas->last();

        return view('site.whoweare.index',[
            'datas' => $datas,
            'data' => $data
        ]);
    }
}