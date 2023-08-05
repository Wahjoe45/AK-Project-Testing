

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
    <link rel="stylesheet" type="text/css" href="assets/css/perusahaan/postinganLowonganSaya.css">
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
                <a href="/dashboardProfilPerusahaan"><span class="material-symbols-outlined">arrow_back_ios</span></a>
            </span>
            <span><a href="/dashboardProfilPerusahaan">kembali</a></span>
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

        {{-- dropdown filter postingan lowongan saya --}}

        <div class="row">
            <div class="col-lg-6" style=" display: flex; margin-bottom: 10px">
               <h3 style="font-weight: 600">Lowongan</h3> 
            </div>
            <div class="col-lg-3" style=" display: flex; justify-content: end; align-items: flex-end">
                {{-- dropdown untuk jenis paket --}}
                <div style="position: relative; max-width: max-content; padding: 30px; padding-top:0px;">

                    <div style="border: 2px solid #A5A5A5; width: 180px; display: flex; justify-content: end; border-radius: 8px; padding: 8px; padding-top: 10px">
                        <select name="" style="border: none; width: 180px;">
                            <option value="">Paket 1</option>
                            <option value="">Paket 2</option>
                            <option value="">Paket 3</option>
                        </select>
                    </div>
                    <span style="position: absolute; top: -10px; left: 45px; background-color: white;"><h6 style="margin-bottom: 0px">Jenis Paket</h6></span>
                </div>
            </div>
            <div class="col-lg-3" style="display: flex; justify-content: end; align-items: flex-end">
                 {{-- dropdown untuk jenis lowongan --}}
                <div style="position: relative; max-width: max-content; padding: 30px; padding-top:0px;">
                    <div style="border: 2px solid #A5A5A5; width: 180px; display: flex; justify-content: end; border-radius: 8px; padding: 8px; padding-top: 10px">
                        <select name="" style="border: none; width: 180px;">
                            <option value="">lowongan 1</option>
                            <option value="">lowongan 2</option>
                            <option value="">lowongan 3</option>
                        </select>
                    </div>
                    <span style="position: absolute; top: -10px; left: 45px; background-color: white;"><h6 style="margin-bottom: 0px">Jenis Lowongan</h6></span>
                </div>
            </div>
        </div>


        
        {{-- wadah semua postingan lowongan saya --}}

        
        <div class="wadah-semua-postingan-lowongan">
            {{-- baris 1 --}}
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    
                    <div class="wadah" style="position: relative">
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
    
                    <div style="position: absolute;top: 0; left: 0;  right: 0;height: 100%; width: 90%;" id="wadah-post-lowongan1"></div>
    
                    {{-- blur post lowongan when cursor click while showing two button that--}}
                    <div class="container blur-bg doFadeOut" id="blur-bg1">
                        <section class="button-show">
                            <button type="button" class="btn btn-sm" style="color: rgb(56, 56, 56); font-weight: 500; width: 150px; border: 1px solid rgba(255, 152, 55, 1);" onclick="window.location.href='/detailPostinganLowongan';">Detail Lowongan</button>
                            <button type="button" class="btn btn-sm" style="background-color: rgba(255, 152, 55, 1); color: white; font-weight: 500; width: 150px; ">Pelamar Saya</button>
                        </section>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="wadah" id="wadah-post-lowongan2" style="position: relative">
                        <h5>Videographer</h5>
                        <div class="d-flex justify-content-center align-items-center mb-4 img-logo">
                            <img src="assets/img/logo-seven-inc.png" width="10px">
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
    
                    <div style="position: absolute;top: 0; left: 0;  right: 0;height: 100%; width: 90%;" id="wadah-post-lowongan2"></div>
    
                    {{-- blur post lowongan when cursor click while showing two button that--}}
                    <div class="container blur-bg doFadeOut" id="blur-bg2">
                        <section class="button-show">
                            <button type="button" class="btn btn-sm" style="color: rgb(56, 56, 56); font-weight: 500; width: 150px; border: 1px solid rgba(255, 152, 55, 1);" onclick="window.location.href='/detailPostinganLowongan';" >Detail Lowongan</button>
                            <button type="button" class="btn btn-sm" style="background-color: rgba(255, 152, 55, 1); color: white; font-weight: 500; width: 150px; ">Pelamar Saya</button>
                        </section>
                    </div>
    
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="wadah" id="wadah-post-lowongan3" style="position: relative">
                        <h5>Videographer</h5>
                        <div class="d-flex justify-content-center align-items-center mb-4 img-logo">
                            <img src="assets/img/logo-seven-inc.png" width="10px">
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
    
                        <div style="position: absolute;top: 0; left: 0;  right: 0;height: 100%; width: 90%;" id="wadah-post-lowongan3"></div>
    
                        {{-- blur post lowongan when cursor click while showing two button that--}}
                        <div class="container blur-bg doFadeOut" id="blur-bg3">
                            <section class="button-show">
                                <button type="button" class="btn btn-sm" style="color: rgb(56, 56, 56); font-weight: 500; width: 150px; border: 1px solid rgba(255, 152, 55, 1);" onclick="window.location.href='/detailPostinganLowongan';">Detail Lowongan</button>
                                <button type="button" class="btn btn-sm" style="background-color: rgba(255, 152, 55, 1); color: white; font-weight: 500; width: 150px; ">Pelamar Saya</button>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

             {{-- baris 2 --}}
             <div class="row">
                <div class="col-lg-4 col-sm-6">
                    
                    <div class="wadah" style="position: relative">
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
    
                    <div style="position: absolute;top: 0; left: 0;  right: 0;height: 100%; width: 90%;" id="wadah-post-lowongan4"></div>
    
                    {{-- blur post lowongan when cursor click while showing two button that--}}
                    <div class="container blur-bg doFadeOut" id="blur-bg4">
                        <section class="button-show">
                            <button type="button" class="btn btn-sm" style="color: rgb(56, 56, 56); font-weight: 500; width: 150px; border: 1px solid rgba(255, 152, 55, 1);" onclick="window.location.href='/detailPostinganLowongan';">Detail Lowongan</button>
                            <button type="button" class="btn btn-sm" style="background-color: rgba(255, 152, 55, 1); color: white; font-weight: 500; width: 150px; ">Pelamar Saya</button>
                        </section>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="wadah" id="wadah-post-lowongan2" style="position: relative">
                        <h5>Videographer</h5>
                        <div class="d-flex justify-content-center align-items-center mb-4 img-logo">
                            <img src="assets/img/logo-seven-inc.png" width="10px">
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
    
                    <div style="position: absolute;top: 0; left: 0;  right: 0;height: 100%; width: 90%;" id="wadah-post-lowongan5"></div>
    
                    {{-- blur post lowongan when cursor click while showing two button that--}}
                    <div class="container blur-bg doFadeOut" id="blur-bg5">
                        <section class="button-show">
                            <button type="button" class="btn btn-sm" style="color: rgb(56, 56, 56); font-weight: 500; width: 150px; border: 1px solid rgba(255, 152, 55, 1);" onclick="window.location.href='/detailPostinganLowongan';">Detail Lowongan</button>
                            <button type="button" class="btn btn-sm" style="background-color: rgba(255, 152, 55, 1); color: white; font-weight: 500; width: 150px; ">Pelamar Saya</button>
                        </section>
                    </div>
    
                </div>
                <div class="col-lg-4 col-sm-6" style="display: flex; justify-content: center; align-items: center">
                   
                    <div class="add-lowongan">
                        <div>
                            <i class="fa fa-plus fa-3x" aria-hidden="true"></i>
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