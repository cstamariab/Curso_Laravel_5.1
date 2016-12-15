
@if (count($errors) > 0)		
		@foreach ($errors->all() as $error)
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<ul>
					<li>
						 {{ $error }}
					</li>
				</ul>
			</div>
		@endforeach
@endif
@if(session()->has('flash_notification.message'))
    <div class="alert alert-{{ session('flash_notification.level') }}">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {!! session('flash_notification.message') !!}
    </div>
@endif