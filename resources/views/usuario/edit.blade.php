@extends('layouts.admin')

@section('content')
 
<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel"></div>
                <div class="panel-body">
                 {{-- #Para actualizar user --}}  
                 {!!Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT','class'=>'form-horizontal']) !!}
                     
                     @include('usuario.forms.usr')

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
                                <a href="/usuario/delete/{{$user->id}}" class="btn btn-danger"> <i class="fa fa-trash fa-fw" aria-hidden="true"></i>Eliminar</a>

                            </div>

                        </div>
                   {!! Form::close()!!}
                
               
                 

                 </div>
            </div>
        </div>
    </div>
</div>

@stop