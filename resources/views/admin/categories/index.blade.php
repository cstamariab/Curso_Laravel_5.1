@extends('admin.template.main')
@section('title','Lista de categorias')

@section('content')

	<a href="{{ route('admin.categories.create') }}" class="btn btn-info">Nueva categoria</a>
	<hr>
	<table class="table table-striped">
		<thead>
			<th class="text-center">ID</th>
			<th class="text-center">Nombre</th>
			<th class="text-center">Acciones</th>
		</thead>
		<tbody>
			@foreach ($categories as $category)
			<tr>
				<td class="text-center">{{$category->id}}</td>
				<td class="text-center">{{$category->name}}</td>				
				<td class="text-center">
				 <a href="{{ route('admin.categories.edit',$category->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>

				 <a href="{{route('admin.categories.destroy',$category->id)}}" onclick="return confirm('Seguro desea eliminar esta categoria ?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a> 				
				</td>				
			</tr>
			@endforeach
		</tbody>
	</table>
	{{-- ENCARGADO DE REALIZAR LA PAGINACION DE LA TABLA --}}
	{!! $categories->render() !!}
	<hr>

@endsection