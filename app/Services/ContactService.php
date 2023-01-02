<?php

namespace App\Services;

use App\Repositories\Contracts\ContactRepositoryInterface;
use App\Services\Contracts\ContactServiceInterface;

class ContactService extends BaseService implements ContactServiceInterface
{
    //variavel model
    protected $model;
    //funcao construltor que recebe o model
    public function __construct(ContactRepositoryInterface $model)
    {
        //chama o construtor da classe pai
        parent::__construct($model);
        //variavel model recebe o model
        $this->model = $model;
    }
}