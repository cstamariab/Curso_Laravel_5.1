@extends('admin.template.main')
@section('title','Crear usuario')

@section('content')

	{!! Form::open(['route'=> 'admin.users.store','method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('name','Nombre'); !!}
			{!! Form::text('name',null,['class' => 'form-control','placeholder'=>'Ingrese nombre'],'required'); !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Email'); !!}
			{!! Form::email('email',null,['class' => 'form-control','placeholder'=>'Example ccc@cc.cl'],'required'); !!}
		</div>
		<div class="form-group">
			{!! Form::label('password','Password'); !!}
			{!! Form::password('password',['class' => 'form-control','placeholder'=>'***********'],'required'); !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('type','Tipo'); !!}
			{!! Form::select('type',[''=>'Selecione un nivel','member'=> 'Miembro','admin'=>'Administrador'],null,['class'=>'form-control']); !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar',['class'=>'btn btn-primary']); !!}
		</div>


	{!! Form::close() !!}

@endsection