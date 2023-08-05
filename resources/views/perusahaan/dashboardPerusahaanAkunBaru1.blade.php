

@extends('layouts.main-perusahaan')
@section('css')
    <!-- Google Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet"> --}}
    <!-- Vendor CSS Files -->
    {{-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> --}}

    <!-- Template Main CSS File -->
    {{-- <link href="assets/css/main.css" rel="stylesheet"> --}}
    {{-- bootstrap 4 --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

    {{-- my style css --}}
    <link rel="stylesheet" type="text/css" href="assets/css/perusahaan/dashboardPerusahaanAkunBaru1.css">
    {{-- icons --}}
    {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> --}}

@endsection

@section('container-content')
    <br><br>
    <div class="container">
        <h3 style="color: rgba(255, 152, 55, 1);"><b>Dashboard</b></h3>
        <h3><strong>Selamat Datang di Area Kerja <br> Perusahaan A</strong></h3>
        <br><br>
        
        {{-- konten lowongan --}}
        <div class="konten-lowongan">
            <div class="row" style="padding: 10px">
                <div class="col-lg-8 lowongan-saya">
                    <div class="row">
                        <div class="col-lg-9">
                            <h4 style="margin-top: 10%">Lowongan Saya</h4>
                        </div>
                        <div class="col-lg-3 top-up">
                            <p style="font-size: 20px; color: #EFAF18"><strong>123</strong><span> &nbsp;<img src="assets/icon-img/icon-koin-gede.png" width="40px"></span></p>
                            <p style="color: #42BB72; margin-bottom: 0px;">Top Up Koin <span><i class="fa fa-plus-circle" aria-hidden="true"></i></span></p>
                        </div>
                    </div>
                    <br>
                    <div class="row wadah-post-lowongan">
                        <div class="col-lg-9">
                            <h5>Lowongan Belum Terpasang</h5>
                        </div>
                        <div class="col-lg-3">
                            <button type="button" class="btn btn-sm" style="background-color: rgba(255, 152, 55, 1); color: white; margin: right; font-weight: 500;">Tambah Lowongan</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 side-right">
                    <div class="container" style="background-color: rgba(255, 247, 228, 1); border-radius: 10px; padding: 15px">
                        <div class="notifikasi">
                            <h5 style="color: rgba(255, 152, 55, 1);">Notifikasi</h5>
                            <hr>
                            <br>
                            <p style="text-align: center; color: #747474;">Tidak ada notifikasi</p>
                        </div>
                    </div>

                    <div class="container kandidat-saya">
                        {{-- <h4><img src="assets/icon-img/icon-orang-pojok-AK.png" width="40px">Kanidat Saya</h4> --}}
                    
                        <span style="display: flex; margin: auto; margin-bottom: 10px">
                            <img src="assets/icon-img/icon-orang-pojok-AK.png" width="40px" style="margin-right: 10px">
                            <h5>Kandidat Saya</h5>
                        </span>

                        <button type="button" class="btn  " style="background-color: white;color: black; margin: auto; display: block; margin-bottom: 10px; font-weight: 500">Lihat kandidat</button>
                        
                        <button type="button" class="btn" style="background-color: rgba(255, 152, 55, 1); color: white; margin: auto; display: block; font-weight: 500">Cari Kandidat</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br>
    {{-- tentang area kerja --}}

    <section style="width: 85%; margin: auto;">
        <h2 style="text-align: center"><strong>Tentang Area Kerja</strong></h2>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="assets/icon-img/icon-tentang-area-kerja.png" width="450px">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12"  >
                <div class="card-kecil">
                    {{-- <div style="width: 20px; height: 20px; background-color: red; position: absolute; right: 0"></div> --}}
                
                    <div class="child-card child-card-right" style="position: relative;">
                        <div class="number-corner" style="background-color: #7571FF;"><strong>01</strong></div>
                            <h5>Mencari Lowongan</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. S</p>
                    </div>
                    <br>
                    <div class="child-card" style="position: relative">
                            <div class="number-corner" style="background-color: #FF9637;"><strong>02</strong></div>
                                <h5>Lowongan Terbaru</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. S</p>
                    </div>
                        <br>
                    <div class="child-card child-card-right" style="position: relative; ">
                            <div class="number-corner" style="background-color: #2AD9D0;"><strong>03</strong></div>
                                <h5>Pasti Cocok</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. S</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br><br>

    
  
@endsection

@section('js')
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
    <script src="assets/vendor/aos/aos.js "></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js "></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js "></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js "></script>
    <script src="assets/vendor/php-email-form/validate.js "></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js "></script>
@endsection