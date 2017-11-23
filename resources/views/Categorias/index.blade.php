@extends('app')

@section('content')
    <div class="container">

        <div class="">
            <h1>Categorias</h1>
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
                <th>Ação</th>
            </tr>
            </thead>


            <tbody>
            @foreach($categorias as $cat)
                <tr>
                    <td>{{$cat->description}}</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm" data-target="#modal-edit-{{$cat->id}}"
                                data-toggle="modal">Editar
                        </button>
                        <button type="button" class="btn btn-danger  btn-sm" data-target="#modal-delete-{{$cat->id}}"
                                data-toggle="modal">Remover
                        </button>
                    </td>
                </tr>
                @include('Categorias.modal')
            @endforeach
            </tbody>
        </table>
        @include('Categorias.modaladd')
    </div>
@endsection

