<!--Modal para adicionar categoria-->
<div class="modal fade" aria-hidden="true" role="dialog" tabindex="-1" id="modal-add" >
    <div class="modal-dialog" role="document">
        {!! Form::open(['route' => 'categorias.store']) !!}
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
                    {!! Form::label('description', 'Descrição :') !!}
                    {!! Form::text('description', null, ['class'=>'form-control']) !!}
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