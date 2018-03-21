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
			<td><button>Editar</button>
				<button>Eliminar</button></td>
		</tr>
		@endforeach
	</tbody>
</table>

{!! $empleado->links() !!}