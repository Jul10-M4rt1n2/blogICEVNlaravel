<?php

namespace App\Services\Contracts;

interface BaseServiceInterface
{
    //esta funcao exibe o formulario de cadastro
    public function create($data);
    //esta funcao recebe os dados do formulario e salva no banco
    public function update($id, $data);
    //esta funcao lista de forma odenada e paginado os dados do banco
    public function list($request, $orderByField, $orderByOrder, $paginate);
    //esta fucao busca um registro no banco pelo id
    public function find($id);
    //esta funcao pega o primeiro registro do banco
    public function first($request, $data);
    //esta funcao deleta um registro do banco
    public function destroy($id);
    //esta funcao pega todos os registros do banco
    public function all();
}