@extends('layouts.template')

@section('content')
	<div class = "container">
		<h4 class = "title is-4 has-text-centered">Pembayaran</h4>
        @if($transaction->level == 1)
		<h6 class = "subtitle is-6 has-text-centered">Pembayaran harus dilunasi maksimal 2 hari setelah pemesanan</h6>
        <h3 class="subtitle is-3 has-text-centered">Batas Waktu</h3>
        <h3 class="title is-3 has-text-centered" id="batashari">{{date('Y-m-d h:i:s', strtotime($transaction->created_at. ' + 2 days'))}} </h3>

        <div class="container">
            <div class="notification">
                <h1 class="title is-1 has-text-centered" id="clock"></h4>
            </div>
        </div>
        <br>   
        @elseif($transaction->level > 1)
            <div class="container">
                <div class="notification">
                    <h1 class="title is-1 has-text-centered">
                    @if($transaction->level == 2)
                        Sedang Menunggu Konfirmasi
                    @elseif($transaction->level == 3)
                        Sedang Dalam Pengiriman
                    @elseif($transaction->level == 4)
                        Sedang Dalam Peminjaman
                    @else
                        Transaksi Telah Selesai
                    @endif
                    </h1>
                </div>
            </div>
        @else
            <div class="container">
                <div class="notification">
                    <h1 class="title is-1 has-text-centered">Transaksi Dibatalkan</h1>
                </div>
            </div>
        @endif
        <div class="box" style="display: block; width: inherit;">
            <article class="media">
                <div class="media-left">
                    <figure class="image is-128x128">
                        <img src="{{ asset('images/'.$transaction->items->imagename) }}" alt="Image">
                    </figure>
                    </div>
                    <div class="media-content">
                    <div class="content">
                        <p>
                        <strong>Menyewa</strong> | <small class="has-text-success">Invoice</small>
                        <br>
                        <p>Total :  <strong class="has-text-warning">Rp {{number_format($transaction->items->harga * $transaction->qty , 0, ",", ".")}},- </strong></p>
                        <p>Banyak pemesanan: {{$transaction->qty}}</p>
                        <p>Pesan: {{$transaction->catatan}}</p>
                        </p>
                    </div>
                </div>
            </article>
        </div>

        <br>
        @if($transaction->level == 1)
        <h6 class = "subtitle is-6">Transfer pembayaran ke nomor Virual Account : </h6>
        <div class = "centered">
            <article class="media">
                <div class="media-left">
                	<figure class="image is-64x64">
                		<img src="{{ asset('images/bca.png') }}" alt="Image">
                	</figure>
                </div>
                <div class="media-content">
                	<div class="content">
                		<p>
                			<strong>XXXXX-XXXXXXXXXXXX</strong>
						</p>
                	</div>
                </div>
            </article>
        </div>
        @endif
	</div>
@endsection
<script>
    
    function countDate(){
            var countDownDate1 = document.getElementById("batashari").innerHTML;

            var dt = new Date(countDownDate1);
            var countDownDate = dt.getTime();
            var now = new Date().getTime();
            
            var distance = countDownDate - now;
            
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            document.getElementById("clock").innerHTML = ("00" + days).slice(-2) + " Day - " + ("00" + hours).slice(-2) + " : "
            + ("00" + minutes).slice(-2) + " : " + ("00" + seconds).slice(-2);
            
            if (distance < 0) {
            clearInterval(x);
            document.getElementById("clock").innerHTML = "TRANSACTION EXPIRED";
            }
    }

    var x = setInterval(countDate, 1000);
</script>