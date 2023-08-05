
<link rel="stylesheet" href="assets/css/partials/navbar-non-user.css">

<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand logo" href="#"><img src="assets/img/logo.png" width="150px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            {{-- <span class="navbar-toggler-icon"></span> --}}
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ ($title === 'beranda') ? 'font-underline' : '' }}" href="/beranda">Beranda</a>
                <a class="nav-link {{ ($title === 'Talent Hunter') ? 'font-underline' : '' }}" href="/talentHunter">Talent Hunter</a>
                <a class="nav-link {{ ($title === 'Tips Kerja') ? 'font-underline' : '' }}" href="/tipsKerja">Tips Kerja</a>
                <a class="nav-link {{ ($title === 'Daftar Kandidat') ? 'font-underline' : '' }}" href="daftarKandidat">Daftar Kandidat</a>
                <a class="nav-link {{ ($title === 'Pasang Lowongan') ? 'font-underline' : '' }}" href="pasangLowongan">Pasang Lowongan</a>
                
            </div>
            <button type="button" class="btn ml-auto"
                    style="background-color: rgba(242, 100, 25, 1); color: white" onclick="location.href = '/login';">Masuk</button>
        </div>
    </div>
</nav>


