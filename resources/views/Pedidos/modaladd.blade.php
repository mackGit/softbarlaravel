<!--Modal para adicionar pedido-->
<div class="modal fade" aria-hidden="true" role="dialog" tabindex="-1" id="modal-add">
    <div class="modal-dialog" role="document">
        {!! Form::open(['route' => 'pedidos.store']) !!}
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


            <div class="form-group">
                {!! Form::label('cliente_id', 'Cliente :') !!}
                {{ Form::select('cliente_id',
            \App\Cliente::orderBy('nome')->pluck('nome','id')->toArray(),null,['class'=>'form-control'])}}
            </div>


            <div class="form-group">
                @foreach ($mesas as $mesa)
                    <div class="form-control">
                        {!! Form::label('produto', 'Mesa '.$mesa->description) !!}
                        {{ Form::checkbox('mesa_id', 1, null,['class'=>'form-control'])}}
                    </div>
                @endforeach
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                {!! Form::submit ('Confirmar', ['class' => 'btn btn-success']) !!}
            </div>
        </div>
        {!!Form::close()!!}
    </div>
</div>