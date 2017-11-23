<!--Modal para deletar categoria-->
<div class="modal fade" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$pro->id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Remover</h4>
            </div>
            <div class="modal-body">
                <p>Você realmente deseja remover o produto {{$pro->description}}?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                {!!Form::open(['method' => 'GET', 'url' => '/produtos/'.$pro->id.'/destroy', 'style' =>  'display: inline;']) !!}
                {!! Form::submit('Confirmar', ['class' => 'btn btn-danger']) !!}
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>



<!--Modal para alterar categoria-->
<div class="modal fade" aria-hidden="true" role="dialog" tabindex="-1" id="modal-edit-{{$pro->id}}">
    <div class="modal-dialog" role="document">
        {!!Form::open(['method' => 'put', 'url' => "/produtos/".$pro->id.'/update','style' =>  'display: inline;']) !!}
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

                {!! Form::open(['route' => 'produtos.store']) !!}
                <div class="form-group">
                    {!! Form::label('description', 'Descrição :') !!}
                    {!! Form::text('description', $pro->description, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('price', 'Preço :') !!}
                    {!! Form::text('price', $pro->price, ['class'=>'form-control']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('categoria_id', 'Categoria :') !!}
                    {{ Form::select('categoria_id',
                        \App\Categoria::orderBy('description')->pluck('description','id')->toArray(),$pro->categoria_id,['class'=>'form-control'])}}
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