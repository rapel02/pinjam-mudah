<nav class="navbar mobile" role="navigation" aria-label="main navigation" style="background-color: #fafafa; position: sticky; top: 0px;">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <img alt="logo" src = "{{ asset('images/pinjam-mudah.png') }}">
        </a>
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample" onclick="changeMenu()">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="/">
                Menu Utama
            </a>
            <a class="navbar-item" href="/pencarian">
                Pencarian
            </a>
        </div>
    
        <div class = "navbar-item navbar-end">
            @guest
            <div class="navbar-start">
                <p class="control">
                    <a class="button is-inverted is-info" href="{{route('login')}}">Masuk</a>
                </p>
                <p class="control">
                    <a class="button" href="{{ route('register') }}">Daftar</a>
                </p>
            </div>
            @else
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link is-inverted is-info">
                  {{ Auth::user()->name }}
                </a>
                <div class="navbar-dropdown">
                    <a class="navbar-item" href="/transaksi/transaksiku">
                        Histori Transaksi
                    </a>
                </div>
                <p class="control">
                    <a class="button is-link is-inverted" href="{{ route('logout') }}"onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">Keluar</a>
                </p>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
        </div>
    </div>
</nav>
<script type="text/javascript">
    function changeMenu() {
        let allClass = document.getElementsByClassName("navbar-menu");
        console.log(allClass);
        for(let i = 0;i < allClass.length;i++) {
            let obj = allClass[i];
            if(obj.style.display == "block") obj.style.display = "none";
            else obj.style.display = "block";
        }
    }
</script>