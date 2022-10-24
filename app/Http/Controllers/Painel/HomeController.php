<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Contracts\HomeServiceInterface;

class HomeController extends Controller
{
    //variavel que contem a instancia do servico
    protected $model;

    //construtor da classe
    public function __construct(HomeServiceInterface $model)
    {
        //atribui a instancia do servico a variavel da classe
        $this->model = $model;   
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //metodo para exibir a pagina do formulario de cadastro
    public function index(Request $request)
    {
        //a variavel $paginate recebe o valor da variavel paginate do request
        $paginate = ($request->input('paginate')) ? $request->input('paginate') : 10;
        //a variavel $orderByField recebe o valor da variavel orderByField do request
        $orderByField = ($request->input('orderByField')) ? $request->input('orderByField') : 'id';
        //a variavel $orderByOrder recebe o valor da variavel orderByOrder do request
        $orderByOrder = ($request->input('orderByOrder')) ? $request->input('orderByOrder') : 'asc';

        //chama o metodo list do servico em array
        $data = $this->model->all($request, $orderByField, $orderByOrder, $paginate);

        //retorna a view com os dados
        return view('painel.home.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //retorna a view
        return view('painel.home.form', [
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
        //tratando erros ao cadastrar
        try{
            if ($request->hasFile('featured_image')) {

                $imageName = time() . '.' . $request->featured_image->extension();

                $request->featured_image->move(public_path('storage/images'), $imageName);
                $request->merge(array('image' => "storage/images/" . $imageName));
            }
            if ($request->hasFile('section2_image')) {

                $imageName = time() . '.' . $request->section2_image->extension();

                $request->section2_image->move(public_path('storage/images'), $imageName);
                $request->merge(array('image2' => "storage/images/" . $imageName));
            }
            //chama o metodo create do servico
            $this->model->create($request->all());
            //retorna a view com a mensagem de sucesso
            return redirect()->route('painel-home')->with('success', 'Registro cadastrado com sucesso!');
        }
        catch(\Exception $e){
            //retorna a view com a mensagem de erro
            return redirect()->route('painel-home')->with('error', 'Erro ao cadastrar o registro!');
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
        //trata erros ao editar
        try{
            //retorna a view com os dados
            return view('painel.home.form', compact('data'));
        }
        catch(\Exception $e){
            //retorna a view com a mensagem de erro
            return redirect()->route('painel-home')->with('error', 'Erro ao editar o registro!');
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
        try{
            //chama o metodo update do servico
            $this->model->update($request->all(), $id);
            //retorna a view com a mensagem de sucesso
            return redirect()->route('painel-home')->with('success', 'Registro editado com sucesso!');
        }
        catch(\Exception $e){
            //retorna a view com a mensagem de erro
            return redirect()->route('painel-home')->with('error', 'Erro ao editar o registro!');
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
        //traatando erro ao tentar excluir
        try{
            //chama o metodo delete do servico
            $this->model->destroy($id);
            //retorna a view com a mensagem de sucesso
            return redirect()->route('painel-home')->with('success', 'Registro excluido com sucesso!');
        }
        catch(\Exception $e){
            //retorna a view com a mensagem de erro
            return redirect()->route('painel-home')->with('error', 'Erro ao excluir o registro!');
        }
    }
}
