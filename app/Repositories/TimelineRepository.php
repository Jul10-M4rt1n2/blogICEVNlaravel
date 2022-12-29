<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Repositories\Contracts\TimelineRepositoryInterface;
use App\Models\timeline;

class TimelineRepository extends BaseRepository implements TimelineRepositoryInterface
{
    //funcao construltor que recebe o model
    protected $model;
    
    //funcao construltor que recebe o model
    public function __construct(timeline $model)
    {
        //variavel model recebe o model
        $this->model = $model;
    }
}