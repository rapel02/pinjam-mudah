@extends('layouts.template')

@section('content')
	<div class = "container">
		<div class = "columns is-mobile">
			<div class = "column">
				<p class="title is-3">Histori Transaksi</p>
				<hr>
				@if(count($transactions) > 0)
				@foreach($transactions as $transaction)
					<div class="box" style="width: 100%;">
						<div class="level is-mobile">
							<div class="level-left">
							    <div class="level-item">
							    	<figure class="image is-64x64">
				                        <img src="{{ asset('images/'.$transaction->items->imagename) }}" alt="No Image Found">
				                    </figure>
								</div>
							    <div class="level-item">
							    	<div>
								    	<p class = "title is-5">
								    		{{$transaction->items->nama}}
								    	</p>
								    	<p>
								    		Jumlah Pesanan: {{$transaction->qty}}
								    	</p>
								    	<p>
								    		Tanggal Pemesanan: {{$transaction->created_at}}
								    	</p>
								    	<p>
								    		Penyedia: {{$transaction->items->userborrower->nama}}
								    	</p>
							    	</div>
							    </div>
						  	</div>
							<div class="level-right">
								<div class="level-item">
									<div>
									    @if($transaction->level == 1)
									    	<span class="tag is-warning is-medium">Menunggu Pembayaran</span>
									    @elseif($transaction->level == 2)
									    	<span class="tag is-info is-medium">Menunggu Konfirmasi</span>
									    @elseif($transaction->level == 3)
									    	<span class="tag is-light is-medium">Dalam Pengiriman</span>
									    @elseif($transaction->level == 4)
									    	<span class="tag is-link is-medium">Dalam Peminjaman</span>
									    @elseif($transaction->level == 5)
									    	<span class="tag is-success is-medium">Transaksi Selesai</span>
									    @elseif($transaction->level == 0)
									    	<span class="tag is-danger is-medium">Transaksi Batal</span>
									    @endif
									    <br><br>
									    <div style="text-align: right;">
										    <a class="button is-primary is-outlined" href="/transaksi/transaksiku/{{$transaction->id}}"> Detil Transaksi
										    </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<p class = "title is-6">Catatan Terhadap Penyedia: </p>
						<p class = "subtitle is-6">
							{{$transaction->catatan}}
						</p>
					</div>
					<br>
				@endforeach
				@else 
					<p>Anda belum melakukan transaksi</p>
				@endif
			</div>
		</div>
	</div>
@endsection
