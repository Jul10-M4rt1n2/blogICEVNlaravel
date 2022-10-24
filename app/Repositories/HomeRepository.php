<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Repositories\Contracts\HomeRepositoryInterface;
use App\Models\Home;

class HomeRepository extends BaseRepository implements HomeRepositoryInterface
{
    //funcao construltor que recebe o model
    public function __construct(Home $model)
    {
        //variavel model recebe o model
        $this->model = $model;
    }
    //esta funcao exibe o formulario de cadastro
    public function create($data)
    {
        //retorna a variavel model com o metodo create
        return $this->model->create($data);
    }
    //esta funcao recebe os dados do formulario e salva no banco
    public function update($id, $data)
    {
        //retorna a variavel model com o metodo find e o metodo update
        return $this->model->find($id)->update($data);
    }
    //esta funcao lista de forma odenada e paginado os dados do banco
    public function list($request, $orderByField, $orderByOrder, $paginate)
    {
        //retorna a variavel model com o metodo orderBy e o metodo paginate
        return $this->model->list($request, $orderByField, $orderByOrder, $paginate);
    }
    //esta fucao busca um registro no banco pelo id
    public function find($id)
    {
        //retorna a variavel model com o metodo find
        return $this->model->find($id);
    }
    //esta funcao pega o primeiro registro do banco
    public function first($request, $data)
    {
        //retorna a variavel model com o metodo first
        return $this->model->first($data);
    }
    //esta funcao deleta um registro do banco
    public function destroy($id)
    {
        //retorna a variavel model com o metodo find e o metodo delete
        return $this->model->find($id)->delete();
    }
    //esta funcao pega todos os registros do banco
    public function all()
    {
        //retorna a variavel model com o metodo all
        return $this->model->all();
    }
}