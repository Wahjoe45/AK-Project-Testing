@extends('layouts.main-kandidat')
@section('css')
    <!-- Google Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    {{-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    {{-- <link href="assets/vendor/aos/aos.css" rel="stylesheet"> --}}
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    {{-- <link href="assets/css/main.css" rel="stylesheet"> --}}
    {{-- bootstrap 4 --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

    {{-- my style css --}}
    <link rel="stylesheet" type="text/css" href="assets/css/kandidat/lowonganTersimpan.css">
    {{-- icons --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endsection

@section('container-content')
    <div class="container container-table mt-5">
        
    <table class="table">
        <tbody>
            <tr>
                <td class="td-l" style="width: 90px"><span><img src="assets/img/videographer.png" width="80px" alt="Perusahaan" class="mt-2"></span></td>
                <td class="td-l"><strong style="color: #0008C0">Videographer</strong> <br>Seven Inc <br>Full-time <br>Sleman </td>
                <td class="td-1"><a href="/rekrutSaya2"><button class="btn mt-3"> <h1><i class="bi bi-trash-fill"></i></h1> </button></a></td>
            </tr>
        </tbody>
    </table>        
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