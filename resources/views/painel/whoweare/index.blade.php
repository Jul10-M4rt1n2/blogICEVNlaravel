@extends('layouts.app')

@section('title')
    Pagina referente a pagina Quem Somos
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 colxl-12 col-lg-12 col-md-12 col-sm-12">
                <h1>Dashboard - Pagina Quem Somos</h1>
                <!--retornando os erros-->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!--Formulário de pesquisa search com icone-->
                            <form action="#" method="POST" class="form form-inline">
                                @csrf
                                <input type="text" name="filter" placeholder="Pesquisar" class="form-control my-2" value="{{ $filters['filter'] ?? '' }}">
                                <a href="{{ route('painel-whoweare-create') }}" class="btn btn-secondary" role="button"><i class="fas fa-plus-circle"></i>Adicionar</a>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>Pesquisar</button>
                                <button type="reset" class="btn btn-warning"><i class="fas fa-eraser">Limpar pesquisa</i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Título</th>
                                <th scope="col">Subtítulo</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Icone</th>
                                <th scope="col" colspan="6" class="text-center" width=5%>Acões</th>
                            </tr>
                        </thead>
                        <!--verificando se a tabela esta vazia e exibindo a mensagem Nenhum registro encontrado-->
                        @if(!$data->isEmpty())
                            @foreach ($data as $item)
                                <tr>
                                    <td scope="row">{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->subtitle }}</td>
                                    <td>{{ substr($item->description, 0,150).'...' }}</td>
                                    <td>{{ $item->icon }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('painel-whoweare-edit', $item->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('painel-whoweare-destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6" class="text-center">
                                    <div class="alert alert-warning mb-0" role="alert">
                                        Nenhum registro encontrado
                                    </div>
                                </td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection