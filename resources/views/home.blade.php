@extends('layouts.template')

@section('content')
	<div class = "container">
		<h3 class = "title is-3 has-text-centered">Produk Favorit</h3>
		<hr>
		@foreach($items as $item)
			<a href = "/pencarian/{{$item->slug}}">
				<div class="box mobile mid-pad">
					<img src="{{ asset('images/'.$item->imagename) }}" alt="No Image Available" class = "fit-300">
					<p><strong>{{$item->nama}}</strong></p>
					<p>Rp {{number_format($item->harga, 0, ",", ".")}} / satuan</p>
				</div>
			</a>
		@endforeach
	</div>
		<div class="has-text-centered" style="background-color: #ececec;">
			<br>
			<h2 class = "title is-h2">Apa itu Pinjam Mudah?</h2>
			<br>
			<div style="font-size: 1.2em;">
				Pinjam Mudah merupakan sebuah ide bisnis yang bertujuan sebagai sebuah <i>marketplace</i> untuk mempertemukan pihak peminjam barang serta pihak penyedia barang melalui sebuah <i>platform</i> berbasis internet.
				<br><br>
				Kami menawarkan keuntungan bagi kedua belah pihak. Untuk peminjam barang, tentunya pengguna akan mendapatkan tempat untuk mencari barang kebutuhannya. Selain itu, dengan meminjam tentunya pengeluaran yang dihasilkan akan lebih kecil bila dibandingkan pembelian.
				<br><br>
				Di sisi lain, penyedia barang dapat memperoleh keuntungan dari Pinjam Mudah. Penyedia barang dapat memperoleh pemasukan tambahan dalam kegiatan meminjamkan barang. Selain itu, penyedia barang dapat membantu orang-orang yang membutuhkan barang yang tidak atau jarang dipakai.
			</div>
			<br>
		</div>
@endsection