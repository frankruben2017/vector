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
		<th>Descripcion</th>
		<th>Monto</th>
		<th>Plazo a Pagar</th>
		<th>Opciones</th>
	</thead>
	@foreach($cataloges as $cataloge) 
	<tbody>
		<td>{{$cataloge->product_name}}</td>
		<td>{{$cataloge->description}}</td>
		<td>{{$cataloge->monto}}</td>
		<td>{{$cataloge->plazo_to_pay}}</td>
		<td>
			<a href="/cataloge/{{$cataloge->id}}" class="btn btn-info"> <i class="fa fa-eye" aria-hidden="true"></i></a>	
			<a href="/cataloge/{{$cataloge->id}}/edit" class="btn btn-primary"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
 			<a href="/solicitud/crear_solicitud/{{$cataloge->id}}" class="btn btn-success">Crear Solicitud</a>
 
		</td>
		
	</tbody>
	@endforeach
</table>
{{ $cataloges->links() }}
</div>	

@stop