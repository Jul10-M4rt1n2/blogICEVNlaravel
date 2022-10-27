<?php

namespace App\Services;

use App\Repositories\Contracts\BookRepositoryInterface;
use App\Services\Contracts\BookServiceInterface;

class BookService extends BaseService implements BookServiceInterface
{
    //variavel model
    protected $model;
    //funcao construltor que recebe o model
    public function __construct(BookRepositoryInterface $model)
    {
        //chama o construtor da classe pai
        parent::__construct($model);
        //variavel model recebe o model
        $this->model = $model;
    }
}
