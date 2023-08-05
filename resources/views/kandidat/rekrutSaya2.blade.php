@extends('layouts.main-kandidat')
@section('css')
    <!-- Google Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    {{-- <link href="assets/css/main.css" rel="stylesheet"> --}}
    {{-- bootstrap 4 --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

    {{-- my style css --}}
    <link rel="stylesheet" type="text/css" href="assets/css/kandidat/rekrutSaya2.css">
    {{-- icons --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endsection

@section('container-content')
<div class="container mb-3 mt-3" data-aos="fade-up">
    <div class="row">
        <div class="col-auto">
        <a href="/rekrutSaya">
          <button class="btn text-success">
            <h3 style="color:  #F26419"><strong><i class="bi bi-chevron-left mr-3" ></i></strong>Kembali</h3>
        </button>
        </a>
      </div>
        <div class="col"></div><!-- This is the filler column -->
    </div>
  </div>

<div class="container" data-aos="fade-up" style="box-shadow: 0px 0px 14px 5px rgba(0, 0, 0, 0.25);">
    <div class="row justify-content-between">
        <div class="col-3">
        <img src="assets/img/logo-seven-inc.png" alt="" width="70%">
        </div>
        <div class="col-9 align-items-lg-start text-left text-lg-start">
        <h3 class="mt-5">Videographer</h3>
        <h5 class="mb-3">Seven Inc - Sleman</h5>
        <div class="d-flex mb-4">
            <button class="btn text-light " style="background-color: #0CB44F;">Simpan</button>
            <button class="btn ml-3 text-light" style="background-color: #DA251D;">Simpan</button>
            <button class="btn ml-3 text-light" style="background-color: #E3E3E3;"><i class="bi bi-heart" style="color: black"></i></button>
        </div>
        </div>
        <div class="line-rs ml-4">
        </div>
        <div class="col m-4">
            <h4 class="mb-5"><strong>Detail Lowongan</strong></h4>
            <h5><strong>Gaji</strong></h5>
            <p>Rp.2.500.000 - Rp.4.500.000 per bulan</p>

            <h5 class="mt-3 mb-1"><strong>Jenis Lowongan</strong></h5>
            <p>Full-time</p>
            
            <h5 class="mt-3 mb-1"><strong>Deskripsi Pekerjaan</strong></h5>
            <p>‣ Membuat konsep video iklan <br>‣ Produksi video iklan <br>‣ Mengedit video <br>‣ Membuat design grafis untuk advertising</p>

            <h5 class="mt-3 mb-1"><strong>Syarat Perkerjaan</strong></h5>
            <p>‣ Minimal pendidikan SMA/SMK <br>‣ Laki-laki, Perempuan <br>‣ Umur 17-30 <br>‣ Batas lamaran hinggan dd/mm/yyyy</p>

        </div>
    </div>
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