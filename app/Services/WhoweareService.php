<?php

namespace App\Services;

use App\Repositories\Contracts\WhoweareRepositoryInterface;
use App\Services\Contracts\WhoweareServiceInterface;

class WhoweareService extends BaseService implements WhoweareServiceInterface
{
    //variavel model
    protected $model;
    //funcao construltor que recebe o model
    public function __construct(WhoweareRepositoryInterface $model)
    {
        //chama o construtor da classe pai
        parent::__construct($model);
        //variavel model recebe o model
        $this->model = $model;
    }
}