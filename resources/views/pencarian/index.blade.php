@extends('layouts.template')

@section('content')
	<div class="container">
		<div class="field is-horizontal">
		 	<div class="field-label is-normal">
				<label class="label">Aku Ingin Mencari</label>
			</div>
			<div class="field-body">
				<div class="field">
					<input class="input" type="email" placeholder="" style="width: 60%;">
				</div>
			</div>
		</div>
		@if(count($items) > 0)
			@foreach($items as $item)
				<a href = "/pencarian/{{$item->slug}}">
					<div class="box small-pad">
						<img src = "{{ asset('images/'.$item->imagename) }}" alt="No Image Available" class="fit-300">
						<p><strong>{{$item->nama}}</strong></p>
						<p>Rp {{number_format($item->harga, 0, ",", ".")}} / satuan</p>
					</div>
				</a>
			@endforeach
		@else
		Sorry no item added
		@endif
	</div>
@endsection
