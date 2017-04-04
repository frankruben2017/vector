@extends('layouts.principal')

@section('content')
        
   <div class="container">
         <div class="row">
            <div class="col-md-12 ">
                 <div class="page-header">
                    <div class="row">
                        
                    <div class="col-md-7 col-md-offset-5">
                        <h1> Registrarse</h1>
                    </div>
                    </div>
                 </div>
            </div>
           
         </div>
     </div>
   



        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel"></div>
                <div class="panel-body">
                   {!!Form::open(['route'=>'register','method'=>'POST','class'=>'form-horizontal','style'=>"margin: 2%"]) !!}
                        
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
