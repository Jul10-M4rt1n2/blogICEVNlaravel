<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Dd;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.index');
    }

    //metodo para salvar o login no banco de dados
    public function authenticate(Request $request)
    {
        //variavel para receber os dados do formulario
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        //verificar se o usuario existe no banco de dados
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            //redirecionar para a pagina home
            return redirect()->route('painel');
        }

        //retornar erro de email ou senha invalidos
        return back()->withErrors([
            'email' => 'E-mail inválido.',
            'password' => 'Senha inválida.',
        ])->onlyInput('email', 'password');
    }

    //metodo para logout do usuário
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('painel.auth.form', [
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
        try {
            if ($request->hasFile('img')) {

                $imageName = time() . '.' . $request->img->extension();
                $request->img->move(public_path('storage/images'), $imageName);
                $request->merge(array('image' => "storage/images/" . $imageName));
            }

            //Salvando o novo usuário
            User::create($request->all());
            return redirect()->route('painel-user-show')->with('success', 'Usuário cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //listar todos os usuarios
        $users = User::all();
        //pegar usuário logado
        $user = Auth::user();
        //retornar a view com os dados
        return view(
            'painel.auth.index',
            [
                'users' => $users,
                'user' => $user
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //editar o usuário
        $user = User::find($id);
        return view('painel.auth.form', [
            'data' => $user
        ]);
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

            //Salvando o novo usuário
            $user = User::find($id);
            $user = $user->update($request->all());
            // $user->update($request->all);
            return redirect()->route('painel-user-show')->with('success', 'Usuário atualizado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
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
        //excluir o usuário
        $user = User::find($id);
        $user->delete();
        return redirect()->route('painel-user-show')->with('success', 'Usuário excluído com sucesso!');
    }
}
