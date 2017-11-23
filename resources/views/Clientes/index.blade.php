@extends('app')

@section('content')
    <div class="container">

        <div class="">
            <h1>Clientes</h1>
        </div>

        <div class="">
            <button type="button" class="btn btn-info btn-sm" data-target="#modal-add" data-toggle="modal">+ Adicionar
            </button>
        </div>

        <br/>

        <table class="table table-striped table-bordered table-hover">

            <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Rua</th>
                <th>Número</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach($clientes as $cli)
                <tr>
                    <td>{{$cli->nome}}</td>
                    <td>{{$cli->telefone}}</td>
                    <td>{{$cli->rua}}</td>
                    <td>{{$cli->numero}}</td>
                    <td>{{$cli->bairro}}</td>
                    <td>{{$cli->cidade}}</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm" data-target="#modal-edit-{{$cli->id}}"
                                data-toggle="modal">Editar
                        </button>
                        <button type="button" class="btn btn-danger  btn-sm" data-target="#modal-delete-{{$cli->id}}"
                                data-toggle="modal">Remover
                        </button>
                    </td>
                </tr>
                @include('Clientes.modal')
            @endforeach
            </tbody>
        </table>
        @include('Clientes.modaladd')
    </div>
@endsection