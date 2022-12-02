<?php

namespace App\Services;

use App\Repositories\Contracts\StudiesRepositoryInterface;
use App\Services\Contracts\StudiesServiceInterface;

class StudiesService extends BaseService implements StudiesServiceInterface
{
    //variavel model
    protected $model;
    //funcao construltor que recebe o model
    public function __construct(StudiesRepositoryInterface $model)
    {
        //chama o construtor da classe pai
        parent::__construct($model);
        //variavel model recebe o model
        $this->model = $model;
    }
}
