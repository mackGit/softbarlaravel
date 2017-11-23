@extends('app')

@section('content')
    <div class="container">

        <div class="">
            <h1>Pedidos</h1>
        </div>

        <div class="">
            <button type="button" class="btn btn-info btn-sm" data-target="#modal-add" data-toggle="modal">+ Adicionar
            </button>
        </div>

        <br/>

        <table class="table table-striped table-bordered table-hover">

            <thead>
            <tr>
                <th>Cliente</th>
                <th>Ação</th>
            </tr>
            </thead>


            <tbody>
            @foreach($pedidos as $ped)
                <tr>
                    <td>{{$ped->cliente->nome}}</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm" data-target="#modal-edit-{{$ped->id}}"
                                data-toggle="modal">Editar
                        </button>
                        <button type="button" class="btn btn-danger  btn-sm" data-target="#modal-delete-{{$ped->id}}"
                                data-toggle="modal">Remover
                        </button>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
        @include('Pedidos.modaladd')
    </div>
@endsection

