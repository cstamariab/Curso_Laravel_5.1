@extends('admin.template.main')

@section('title','Login Panel de Administracion')

@section('content')
	<!-- resources/views/auth/login.blade.php -->
		<form method="POST" action="{{ route('auth.login') }}">
		    {!! csrf_field() !!}

		    <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
			    <div class="col-sm-10">
			      <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="inputEmail3" placeholder="Email">
			    </div>
			</div>
			<br>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			    <div class="col-sm-10">
			      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <div class="checkbox">
			        <label>
			          <input type="checkbox" name="remember"> Recordar
			        </label>
			      </div>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-success">Ingresar</button>
			    </div>
			  </div>
		</form>
@endsection