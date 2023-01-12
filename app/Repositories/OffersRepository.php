<?php

namespace App\Repositories;

use App\Models\offers;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\OffersRepositoryInterface;

class OffersRepository extends BaseRepository implements OffersRepositoryInterface
{
    //funcao construltor que recebe o model
    protected $model;
    
    //funcao construltor que recebe o model
    public function __construct(offers $model)
    {
        //variavel model recebe o model
        $this->model = $model;
    }
}