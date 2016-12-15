@extends('admin.template.main')
@section('title','Lista de usuarios')

@section('content')

	<a href="{{ route('admin.users.create') }}" class="btn btn-info">Registrar nuevo usuario</a>
	<hr>
	<table class="table table-striped">
		<thead>
			<th class="text-center">ID</th>
			<th class="text-center">Nombre</th>
			<th class="text-center">Email</th>
			<th class="text-center">Tipo</th>
			<th class="text-center">Acciones</th>
		</thead>
		<tbody>
			@foreach ($users as $user)
			<tr>
				<td class="text-center">{{$user->id}}</td>
				<td class="text-center">{{$user->name}}</td>
				<td class="text-center">{{$user->email}}</td>
				<td class="text-center">
					@if ($user->type == 'admin')
						<span class="label label-danger">{{$user->type}}</span>
					@else
						<span class="label label-primary">{{$user->type}}</span>
					@endif
				</td>
				<td class="text-center">
				 <a href="{{ route('admin.users.edit',$user->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>

				 <a href="{{route('admin.users.destroy',$user->id)}}" onclick="return confirm('Seguro desea eliminar este usuario ?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a> 				
				</td>				
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $users->render() !!}
	</div>	
@endsection