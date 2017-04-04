@extends('layouts.admin')

@section('content')
 
                 <div class="col-md-5"> 
                   <div class="panel panel-default">
                     <div class="panel-heading"><h3> Usuario {{$user->id}}</h3>  </div>
                       <div class="panel-body">
                         <div class="col-md-5">
                           <h3>{{$user->name}} </h3>
                 	       <h4> {{$user->email}}</h4>
                            <a href="{!!URL::to('usuario')!!}" class="btn btn-default active"> <i class="fa fa-long-arrow-left fa-fw" aria-hidden="true"></i></a>      	
                         </div>
                      
                      </div>

                 </div>
            </div>
        
@stop