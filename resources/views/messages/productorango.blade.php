@extends('layout')
@section('contenido')
<h1>Todos Los Mensajes</h1>
<table width="100%" border="1">
	<thead>
		<tr>
			<th>tipoproducto_id</th>
			<th>fasefenologica_id</th>
			<th>elementos_id</th>
			<th>unidaddemedida_id</th>
			<th>valorminimo</th>
	  	<th>valormaximo</th>
			<th>estaactivo</th>
		</tr>

	</thead>
	<tbody>
		@foreach($ProductoFaseElementoRangos as $message)
		<tr>


			<td>{{$message->tipoproducto_id}}</td>
			<td>{{$message->fasefenologica_id}}</td>
			<td>{{$message->elementos_id}}</td>
					<td>{{$message->unidaddemedida_id}}</td>
							<td>{{$message->valorminimo}}</td>
									<td>{{$message->valormaximo}}</td>
											<td>{{$message->estaactivo}}</td>
	<td>
		<a href="{{route('mensajes.edit',$message->tipoproducto_id)}}">Editar</a>
		<form style="display: inline" method="POST" action="{{route('mensajes.destroy',$message->tipoproducto_id )}}">
	{!! method_field('DELETE')!!}
    {!! csrf_field()!!}



		</form>


	</td>

		</tr>
		@endforeach
	</tbody>
</table>
@stop
