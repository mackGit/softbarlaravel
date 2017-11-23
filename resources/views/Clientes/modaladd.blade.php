<!--Modal para adicionar clientes-->
<div class="modal fade" aria-hidden="true" role="dialog" tabindex="-1" id="modal-add">
    <div class="modal-dialog" role="document">
        {!! Form::open(['route' => 'clientes.store']) !!}
        {{Form::token()}}
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Adicionar</h4>
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
                    {!! Form::text('nome', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('telefone', 'Telefone :') !!}
                    {!! Form::text('telefone', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('rua', 'Rua :') !!}
                    {!! Form::text('rua', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('numero', 'Número :') !!}
                    {!! Form::number('numero', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('bairro', 'Bairro :') !!}
                    {!! Form::text('bairro', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('cidade', 'Cidade :') !!}
                    {!! Form::text('cidade', null, ['class'=>'form-control']) !!}
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                {!! Form::submit ('Confirmar', ['class' => 'btn btn-success']) !!}
            </div>
        </div>
        {!!Form::close()!!}
    </div>
</div>