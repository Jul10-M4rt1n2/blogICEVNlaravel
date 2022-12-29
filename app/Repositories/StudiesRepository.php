<?php

namespace App\Repositories;

use App\Models\studie;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\StudiesRepositoryInterface;

class StudiesRepository extends BaseRepository implements StudiesRepositoryInterface
{
    //funcao construltor que recebe o model
    protected $model;
    
    //funcao construltor que recebe o model
    public function __construct(studie $model)
    {
        //variavel model recebe o model
        $this->model = $model;
    }
}