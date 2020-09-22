<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="my-container d-flex">
        <a class="navbar-brand" href="/"><b>PJU</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item mr-2">
                    <a class="nav-link" href="{{route('index')}}">Beranda</a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" href="{{route('sudahDiperbaiki')}}">Sudah Diperbaiki</a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" href="{{route('belumDiperbaiki')}}">Belum Diperbaiki</a>
                </li>
            </ul>
        </div>
    </div>
</nav>