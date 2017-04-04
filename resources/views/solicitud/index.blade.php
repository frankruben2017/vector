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
		<th>Solicitud</th>
		<th>Nombre del catalogo</th>
		<th>Monto</th>
		<th>Plazo</th>
		<th>Usuario</th>
		<th>Opciones</th>

	</thead>
	@foreach($solicituds as $solicitud) 
	@foreach($cataloges as $cataloge)
	<tbody>
		<td>{{$solicitud->name}}</td>
		<td>{{$cataloge->product_name}}</td>
		<td>{{$cataloge->monto}}</td>
		<td>{{$cataloge->plazo_to_pay}}</td>
		<td>{{$solicitud->user_id}}</td>
		<td>
			<a href="/cataloge/{{$solicitud->id}}" class="btn btn-info"> <i class="fa fa-eye" aria-hidden="true"></i></a>	
			<a href="/cataloge/{{$solicitud->id}}/edit" class="btn btn-primary"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
{{-- 			<a href="/cataloge/delete/{{$solicitud->solicitud_id}}" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i></a>
 --}}
		</td>
		
	</tbody>
	@endforeach
	@endforeach
</table>
{{ $solicituds->links() }}
</div>	

@stop