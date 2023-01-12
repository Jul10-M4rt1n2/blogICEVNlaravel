<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Contracts\OffersServiceInterface;
use Illuminate\Http\Request;

class OfferingsSiteController extends Controller
{
    public function __construct(OffersServiceInterface $model){
        $this->model = $model;
    }

    public function index()
    {
        $datas = $this->model->all();
        $data = $datas->last();
        return view('site.offers.index', [
            'datas' => $datas,
            'data' => $data
        ]);
    }
}
