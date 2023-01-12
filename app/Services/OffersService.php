<?php

namespace App\Services;

use App\Repositories\Contracts\OffersRepositoryInterface;
use App\Services\Contracts\OffersServiceInterface;

class OffersService extends BaseService implements OffersServiceInterface
{
    //variavel model
    protected $model;
    //funcao construltor que recebe o model
    public function __construct(OffersRepositoryInterface $model)
    {
        //chama o construtor da classe pai
        parent::__construct($model);
        //variavel model recebe o model
        $this->model = $model;
    }
}