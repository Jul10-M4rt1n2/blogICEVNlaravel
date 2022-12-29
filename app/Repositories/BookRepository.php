<?php

namespace App\Repositories;

use App\Models\book;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\BookRepositoryInterface;

class BookRepository extends BaseRepository implements BookRepositoryInterface
{
    //funcao construltor que recebe o model
    protected $model;
    
    //funcao construltor que recebe o model
    public function __construct(book $model)
    {
        //variavel model recebe o model
        $this->model = $model;
    }
}