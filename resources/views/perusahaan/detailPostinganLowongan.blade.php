

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
    <link rel="stylesheet" type="text/css" href="assets/css/perusahaan/detailPostinganLowongan.css">
    {{-- icons --}}
    {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> --}}
@endsection

@section('container-content')
    <br><br>
    <div class="container" style="width: 80%; margin: auto">

        {{-- button back --}}
        <p style="display: flex; " id="button-back">
            <span>
                <a href="/postinganLowonganSaya"><span class="material-symbols-outlined">arrow_back_ios</span></a>
            </span>
            <span><a href="/postinganLowonganSaya">kembali</a></span>
        </p>

        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-2" style="">
                <img src="assets/img/logo-seven-inc.png" width="100%" style="margin: auto; display: block;">
            </div>
            <div class="col-lg-10 col-md-9 col-sm-10" style="padding: 20px;padding-left: 30px">
                <h3><strong>Seven_Inc</strong></h3>
                <h4>Jasa TI dan Konsultan TI</h4>
                <p style="color: #A5A6B4;">Kota Sleman, D.I. Yogyakarta, Indonesia</p>
            </div>
        </div>
        
        <br>

        {{-- Detail postingan lowongan saya --}}

        
        <div class="wadah-detail-postingan">
            {{-- baris 1 --}}
            <div class="row">
                <div class="col-lg-4 col-sm-6" style="">
                    
                    <div class="wadah">
                        <h5>Videographer</h5>
                        <div class="d-flex justify-content-center align-items-center mb-4 img-logo">
                            <img src="assets/img/logo-seven-inc.png">
                        </div>
                        <div class="container konten-deskripsi">
                            <div style="display: flex;">
                                <span class="material-icons" style="margin-right: 5px;">business</span>
                                Seven Inc
                                
                            </div>
                            <hr>
                            <div style="display: flex;">
                                <span class="material-icons" style="margin-right: 5px;"> timelapse</span>
                                Full-Time</span>
                                
                            </div>
                            <hr>
                            <div style="display: flex;">
                                <span class="material-icons" style="margin-right: 5px;">paid</span>
                                Rp.2.5 - 4.5 jt/bulan</span>
                                
                            </div>
                            <hr>
                            {{-- emblem jenis lowongan ini --}}
                            <section class="emblem-jenis-lowongan">
                                <button class="btn btn-sm">Gold</button>
                                <button class="btn btn-sm">Part-Time</button>
                            </section>
                        </div>
                    </div>
                </div>
                {{-- deskripsi detail lowongan --}}
                <div class="col-lg-8 col-sm-6" style="">
                    
                    <div class="deskripsi-detail-lowongan">

                        {{-- deskripsi detail nya --}}
                        <h4 style="margin-bottom: 30px">Detail Lowongan</h4>

                        <h5>Gaji</h5>
                        {{-- <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp.2.500.000 - Rp.4.500.000 per bulan</h6> --}}
                        <ul>
                            <li>Rp.2.500.000 - Rp.4.500.000 per bulan</li>
                        </ul>

                        <h5>Jenis Lowongan</h5>
                        {{-- <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Full-Time</h6> --}}
                        <ul>
                            <li>Full-Time</li>
                        </ul>

                        <h5>Deskripsi Pekerjaan</h5>
                        <ul>
                            <li>Membuat konsep video iklan</li>
                            <li>Produksi video iklan</li>
                            <li>Mengedit video</li>
                            <li>Membuat design grafis untuk advertising</li>
                        </ul>

                        <h5>Syarat Pekerjaan</h5>
                        <ul>
                            <li>Minimal pendidikan SMA/SMK</li>
                            <li>Laki-laki, Perempuan</li>
                            <li>Umur 17-30</li>
                            <li>Batas lamaran hingga dd/mm/yyyy</li>
                        </ul>

                        <h5>Aktifitas Lowongan</h5>
                        <ul>
                            <li>Lowongan Dipasang 9 hari yang lalu</li>
                        </ul>

                        <hr>
                        <div style="display: flex; justify-content: space-between; width: 290px; margin-left: auto;">
                            <span><a href="/editPostinganLowonganSaya" class="text-danger"><i class="fa fa-trash-o " aria-hidden="true"></i> Hapus  Lowongan</a></span>|
                            <span><a href="/editPostinganLowonganSaya" class="text-primary"><i class="fa fa-pencil" aria-hidden="true"></i> Edit  Lowongan</a></span>
                        </div>
                    </div>
                    
                </div>
            </div>

             
        </div>
    <br><br>
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

    <script>

        // $(document).ready(function() {
        //     for(var i = 1; i <= 3; i++) {
        //         $(`#blur-bg${i}`).hide();
        //     }   
        // });

        $(document).ready(function(){
            $(document).click(function(e) {
                for(var i = 1; i <= 5; i++) {
                    if ($(e.target).attr('id') == `wadah-post-lowongan${i}`) {
                        $(`#blur-bg${i}`).show();
                    } else {
                        $(`#blur-bg${i}`).hide();
                    }
                }
                
                
            });
        });

        
    </script>
@endsection