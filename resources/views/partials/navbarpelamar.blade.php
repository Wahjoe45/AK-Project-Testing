<link rel="stylesheet" href="/assets/css/partials/navbarPelamar.css">

<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar" style="position: relative">
    <div class="container-fluid">
        <a class="navbar-brand logo" href="#"><img src="/assets/img/logo.png" width="150px"
                style=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            {{-- <span class="navbar-toggler-icon"></span> --}}
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>

        @php
            $title = "";
        @endphp
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup" >

            <div class="navbar-nav" style=" width: max-content; padding: 5px;">

                <a class="nav-link {{ $title === 'beranda' ? 'font-underline' : '' }}"
                    href="/beranda">Beranda</a>
                <a class="nav-link {{ $title === 'Talent Hunter' ? 'font-underline' : '' }}"
                    href="/talentHunter">Talent Hunter</a>
                <a class="nav-link {{ $title === 'Tips Kerja' ? 'font-underline' : '' }}" href="/tipsKerja"
                    style="display: flex">Tips Kerja</a>
                <a class="nav-link {{ $title === 'Daftar Kandidat' ? 'font-underline' : '' }}"
                    href="daftarKandidat">Daftar Kandidat</a>
                <a class="nav-link {{ $title === 'Pasang Lowongan' ? 'font-underline' : '' }}"
                    href="pasangLowongan">Pasang Lowongan</a>

            </div>

            <i class="fa fa-bell" style="font-size: 25px; color: #FF9837; margin-right: 5px; margin-left: -5px"
                aria-hidden="true" id="dropdown-notif-lonceng" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

            <div class="dropdown">
                <div class="dropdown-menu " aria-labelledby="dropdown-notif-lonceng" style=" position:absolute;background-color: white;left:-250px;top: 30px;border: 1px solid grey; border-radius: 5px; text-align: left">
                    <div class="notifikasi">
                        <h6 >Notifikasi (10)</h6>
                        <hr style="width: 60%;">
                        <br>
                        <div class="row">
                            <div class="col-lg-3"><img src="/assets/icon-img/areakerjalogo17.png"></div>
                            <div class="col-lg-9">
                                <p>Talent Hunter Ditemukan</p>
                                <p style="text-align: right; font-size: 12px">20 Nov 2022</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3"><img src="/assets/icon-img/icon-orang-pojok-AK.png" style="width: 40px"></div>
                            <div class="col-lg-9">
                                <p>Jangan lewatkan kandidat pilihan
                                    kami. Kandidat <b>bambang</b> akan
                                    hilang dalam waktu 1 hari lagi</p>
                                <p style="text-align: right; font-size: 12px">20 Nov 2022</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3"><img src="/assets/icon-img/icon-money-kandidat.png" ></div>
                            <div class="col-lg-9">
                                <p>Anda telah melakukan Top Up Koin AK sebesar 1000</p>
                                <p style="text-align: right; font-size: 12px">20 Nov 2022</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3"><img src="/assets/icon-img/icon-power-kandidat.png" ></div>
                            <div class="col-lg-9">
                                <p>Selesaikan transaksi anda sebelum estimasi batas pembayaran habis
                                    untuk melanjutkan Top Up Koin AK sebesar <b>Rp.502.000,-</b></p>
                                <p style="text-align: right; font-size: 12px">20 Nov 2022</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3"><img src="/assets/icon-img/icon-power-kandidat.png"></div>
                            <div class="col-lg-9">
                                <p>Selesaikan transaksi anda sebelum estimasi batas pembayaran habis
                                    untuk melanjutkan Top Up Koin AK sebesar <b>Rp.502.000,-</b></p>
                                <p style="text-align: right; font-size: 12px">20 Nov 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown button-pelamar">
            <img src="/assets/img/pelamar/pp.png" style="border-radius: 100px; margin-left: 5px" width="40px" id="dropdownMenuButton" data-toggle="dropdown" >
                {{-- <button class="btn ml-auto" style="background-color: #FF9837; color: white" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seven Inc</button> --}}
                <div class="dropdown-menu " aria-labelledby="dropdownMenuButton" style=" position:absolute;background-color: white;left:-100px;top: 45px; border: 1px solid #FF9837; border-radius: 10px; text-align: center">
                    <a class="dropdown-item" href="{{ route('pelamar.profil', $pelamar->id, $alamat->id) }}">Profil Pelamar</a>
                    <hr>
                    <a class="dropdown-item" href="/lowonganTersimpan">Lowongan Tersimpan</a>
                    <hr>
                    <a class="dropdown-item" href="/faqs">Bantuan</a>
                    <hr>
                    <button class="btn ml-auto" style="background-color: #FF9837; color: white" aria-haspopup="true" aria-expanded="false">Keluar</button>
                </div>
            </div>


        </div>
    </div>
</nav>
