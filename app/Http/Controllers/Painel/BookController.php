<?php

namespace App\Http\Controllers\painel;

use App\Http\Controllers\Controller;
use App\Services\Contracts\BookServiceInterface;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //variavel que contem a instancia do servico
    protected $model;

    //construtor da classe
    public function __construct(BookServiceInterface $model)
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
        return view('painel.books.index',[
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
        return view('painel.books.form', [
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
        //tratando os erros
        try {
            //regra para salvar as imagens na pasta public/storage/images e salvar o pdf na pasta public/storage/pdf
            if ($request->hasFile('img_emphasis')){
                $image = time().'.'.$request->img_emphasis->extension();
                $request->img_emphasis->move(public_path('storage/images'), $image);
                $request->merge(['image1' => "storage/images/" . $image]);
            }
            if ($request->hasFile('img_front_cover')){
                $image = time().'.'.$request->img_front_cover->extension();
                $request->img_front_cover->move(public_path('storage/images'), $image);
                $request->merge(['image2' => "storage/images/" . $image]);
            }
            if ($request->hasFile('file')){
                $pdf = time().'.'.$request->file->extension();
                $request->file->move(public_path('storage/pdf'), $pdf);
                $request->merge(['pdf' => "storage/pdf/" . $pdf]);
            }
            //chama o metodo create do servico
            $this->model->create($request->all());
            //retorna a mensagem de sucesso
            return redirect()->route('books.index')->with('success', 'Livro cadastrado com sucesso!');
        } catch (\Exception $e) {
            //retorna a mensagem de erro
            return redirect()->back()->with('error', 'Erro ao cadastrar o livro!');
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
       try {
            //retorna a view com os dados
            return view('painel.books.form', [
                'data' => $data
            ]);
        } catch (\Exception $e) {
            //retorna a mensagem de erro
            return redirect()->back()->with('error', 'Erro ao editar o livro!');
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
            return redirect()->route('books.index')->with('success', 'Livro editado com sucesso!');
        } catch (\Exception $e) {
            //retorna a mensagem de erro
            return redirect()->back()->with('error', 'Erro ao editar o livro!');
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
            return redirect()->route('books.index')->with('success', 'Livro excluido com sucesso!');
        } catch (\Exception $e) {
            //retorna a mensagem de erro
            return redirect()->back()->with('error', 'Erro ao excluir o livro!');
        }
    }
}
