<?php

namespace App\Services;

use App\Services\Contracts\HomeServiceInterface;
use App\Repositories\Contracts\HomeRepositoryInterface;

class HomeService extends BaseService implements HomeServiceInterface
{
    //variavel model
    protected $model;
    //funcao construltor que recebe o model
    public function __construct(HomeRepositoryInterface $model)
    {
        //chama o construtor da classe pai
        parent::__construct($model);
        //variavel model recebe o model
        $this->model = $model;
    }
}