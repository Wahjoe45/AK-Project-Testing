<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Area Kerja | {{ $title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->

    <link rel="shortcut icon" href="/assets/img/imagelogin/area kerja logo 17.png" /> 

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->

    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/assets/css/landing-page/beranda.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/assets/css/landing-page/fitur-slide-carousel-posts/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="/assets/css/landing-page/fitur-slide-carousel-posts/style.css">

    <!-- Template Main CSS File -->

    {{-- Tamplate Footer Css --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    {{-- <link rel="stylesheet" type="text/css"href="/assets/css/main.css"> --}}
    {{-- <link rel="stylesheet" type="text/css"href="/assets/css/sweetalertpelamar.css"> --}}
    <link rel="stylesheet" type="text/css"href="/assets/css/pelamar/profilPelamar.css">
    {{-- icons --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>

 /* Gaya ikon dan tulisan default */
        /* Gaya ikon dan tulisan default */
        .nav-link i,
        .nav-link span {
            color: black; /* Warna ikon dan tulisan default */
        }
        
        /* Gaya ikon dan tulisan saat dihover */
        .nav-link:hover i,
        .nav-link:hover span {
            color: red; /* Warna ikon dan tulisan ketika dihover */
        }

        /* Gaya ikon dan tulisan saat dipencet */
        .nav-link.clicked i,
        .nav-link.clicked span {
            color: red; /* Warna ikon dan tulisan ketika dipencet */
        }

      /* Sembunyikan tampilan default tipe radio */
      input[type="radio"] {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0;
        padding: 0;
      }

      /* Buat elemen kustom untuk tipe radio */
      input[type="radio"]::before {
        content: "";
        display: inline-block;
        width: 16px;
        height: 16px;
        margin-right: 8px;
        border-radius: 50%;
        border: 2px solid #F26419; /* Ganti warna sesuai keinginan Anda */
        background-color: transparent;
      }

      /* Berikan tampilan lainnya untuk tipe radio yang dipilih */
      input[type="radio"]:checked::before {
        background-color: #F26419; /* Ganti warna sesuai keinginan Anda */
      }
    </style>

</head>
<body>
  @include('partials.navbarpelamar')

  @include('partials.header-jumbotron')

 <div class="container-lg mt-5">
    <div class="row">
        <div class="col-md-3">
<div class="container mt-3 border border-5; " >
  <div class="justify-content-center mt-3">
    
    <div class="row mb-3">
     <span class="col-sm-3 d-flex justify-content-end" style="color: #F26419">*</span> 
      <div class="col-sm-9 d-flex justify-content-end">
            <span class="input-group-text justify-text-end form-control-sm" style="background-color: transparent; border-color: transparent;">
              <a href="#">
                <i class="bi bi-pencil-fill" style="color: #F26419;"></i>
              </a>
            </span>
      </div>
    </div>
    <a href="/pelamar">

      <img src="assets/img/pelamar/RRQ LEMON.jpg" alt="" class="img-thumbnail rounded-circle" >

    </a>
  </div>
    <br>
    <H3 class="text-center">RRQ LEMON</H3>
    <p class="fs-4" style=" margin-left: 20%; color:#F26419">pelamar aktif</p>
    <hr style="border: 3px solid #C3C3C3;">
 <!-- Tautan "Profil Saya" -->

 <a href="{{ route('pelamar.profil', ['id' => $pelamar->id]) }}"class="nav-link" style="font-size: 18px; color:#F26419;" id="profil-link">

  <i class="bi bi-person-fill" style="margin-left: 2px"></i>
  <span>Profil Saya</span>
</a>


<!-- Tautan "Alamat" -->
<a href="{{ route('alamat.edit', ['id' => $alamat->id]) }}" style="font-size: 18px; onclick="toggleColor('alamat-link') color:#F26419;" id="alamat-link" class="mt-3">

  <i class="bi bi-geo-alt-fill"></i>
  <span>Alamat</span>
</a>
    <hr style="border: 3px solid #C3C3C3;">
<div class="container row mt-5 justify-content-center">
    <div class="col-9">
  <p class="fs-4 fw-bold " style="margin-left: 15px"> Ekspetasi Range Gaji</p>
    </div>
    <div class="row " style="padding: 0px">
        <div class="col-lg-5 " style="padding: 0px;">
          <input class="form-control" style="border-radius: 20px;" type="text" placeholder="Rp-" aria-label="default input example">
        </div>
        <div class="col-lg-2 "style="">
          -
        </div>
        <div class="col-lg-5"style="padding: 0px;">
          <input class="form-control" style="border-radius: 20px;" type="text" placeholder="Rp-" aria-label="default input example">
        </div>
      </div>
</div>
<div>
 <div class="row mt-5">
  <div class="col-3">
    <h1 class="bi bi-check-circle-fill" style="color: #F26419"></h1>
  </div>
  <div class="col-9">
<p style="color: #F26419">Setelah menjadi kandidat Areakerja, CV anda akan otomatis terunggah ke etalase perusahaan</p>
  </div>
 </div>

 <div class="row">
  <div class="col-3">
    <h1 class="bi bi-check-circle-fill" style="color: #F26419"></h1>
  </div>
  <div class="col-9">
<p style="color: #F26419">Range gaji akan tertampil pada profil anda di etalase perusahaan</p>
  </div>
 </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>

</div>
        </div>

        <div  class="container col-md-9" id="profil-form">
            @yield('container')
        </div>

    </div>


          </div>

    </div>

    @include('partials.footer')
    {{-- <a href="# " class="scroll-top d-flex align-items-center justify-content-center "><i class="bi bi-arrow-up-short "></i></a> --}}

    <div id="preloader "></div>


        {{-- sweetalert email --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




    {{-- sweetalert password --}}











    <!-- Vendor JS Files -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
    <script src="/assets/vendor/aos/aos.js "></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js "></script>
    <script src="/assets/vendor/purecounter/purecounter_vanilla.js "></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js "></script>
    <script src="/assets/vendor/php-email-form/validate.js "></script>

    <!-- Template Main JS File -->

    <script src="/assets/js/main.js "></script>


    <script>
      // Fungsi untuk mengubah warna saat elemen dipencet
      function toggleColor(id) {
          const elem = document.getElementById(id);
          elem.classList.toggle('clicked');
      }
  </script>
    
</body>
</html>
