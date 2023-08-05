

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
    <link rel="stylesheet" type="text/css" href="assets/css/perusahaan/profilPerusahaanAkunBaru1.css">
    {{-- icons --}}
    {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> --}}
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
                <button type="button" class="btn" style="background-color: rgba(255, 152, 55, 1); color: white; font-weight: 500; width: 120px; margin-bottom: 5px" onclick="window.location.href='/editProfilPerusahaan';" >Edit Profile</button>
                <button type="button" class="btn" style="background-color: rgba(255, 152, 55, 1); color: white; font-weight: 500; width: 120px; margin-bottom: 5px" onclick="window.location.href='/editAlamatKosongPerusahaan';" >Edit Alamat</button>
                <button type="button" class="btn" style="background-color: rgba(255, 152, 55, 1); color: white; font-weight: 500; margin-bottom: 5px"><i class="fa fa-share-alt" aria-hidden="true"></i></button>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-3" style="">
                <img src="assets/img/logo-seven-inc.png" width="90%" style="margin: auto; display: block">
            </div>
        </div>
        
        <br>
        
        {{-- deskripsi --}}
        
        <div class="deskripsi">
            <p><strong>Deskripsi</strong></p>
        </div>

        <br><br>
        {{-- main detail deskripsi --}}

        <div class="detail-deskripsi">
            <div class="row">
                <div class="col-lg-8" style="">
                    <h5><strong>Badan Usaha</strong></h5>
                    <p>-</p>
                    <h5><strong>Visi & Misi</strong></h5><br>
                    <h5><strong>1. Visi</strong></h5>
                    <p>-</p><br><br>
                    <h5><strong>2. Misi</strong></h5>
                    <p>-</p>
                </div>
                <div class="col-lg-4" style="">
                    <div class="side-right-deskripsi">
                        <h5>Website</h5>
                        <a href="">http://Seven.inc</a>
                        <hr>
                        <h5>Telepon</h5>
                        <a href="">081232323180</a>
                        <hr>
                        <h5>Whatsapp</h5>
                        <a href="">081233323180</a>
                        <hr>
                        <h5>Email</h5>
                        <a href="">Seven_inc@gmail.com</a>  
                    </div>
                </div>
            </div>
        </div>
    <br>
    <hr>
    <br>

    {{-- button tambah lowongan --}}
    <button type="button" class="btn" style="background-color: rgba(255, 152, 55, 1); color: white; font-weight: 500; width: 120px; margin-bottom: 5px">Lowongan</button>
    <br><br>
    <div class="add-lowongan">

        <div id="add-lowongan">

            <i class="fa fa-plus fa-3x" aria-hidden="true"></i>
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


    <script>
        $(document).ready(function(){
            $("#add-lowongan").click(function(){
                
                //lempar ke page dashboardProfilPerusahaan
                location.href = "/postinganLowonganSaya";
            });
        });
    </script>

@endsection