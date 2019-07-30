@extends('layouts.template')

@section('content')
	<div class = "container">
		<h3 class="title is-3 has-text-centered">Konfirmasi Pembayaran</h3>
		<hr>
		<div class="columns is-mobile">
			<div class="column is-two-third" style="position: relative;">
				<img src = "{{ asset('images/'.$item->imagename) }}" width="40%" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);alt="No Image Available">
			</div>
			<div class="column">
				<div class="box block">
					<div class="field">
				  	<label class="label">Benda</label>
					  	{{$item->nama}}
					</div>
					<div class="field">
						<label class="label">Catatan</label>
						{{$catatan}}
					</div>
					<div class="field">
					  	<label class="label">Jumlah</label>
					  	{{$jumlah}}
					</div>
					<div class="field">
					  	<label class="label">Harga</label>
					  	{{$jumlah}} x Rp {{number_format($item->harga, 0, ",", ".")}} = Rp {{number_format($biaya, 0, ",", ".")}}
					</div>
				</div>
			<form action="/pencarian/{{$item->slug}}/payment" method="GET">
			    @csrf
				<input class="input" type="text" value="{{$catatan}}" name="catatan" style="display: none;">
				<input class="input" type="text" value="{{$jumlah}}" name="jumlah" style="display: none;">
				<button type="submit" class="button block" style="background-color: #364f6b; color:#fafafa;">
	                <strong>Pesan</strong>
	            </button>
		    </form>
		    <br>
		    <form action="/pencarian/{{$item->slug}}" method="GET">
				<button type="submit" class="button is-light block">
	                <strong>Kembali</strong>
	            </button>
		    </form>
			</div>
		</div>
	</div>
@endsection
