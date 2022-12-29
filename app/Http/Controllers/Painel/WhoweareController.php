<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Services\Contracts\WhoweareServiceInterface;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class WhoweareController extends Controller
{
    //variavel que contem a instancia do servico
    protected $model;

    //construtor da classe
    public function __construct(WhoweareServiceInterface $model)
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
        return view('painel.whoweare.index',[
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
        return view('painel.whoweare.form', [
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
        // //tratando os erros
        try{
            //retorna a view com os dados e a mensagem de sucesso
            $this->model->create($request->all());
            $message = array('message' => 'Registro cadastrado com sucesso!', 'alert-type' => 'success');
           
        }
        catch(\Exception $e){
            //retorna a mensagem de erro

            $message = array('message' => 'Registro cadastrado com sucesso!', 'alert-type' => 'error');
        }
        return redirect()->route('painel.whoweare')->with($message);
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
        //trata erros ao editar
       try {
            //retorna a view com os dados
            return view('painel.whoweare.form', [
                'data' => $data
            ]);
        } catch (\Exception $e) {
            //retorna a mensagem de erro
            return redirect()->route('painel.whoweare')->with('error', 'Erro ao editar o Estudo!');
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
        //tratando erro ao tentar salvar a edicao
        try {
            //chama o metodo update do servico
            $this->model->update($request->all(), $id);
            //retorna a mensagem de sucesso
            return redirect()->route('whoweare.index')->with('success', 'Estudo editado com sucesso!');
        } catch (\Exception $e) {
            //retorna a mensagem de erro
            return redirect()->route('painel.whoweare')->with('error', 'Erro ao editar o Estudo!');
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
        //trata erro ao tentar excluir
        try {
            //chama o metodo delete do servico
            $this->model->destroy($id);
            //retorna a mensagem de sucesso
            return redirect()->route('whoweare.index')->with('success', 'Estudo excluido com sucesso!');
        } catch (\Exception $e) {
            //retorna a mensagem de erro
            return redirect()->route('painel.whoweare')->with('error', 'Erro ao excluir o Estudo!');
        }
    }
}
