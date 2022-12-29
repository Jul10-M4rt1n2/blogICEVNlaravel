<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Repositories\Contracts\HomeRepositoryInterface;
use App\Models\Home;

class HomeRepository extends BaseRepository implements HomeRepositoryInterface
{
    //funcao construltor que recebe o model
    protected $model;
    
    //funcao construltor que recebe o model
    public function __construct(Home $model)
    {
        //variavel model recebe o model
        $this->model = $model;
    }
}