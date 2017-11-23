<!--Modal para deletar mesa-->
<div class="modal fade" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$mes->id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Remover</h4>
            </div>
            <div class="modal-body">
                <p>Você realmente deseja remover a mesa {{$mes->description}}?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                {!!Form::open(['method' => 'GET', 'url' => '/mesas/'.$mes->id.'/destroy', 'style' =>  'display: inline;']) !!}
                {!! Form::submit('Confirmar', ['class' => 'btn btn-danger']) !!}
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>

<!--Modal para alterar mesa-->
<div class="modal fade" aria-hidden="true" role="dialog" tabindex="-1" id="modal-edit-{{$mes->id}}">
    <div class="modal-dialog" role="document">
        {!!Form::open(['method' => 'put', 'url' => "/mesas/".$mes->id.'/update','style' =>  'display: inline;']) !!}
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
                    {!! Form::label('description', 'Descrição :') !!}
                    {!! Form::text('description', $mes->description, ['class'=>'form-control']) !!}
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