<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\young;
use App\Repositories\Contracts\YoungRepositoryInterface;

class YoungRepository extends BaseRepository implements YoungRepositoryInterface
{
    //funcao construltor que recebe o model
    protected $model;
    
    //funcao construltor que recebe o model
    public function __construct(young $model)
    {
        //variavel model recebe o model
        $this->model = $model;
    }
}