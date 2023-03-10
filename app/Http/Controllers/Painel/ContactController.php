<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Services\Contracts\ContactServiceInterface;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class ContactController extends Controller
{
    //variavel que contem a instancia do servico
    protected $model;

    //construtor da classe
    public function __construct(ContactServiceInterface $model)
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

        //lista todos os dados
        $data = $this->model->all($request, $orderByField, $orderByOrder, $paginate);

        //retorna a view index com os dados
        return view('painel.contact.index', [
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //valida os dados
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'description' => 'required',
        ]);

        //envia o email
        \Mail::send(new \App\Mail\SendMail($request->all()));

        //salvar os dados no banco
        $this->model->create($request->all());

        //redireciona para a pagina anterior
        return redirect()->back()->with('success', 'Email enviado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = $this->model->all();

        return view('painel.contact.sendEmail', [
            'data' => $data,
        ]);
    }

    //funcao para enviar para todos os emails cadastrados e que aceitaram receber emails
    public function sendEmailAll(Request $request)
    {
        $emails = $request->all();

        if ($request->hasFile('attachment')) {
            // $request->file('attachment')->store('novidades');
            $imageName = time() . '.' . $request->attachment->extension();

            $request->attachment->move(
                public_path('storage/images'),
                $imageName
            );
            $request->merge(array('image' => "storage/images/" . $imageName));
        }

        //pegar todos os email com accept = on
        $emails = $this->model->all()->where('accept', 'on')->pluck('email')->toArray();
        //pegar a descricao do formulário e o anexo
        $form = $request->all();
        //juntar os dois arrays
        $emails = array_merge($emails, $form);

        \Mail::send(new \App\Mail\AllSendMail($emails));

        return redirect()->back()->with('success', 'Email enviado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
