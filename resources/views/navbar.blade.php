<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="{{ url('/') }}"><img class="logo" src="{{ asset('img/Logo.png') }}" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <div class="search">
            <ul class="navbar-nav mr-auto">
                <form class="form-inline my-2 my-lg-0" method="POST" action="/cari">
                    @csrf
                    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-pusgo my-2 my-sm-0" type="submit"><i
                            class="bi bi-search"></i></button>
                </form>
            </ul>
        </div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/data-pasien') }}">
                    <p style="color: #006a4e;">Pasien</p>
                </a>
            </li>
            <li class="nav-item ml-2">
                <a class="nav-link" href="{{ url('/data-dokter') }}">
                    <p style="color: #006a4e;">Dokter</p>
                </a>
            </li>
        </ul>
    </div>
</nav>