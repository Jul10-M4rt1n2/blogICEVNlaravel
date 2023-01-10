<?php

namespace App\Services;

use App\Repositories\Contracts\YoungRepositoryInterface;
use App\Services\Contracts\YoungServiceInterface;

class YoungService extends BaseService implements YoungServiceInterface
{
    //variavel model
    protected $model;
    //funcao construltor que recebe o model
    public function __construct(YoungRepositoryInterface $model)
    {
        //chama o construtor da classe pai
        parent::__construct($model);
        //variavel model recebe o model
        $this->model = $model;
    }
}