@extends('app')

@section('content')
    <div class="container">

        <div class="">
            <h1>Produtos</h1>
        </div>

        <div class="">
            <button type="button" class="btn btn-info btn-sm" data-target="#modal-add" data-toggle="modal">+ Adicionar
            </button>
        </div>

        <br/>

        <table class="table table-striped table-bordered table-hover">

            <thead>
            <tr>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Categoria</th>
                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach($produtos as $pro)
                <tr>
                    <td>{{$pro->description}}</td>
                    <td>{{$pro->price}}</td>
                    <td>{{$pro->categoria->description}}</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm" data-target="#modal-edit-{{$pro->id}}"
                                data-toggle="modal">Editar
                        </button>
                        <button type="button" class="btn btn-danger  btn-sm" data-target="#modal-delete-{{$pro->id}}"
                                data-toggle="modal">Remover
                        </button>
                    </td>
                </tr>
                @include('Produtos.modal')
            @endforeach
            </tbody>
        </table>
        @include('Produtos.modaladd')
    </div>

@endsection