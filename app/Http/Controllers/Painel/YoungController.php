<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Services\Contracts\YoungServiceInterface;
use Illuminate\Http\Request;

class YoungController extends Controller
{
    //variavel que contem a instancea do servico
    protected $model;

    //construtor da classe
    public function __construct(YoungServiceInterface $model)
    {
        //atribui a instancia do servico a variavel da classe
        $this->model = $model;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //a variavel $paginate recebe o valor da variavel paginate do request
        $paginate = ($request->input('paginate')) ? $request->input('paginate') : 10;
        //a variavel $orderByField recebe o valor da variavel orderByField do request
        $orderByField = ($request->input('orderByField')) ? $request->input('orderByField') : 'id';
        //a variavel $orderByOrder recebe o valor da variavel orderByOrder do request
        $orderByOrder = ($request->input('orderByOrder')) ? $request->input('orderByOrder') : 'asc';

        $data = $this->model->all($request, $orderByField, $orderByOrder, $paginate);

        //retorna a view index com os dados
        return view('painel.young.index', [
            'data' => $data,
            'paginate' => $paginate,
            'orderByField' => $orderByField,
            'orderByOrder' => $orderByOrder,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //retorna a view
        return view('painel.young.form', [
            //a variavel data recebe null
            'data' => null
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //tratanento de erros
        try {
            if ($request->hasFile('img')) {

                $imageName = time() . '.' . $request->img->extension();

                $request->img->move(public_path('storage/images'), $imageName);
                $request->merge(array('image' => "storage/images/" . $imageName));
            }
            
            //chama o metodo create do servico
            $this->model->create($request->all());
            //retorna a view com os dados e a mensagem de sucesso
            return redirect()->route('painel.young')->with('success', 'Registro cadastrado com sucesso!');           
        }
        //se houver um erro
        catch (\Exception $e) {
            //retorna a view index com a mensagem de erro
            return redirect()->route('painel.young')->with('error', 'Erro ao inserir o registro!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //chama o metodo find do servico
        $data = $this->model->find($id);

        //trata o erro ao editar
        try {
            //retorna a view form com os dados
            return view('painel.young.form', [
                'data' => $data
            ]);
        }
        //se houver um erro
        catch (\Exception $e) {
            //retorna a view index com a mensagem de erro
            return redirect()->route('painel.young')->with('error', 'Erro ao editar o registro!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            if ($request->hasFile('img')) {

                $imageName = time() . '.' . $request->img->extension();

                $request->img->move(public_path('storage/images'), $imageName);
                $request->merge(array('image' => "storage/images/" . $imageName));
            }
            
            //chama o metodo create do servico
            $this->model->update($request->all(), $id);
            //retorna a view com os dados e a mensagem de sucesso
            return redirect()->route('painel.young')->with('success', 'Registro cadastrado com sucesso!');           
        }
        //se houver um erro
        catch (\Exception $e) {
            //retorna a view index com a mensagem de erro
            return redirect()->route('painel.young')->with('error', 'Erro ao inserir o registro!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //trata o ero ao tentar excluir
        try {
            //chama o metodo delete do servico
            $this->model->destroy($id);
            //retorna a view index com a mensagem de sucesso
            return redirect()->route('painel.young')->with('success', 'Registro excluído com sucesso!');
        }
        //se houver um erro
        catch (\Exception $e) {
            //retorna a view index com a mensagem de erro
            return redirect()->route('painel.young')->with('error', 'Erro ao excluir o registro!');
        }
    }
}
