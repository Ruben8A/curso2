

{!! Form::model($empleado,['action' => 'EmpleadoController@store']) !!}
	{!! csrf_field() !!}
	<div class="form-group">
		{!! Form::label ('matricula','Matricula') !!}
		{!! Form::text ('matricula',old('matricula'), ['class' => 'form-control'] )!!}
	</div>

	<div class="form-group">
		{!! Form::label ('paterno','Paterno') !!}
		{!! Form::text ('paterno',old('paterno'), ['class' => 'form-control'] )!!}
	</div>

	<div class="form-group">
		{!! Form::label ('materno','Materno') !!}
		{!! Form::text ('materno',old('materno'), ['class' => 'form-control'] )!!}
	</div>

	<div class="form-group">
		{!! Form::label ('nombre','Nombre') !!}
		{!! Form::text ('nombre',old('nombre'), ['class' => 'form-control'] )!!}
	</div>

	<div class="form-group">
		{!! Form::label ('fecha_nacimiento','fecha_nacimiento') !!}
		{!! Form::text ('fecha_nacimiento',old('fecha_nacimiento'), ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label ('sexo','sexo') !!}
		{!! Form::select ('sexo',$sexos,'', ['class' => 'form-control'] )!!}
	</div>

	<div class="form-group">
		{!! Form::label ('id_turno','id_Turno') !!}
		{!! Form::select ('id_turno',$turnos,'', ['class' => 'form-control'] )!!}
	</div>

	<div class="form-group">
		{!! Form::label ('id_departamento','id_departamento') !!}
		{!! Form::select ('id_departamento',$departamento,'', ['class' => 'form-control'] )!!}
	</div>

	{!! Form::submit('Guardar') !!}

<!--<form method="post" action="/empleados/store">
	{{ csrf_field() }}

	<label>Matricula</label>
	<input type="text" name="matricula">

	<label>Paterno</label>
	<input type="text" name="paterno">

	<label>Materno</label>
	<input type="text" name="materno">

	<label>Nombre</label>
	<input type="text" name="nombre">

	<input type="submit" name="Enviar" value="Enviar">
</form>-->