@if(count($errors) > 0)
	@foreach($errors->all() as $error)
		<div class = "notification is-warning">
			{{$error}}
		</div>
	@endforeach
@endif

@if(session('success'))
	<div class = "notification is-success">
		{{session('success')}}
	</div>
@endif

@if(session('error'))
	<div class = "notification is-warning">
		{{session('error')}}
	</div>
@endif