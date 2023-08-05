

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
    <link rel="stylesheet" type="text/css" href="assets/css/perusahaan/editAlamatKosongPerusahaan.css">
    {{-- icons --}}
    {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> --}}

    <style>
        ::-webkit-scrollbar {
            display: none;
        }                                                               
    </style>
@endsection

@section('container-content')
    <br><br>
    <div class="container" style="width: 80%; margin: auto">

        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-9" style="padding: 20px;padding-left: 30px">
                <h3><strong>Seven_Inc</strong></h3>
                <h4>Jasa TI dan Konsultan TI</h4>
                <p style="color: #A5A6B4;">alamat default</p>
                <br>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-3" style="">
                <img src="assets/img/logo-seven-inc.png" width="90%" style="margin: auto; display: block">
            </div>
        </div>
        
        <br>
        
        {{-- deskripsi --}}
        
        <p><strong>Alamat</strong></p>
        <div class="list-alamat" style="overflow: auto; scrollbar: none;">
            <div class="card-alamat" >
                <div class="row">
                    <div class="col-lg-9">
                        <span style="margin-right: 15px"><i class="fa fa-map-marker" aria-hidden="true" style="font-size: 25px"></i></span>
                        Belum ada alamat yang ditambahkan
                    </div>
                    <div class="col-lg-3">
                        <button type="button" class="btn btn-sm" style="background-color: rgba(255, 152, 55, 1); color: white; font-weight: 500; width: 120px; margin-bottom: 5px;  display: block; margin-left: auto;" onclick="window.location.href='/tambahAlamatBaru';">Tambah Alamat</button>
                    </div>
                </div>
            </div>
            
        </div>


    <br><br><br>

    
    </div>
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