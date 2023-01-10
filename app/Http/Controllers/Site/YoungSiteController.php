<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Contracts\YoungServiceInterface;
use Illuminate\Http\Request;

class YoungSiteController extends Controller
{
    //contrutor
    public function __construct(YoungServiceInterface $model)
    {
        $this->model = $model;
    }

    //index
    public function index()
    {
        $datas = $this->model->all();
        $data = $datas->last();
        return view('site.young.index', [
            'datas' => $datas,
            'data' => $data
        ]);
    }

}