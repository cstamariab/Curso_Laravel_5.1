@extends('admin.template.main')
@section('title','Lista de usuarios')

@section('content')
	<a href="{{ route('admin.users.create') }}" class="btn btn-info">Registrar nuevo usuario</a>
	<hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Tipo</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach ($users as $user)
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>
					@if ($user->type == 'admin')
						<span class="label label-danger">{{$user->type}}</span>
					@else
						<span class="label label-primary">{{$user->type}}</span>
					@endif
				</td>
				<td><a href="" class="btn btn-danger">Eliminar</a> / <a href="" class="btn btn-warning">Editar</a></td>				
			</tr>
			@endforeach
		</tbody>
	</table>
	{!! $users->render() !!}
	<hr>
	<div class="jumbtron">
		<h1>Hola mi amor</h1>
	</div>
@endsection