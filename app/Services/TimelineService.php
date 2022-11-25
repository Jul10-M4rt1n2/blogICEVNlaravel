<?php

namespace App\Services;

use App\Repositories\Contracts\TimelineRepositoryInterface;
use App\Services\Contracts\TimelineServiceInterface;

class TimelineService extends BaseService implements TimelineServiceInterface
{
    //variavel model
    protected $model;
    //funcao construltor que recebe o model
    public function __construct(TimelineRepositoryInterface $model)
    {
        //chama o construtor da classe pai
        parent::__construct($model);
        //variavel model recebe o model
        $this->model = $model;
    }
}