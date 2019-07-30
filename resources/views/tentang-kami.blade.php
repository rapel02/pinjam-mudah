<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

    </head>
    <body>
        @include('layouts.header')
        <section class="hero-wrap" style="background-image: url({{ asset('images/bg02-1.png') }})"; height: 600px;">
        	<div class="container">
				<div style="height: 600px;">
					<img src="{{ asset('images/pinjam-mudah-white.png') }}" style="position: absolute; top: 15%; transform: translate(-5%,0%); height: 25%;">
					<h2 class="subtitle is-2" style="color: #f3f3f3; position: absolute; top: 38%; transform: translate(0%, 30%);">Mudah Khilaf? Pinjam Saja</h2>
					<a class="button is-link is-inverted is-outlined" style="position: absolute; top: 50%; transform: translate(0%, 30%);" href="/pencarian"><strong>Lihat Barang</strong></a>
				</div>
	        </div>
		</section>
		<div class="container" id = "contains">
			<div class = "columns" id = "floating">
                <div class = "column is-3 is-offset-1 boxes has-text-centered">
                    <br>
                    <img alt="logo" src = "{{asset('images/icon/shopping-purse-icon.png')}}" class="fit-60">
                    <br><br>
                    <strong>BIAYA MURAH</strong>
                    <br><br>
                    Kami percaya bahwa tidak semua barang yang diinginkan harus dibeli. Dengan prinsip berbagi, semua orang dapat memenuhi kebutuhannya.
                    <br><br>
                </div>
                <div class = "column is-3 is-offset-1 boxes has-text-centered">
                    <br>
                    <img alt="logo" src = "{{asset('images/icon/user-avatar-main-picture.png')}}" class="fit-60">
                    <br><br>
                    <strong>RESPON CEPAT</strong>
                    <br><br>
                    Kami percaya bahwa kepuasan pengguna adalah hal yang terpenting. Oleh sebab itu, kami selalu sigap dalam membantu pengguna yang memerlukan bantuan.
                    <br><br>
                </div>
                <div class = "column is-3 is-offset-1 boxes has-text-centered">
                    <br>
                    <img alt="logo" src = "{{asset('images/icon/sharing-interface.png')}}" class="fit-60">
                    <br><br>
                    <strong>MUDAH DIGUNAKAN</strong>
                    <br><br>
                    Kami percaya bahwa kenyamanan dapat memberikan dampak kepada kepuasan pengguna. Kami selalu menerima masukan yang membangun untuk kenyamanan bersama.
                    <br><br>
                </div>
            </div>
		</div>
        <div id="zero-space"></div>
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

        <div class="control has-text-centered" style="background-color: #fafafa;">
            <br>
            <p class="title is-4 heading">Hubungi Kami</p>
            <hr>
            <div class="columns">
                <div class="column is-4 is-offset-2 box" align="right" style="background-color:#DCDCDC;">
                    <form>
                        <div class="form-group row">
                            <input class="input is-primary" required autofocus placeholder="Nama">
                        </div>
                        <br>
                        <div class="form-group row">
                            <input type="email" class="input is-primary" required placeholder="E-mail">
                        </div>
                        <br>
                        <div class="form-group row">
                            <input type="text" class="input is-primary" required placeholder="Subyek">
                        </div>
                        <br>
                        <textarea class="textarea" placeholder="Pesan" required=""></textarea>
                        <br>
                        <div class="form-group row mb-0">
                            <button type="submit" class="button is-info">
                                {{ __('Kirim Pesan') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="column is-6" align="left" style="padding-left: 20px; margin-left: 20px;">
                    <img alt="logo" src = "{{asset('images/icon/map-pin-marked.png')}}" class="fit-30">
                    <strong> K. H. Pals Syahdan no 9, Kebon Apel, Jakarta, Indonesia </strong>
                    <br><br>
                    <img alt="logo" src = "{{asset('images/icon/facebook-logo-button.png')}}" class="fit-30">
                    <strong> Pinjam Mudah</strong>
                    <br><br>
                    <img alt="logo" src = "{{asset('images/icon/twitter-logo-button.png')}}" class="fit-30">
                    <strong> Pinjam Mudah</strong>
                    <br><br>
                    <img alt="logo" src = "{{asset('images/icon/instagram-logo.png')}}" class="fit-30">
                    <strong> @Pinjam_Mudah</strong>
                    <br><br>
                </div>
            </div>
            <br>
        </div>
        <div class="has-text-centered">Icons made by <a href="https://www.flaticon.com/authors/bogdan-rosu" title="Bogdan Rosu">Bogdan Rosu</a> from <a href="https://www.flaticon.com/"              title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"              title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
        @include('layouts.footer')
    </body>
</html>
<style type="text/css">

.fit-60{
    width:60px; 
    height:60px; 
    object-fit: scale-down;
}
.fit-30{
    width:30px; 
    height:30px; 
    object-fit: scale-down;
}
.hero-wrap {
	position: inherit;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}

.is-link{
	color: #364f6b;
}


#floating{
    position: absolute;
    width: 100%;
    height: 300px;
    transform: translateY(-50%);
}

.boxes{
    background-color: #fefefe;
    border-radius: 5px;
}
#zero-space{
    height: 200px;
    background-color: #f8f9fa;
}

.no-color{
    color:inherit;
    text-decoration: none;
}
.no-color:hover{
    color:inherit;
    text-decoration: none;
}
</style>