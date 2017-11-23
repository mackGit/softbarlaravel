<!--Modal para editar clientes-->
<div class="modal fade" aria-hidden="true" role="dialog" tabindex="-1" id="modal-edit-{{$cli->id}}">
    <div class="modal-dialog" role="document">
        {!!Form::open(['method' => 'put', 'url' => "/clientes/".$cli->id.'/update','style' =>  'display: inline;']) !!}
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar</h4>
            </div>

            @if ($errors->any())
                <ul class="alet alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

            <div class="modal-body">
                <div class="form-group">
                    {!! Form::label('nome', 'Nome :') !!}
                    {!! Form::text('nome', $cli->nome, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('telefone', 'Telefone :') !!}
                    {!! Form::text('telefone', $cli->telefone, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('rua', 'Rua :') !!}
                    {!! Form::text('rua', $cli->rua, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('numero', 'Número :') !!}
                    {!! Form::number('numero', $cli->numero, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('bairro', 'Bairro :') !!}
                    {!! Form::text('bairro', $cli->bairro, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('cidade', 'Cidade :') !!}
                    {!! Form::text('cidade', $cli->cidade, ['class'=>'form-control']) !!}
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                {!! Form::submit ('Confirmar', ['class' => 'btn btn-success']) !!}
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>


<!--Modal para deletar clientes-->
<div class="modal fade" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$cli->id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Remover</h4>
            </div>
            <div class="modal-body">
                <p>Você realmente deseja remover o cliente {{$cli->nome}}?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                {!!Form::open(['method' => 'GET', 'url' => '/clientes/'.$cli->id.'/destroy', 'style' =>  'display: inline;']) !!}
                {!! Form::submit('Confirmar', ['class' => 'btn btn-danger']) !!}
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>