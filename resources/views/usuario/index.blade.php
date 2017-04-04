@extends('layouts.admin')
@if(Session::has('message'))
   <div class="panel-body">
     <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         {!! Session::get('message')!!}
      </div>
   </div>
@endif


@section('content')
<div class="table-responsive">
<table class="table table-hover">
	<thead>
		<th>Nombre</th>
		<th>Correo</th>
		<th>Opciones</th>
	</thead>
	@foreach($users as $user) 
	<tbody>
		<td>{{$user->name}}</td>
		<td>{{$user->email}}</td>
		<td>
			<a href="/usuario/{{$user->id}}" class="btn btn-info"> <i class="fa fa-eye" aria-hidden="true"></i></a>	
			<a href="/usuario/{{$user->id}}/edit" class="btn btn-primary"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
			<a href="/usuario/delete/{{$user->id}}" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i></a>

		</td>
		
	</tbody>
	@endforeach
</table>
{{ $users->links() }}
</div>	

@stop