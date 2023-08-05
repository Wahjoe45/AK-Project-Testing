
    <!-- ======= Header ======= -->
    {{-- @include('partials.navbar') --}}
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    {{-- @include('partials.daftarKandidat') --}}
    <!-- End Hero Section --> 

    <!-- ======= Footer ======= -->
    {{-- @include('partials.footer') --}}
    <!-- End Footer -->
    <!-- End Footer -->

   

@extends('layouts.main-non-user')
@include('kandidat.formDaftar')

@section('css')

<link rel="stylesheet" type="text/css" href="assets/css/landing-page/daftarKandidat.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
{{-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> --}}
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
{{-- Font Awesome --}}
<link href="assets/fontawesome/css/all.css" rel="stylesheet">

<!-- Template Main CSS File -->
{{-- <link href="assets/css/main.css" rel="stylesheet"> --}}
{{-- Tamplate Footer Css --}}
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
{{-- mystyle css --}}
{{-- <link rel="stylesheet" type="text/css"href="assets2/css/tampilan-awal.css">
<link rel="stylesheet" type="text/css"href="assets/css/pasangLowongan.css"> --}}
<link rel="stylesheet" type="text/css"href="assets/css/landing-page/daftarKandidat.css">
{{-- <link rel="stylesheet" type="text/css"href="assets/css/landing-page/main.css"> --}}
{{-- <link rel="stylesheet" type="text/css"href="assets/css/landing-page/style.css"> --}}

{{-- icons --}}
{{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
rel="stylesheet"> --}}
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> --}}
@endsection


@section('container-content')
    <section class="benefit" data-aos="fade-up">
        <div class="container">
            <div class="row" style="background-color: #F6AE2D">
                <div class="col-lg-5" data-aos="fade-up">
                <img src="assets/img/orang-daftarKandidat.png" width="75%" class="img-fluid mt-5" alt="">
                </div>
                <div class="col-lg-7 ml-8 d-flex flex-column justify-contents-center" data-aos="fade-up">
                <div class="content pt-6 pt-lg-0 mt-5 text-light ">
                    <h2><strong>Benefit </strong>Menjadi
                        Kandidat <strong>Areakerja.com</strong></h2>
                    
                        <span ><i class="fa-sharp fa-solid fa-list-ol fa-flip fa-xl mr-4 mt-3 mb-3"></i>Menjadi prioritas pilihan dari perusahaan mitra Areakerja.<br></span>
                        <span ><i class="fa-sharp fa-solid fa-handshake fa-flip fa-xl mr-3 mt-3 mb-3"></i>Areakerja memiliki banyak mitra perusahaan yang sedang<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;membuka lowongan.<br></span>
                        <span ><i class="fa-solid fa-gavel fa-flip fa-xl mr-4 mt-3 mb-3" ></i>Areakerja merupakan perusahaan terpercaya<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;berbadan hukum.<br></span>
                        <span ><i class="fa-solid fa-user fa-flip fa-xl mr-4 mt-3 mb-3"></i>Areakerja mensupport fasilitas dan konsultasi secara lifetime.<br></span>
                    
                </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta">
        <div class="mb-5 text-center " data-aos="fade-up">
            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize" style="color: #F26419">Cara daftar Kandidat</h3>
            <hr style="border: none;border-radius: 5px; background-color: #F26419; height: 5px; width: 25%; margin: auto;">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta-block">
                        <div class="working-time-left item" style="background-color: #F26419" data-aos="fade-up" >
                            
                            <h2 class="mb-3"><strong>1</strong></h2>
                            <p>Klik Daftar untuk registrasi kandidat</p>
                        </div>
                        <div class="working-time item" style="background-color: #F6AE2D" data-aos="fade-up" >
                            
                            <h2 class="mb-3"><strong>2</strong></h2>
                            <p>Lengkapi data yang diperlukan pada proses registrasi</p>
                        </div>
                        <div class="working-time item" style="background-color: #86BBD8" data-aos="fade-up" >
                            
                            <h2 class="mb-3"><strong>3</strong></h2>
                            <p>Tunggu pemberitahuan setelah melakukan registrasi</p>
                        </div>
                        <div class="working-time-right item" style="background-color: #33658A" data-aos="fade-up" >
                            
                            <h2 class="mb-3"><strong>4</strong></h2>
                            <p>Ikuti pelatihan sesuai prosedur Areakerja.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<div id="preloader"></div>

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