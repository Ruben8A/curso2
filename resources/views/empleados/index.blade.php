<h1>Empleados</h1>

<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($empleado as $usuario)
		<tr>
			<td>{!! $usuario->matricula !!}</td>
			<td>{!! $usuario->paterno !!}
			{!! $usuario->materno !!}
			{!! $usuario->nombre !!}</td>
			<td>
				<a href="/empleados/{!!$usuario->id!!}/edit">editar</a>
				{!! Form::open(['route'=>['empleados.destroy',$usuario->id],'method' => 'DELETE'])!!}
				{!! Form::submit('Eliminar',['class' => 'btn btn-xs btn-danger'])!!}

				{!!Form::close()!!}
		</tr>
		@endforeach
	</tbody>
</table>

{!! $empleado->links() !!}