@extends('admin.template.main')
@section('title','Editar usuario '.$user->name)

@section('content')

	{!! Form::open(['route'=> ['admin.users.update',$user->id],'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('name','Nombre'); !!}
			{!! Form::text('name',$user->name,['class' => 'form-control','placeholder'=>'Ingrese nombre'],'required'); !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Email'); !!}
			{!! Form::email('email',$user->email,['class' => 'form-control','placeholder'=>'Example ccc@cc.cl'],'required'); !!}
		</div>
			
		<div class="form-group">
			{!! Form::label('type','Tipo'); !!}
			{!! Form::select('type',[''=>'Selecione un nivel','member'=> 'Miembro','admin'=>'Administrador'],null,['class'=>'form-control']); !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar',['class'=>'btn btn-primary']); !!}
		</div>


	{!! Form::close() !!}

@endsection