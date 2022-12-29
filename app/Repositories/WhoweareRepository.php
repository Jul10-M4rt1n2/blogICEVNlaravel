<?php

namespace App\Repositories;

use App\Models\whoweare;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\WhoweareRepositoryInterface;

class WhoweareRepository extends BaseRepository implements WhoweareRepositoryInterface
{
    //funcao construltor que recebe o model
    protected $model;
    
    public function __construct(whoweare $model)
    {
        //variavel model recebe o model
        $this->model = $model;
    }     
}