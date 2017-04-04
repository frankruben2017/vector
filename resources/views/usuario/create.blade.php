@extends('layouts.admin')

@section('content')
        
  <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel"></div>
                <div class="panel-body">
                   {!!Form::open(['route'=>'usuario.store','method'=>'POST','class'=>'form-horizontal','style'=>"margin: 2%"]) !!}
                        
                         @include('usuario.forms.usr')
                       
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                            </div>
                        </div>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

