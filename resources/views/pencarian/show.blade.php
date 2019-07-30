@extends('layouts.template')

@section('content')
	<div class="container">
		<h3 class = "title is-3">{{$item->nama}}</h3>
		<div class="columns">
		 	<div class="column is-two-thirds" >
		 		<div class="columns">
		 			<div class="column is-one-third">
						<img src = "{{ asset('images/'.$item->imagename) }}" width=200px alt="No Image Available">
					</div>
					<div class="column">
						<h5 class = "title is-5 "> Rating: {{$item->rating}} / 5</h5>
						<h5 class = "title is-5 inline-block">Deskripsi</h5>
						<div class = "box block">
							<p class="subtitle is-6">{{$item->deskripsi}}</p>
						</div>
					</div>
				</div>
				<br><br>
				<h5 class = "title is-5">Review</h5>
				@if(count($reviews) > 0)
					@foreach($reviews as $review)
						<div class="box block">
							<div class="columns">
								<div class="column is-2">
								<figure class="image is-64x64">
			                        <img src="{{ asset('images/no-image.png') }}" alt="No Image Found">
			                    </figure>
				                </div>
				                <div class="column">
			                    <strong>{{$review->user->name}}</strong>
			                    <br>
								{{$review->content}}
							</div>
							</div>
						</div>
					@endforeach
				@else
					<p class="subtitle is-6">Belum ada review</p>
				@endif
		 	</div>
			<div class="column is-6">
				<div class = "box" style="width: inherit; display: block;">
					<figure class="image is-64x64">
                        <img src="{{ asset('images/no-image.png') }}" alt="No Image Found">
                    </figure>
					Produk dari <strong>{{$item->userborrower->nama}}</strong>
					<br>
					Lokasi <strong>{{$item->userborrower->location}}</strong>
				</div>
				<div class="box" style="width: inherit; display: block; ">
					<p>Tersedia: {{$item->qty}}</p>
					<p>Rp {{number_format($item->harga, 0, ",", ".")}} per satuan</p>
					<form action="/pencarian/{{$item->slug}}/verify" method="GET">
					    @csrf
						   <div class="field">
						  	<label class="label">Catatan</label>
						  	<div class="control">
						    	<input class="input" type="text" placeholder="Catatan" name="catatan">
						  	</div>
						</div>
						<div class="field">
						  	<label class="label">Jumlah</label>
						  	<div class="control">
						    	<input class="input" type="text" placeholder="Jumlah" name="jumlah">
						  	</div>
						</div>
						<button type="submit" class="button block" style="background-color: #364f6b; color:#fafafa;">
		                    <strong>Pinjam</strong>
		                </button>
				    </form>
				</div>
			</div>
		</div>
	</div>
@endsection
