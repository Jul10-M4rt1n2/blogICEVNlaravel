<?php

namespace App\Repositories;

use App\Models\contact;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\ContactRepositoryInterface;

class ContactRepository extends BaseRepository implements ContactRepositoryInterface
{
    //funcao construltor que recebe o model
    protected $model;
    
    public function __construct(contact $model)
    {
        //variavel model recebe o model
        $this->model = $model;
    }     
}