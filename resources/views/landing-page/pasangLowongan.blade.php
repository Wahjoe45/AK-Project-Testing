
@extends('layouts.main-non-user')
@section('css')

<!-- Favicons -->
    {{-- <link rel="shortcut icon" href="/assets/img/imagelogin/area kerja logo 17.png"> --}}

    {{-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

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
    {{-- <link href="assets/css/landing-page/main.css" rel="stylesheet"> --}}
    {{-- Tamplate Footer Css --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    {{-- mystyle css --}}
    {{-- <link rel="stylesheet" type="text/css"href="assets2/css/tampilan-awal.css"> --}}
    <link rel="stylesheet" type="text/css"href="assets/css/landing-page/pasangLowongan.css">
    {{-- <link rel="stylesheet" type="text/css"href="assets/css/landing-page/main.css"> --}}

    {{-- icons --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endsection


@section('container-content')
    
    <div class="container mt-3 mb-3" data-aos="fade-up">
        <div class="row">
        <div class="col"></div><!-- This is the filler column -->
        <div class="col-auto">
            <a href="">
            <button class="btn text-success">
                <div class="type-text">
                <img class="mr-2" src="assets/icon-img/icon-koin-gede.png" alt="Koin" width="20%"><i class="bi bi-plus-circle"></i> Top up koin
                </div>
            </button>
            </a>
        </div>
        </div>
    </div>
    
    <div class="container" style="width: 80%">
        <div class="row gutters mt-4">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6" data-aos="zoom-out">
                <div class="pricing-plan">
                    <div class="pricing-header">
                        <h1 class="pricing-title">GOLD</h1>
                    </div>
                    <ul class="pricing-features">
                        <h3 style="color: black">Lebih Banyak Benefit</h3>
                        <h5 style="color: black"> 5X Publikasi di semua jaringan<br>
                        Areakerja.com</h5>
                        <li><i class="bi bi-check-lg"></i> Website & Aplikasi.</li>
                        <li><i class="bi bi-check-lg"></i> Instagram post & story.</li>
                        <li><i class="bi bi-check-lg"></i> Highlight story favorit.</li>
                        <li><i class="bi bi-check-lg"></i> Google jobs & bisnis.</li>
                        <li><i class="bi bi-check-lg"></i> Facebook post & story.</li>
                        <li><i class="bi bi-check-lg"></i> Twitter.</li>
                        <li><i class="bi bi-check-lg"></i> Linkedin.</li>
                        <li><i class="bi bi-check-lg"></i> Telegram.</li>
                    </ul>
                    <div class="pricing-footer" >
                        <a href="#" class="btn btn-md text-light" style="background-color: #FFA80F;">Pasang lowongan <strong>30</strong> <span><img src="assets/icon-img/icon-koin-gede.png" width="7%" alt="koin"></span></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6" data-aos="zoom-out">
                <div class="pricing-plan">
                    <div class="pricing-header red">
                        <h1 class="pricing-title">SILVER</h1>
                    </div>
                    <ul class="pricing-features">
                        <h3 style="color: black">Paket Unggulan</h3>
                        <h5 style="color: black"> 3X Publikasi di semua jaringan<br>
                        Areakerja.com</h5>
                        <li><i class="bi bi-check-lg"></i> Website & Aplikasi.</li>
                        <li><i class="bi bi-check-lg"></i> Instagram post & story.</li>
                        <li><i class="bi bi-check-lg"></i> Highlight story favorit.</li>
                        <li><i class="bi bi-check-lg"></i> Google jobs & bisnis.</li>
                        <li><i class="bi bi-check-lg"></i> Facebook post & story.</li>
                        <li><i class="bi bi-check-lg"></i> Twitter.</li>
                        <li><i class="bi bi-check-lg"></i> Linkedin.</li>
                        <li><i class="bi bi-check-lg"></i> Telegram.</li>
                    </ul>
                    <div class="pricing-footer">
                        <a href="#" class="btn btn-md text-light" style="background-color: #858990 ">Pasang lowongan <strong>20</strong> <span><img src="assets/icon-img/icon-koin-gede.png" width="7%" alt="koin"></span></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12" data-aos="zoom-out">
                <div class="pricing-plan">
                    <div class="pricing-header secondary">
                        <h1 class="pricing-title">BRONZE</h1>
                    </div>
                    <ul class="pricing-features">
                        <h3 style="color: black">Rekrut dengan Hemat</h3>
                        <h5 style="color: black"> 1X Publikasi di semua jaringan<br>
                        Areakerja.com</h5>
                        <li><i class="bi bi-check-lg"></i> Website & Aplikasi.</li>
                        <li><i class="bi bi-check-lg"></i> Instagram post & story.</li>
                        <li><i class="bi bi-check-lg"></i> Highlight story favorit.</li>
                        <li><i class="bi bi-check-lg"></i> Google jobs & bisnis.</li>
                        <li><i class="bi bi-check-lg"></i> Facebook post & story.</li>
                        <li><i class="bi bi-check-lg"></i> Twitter.</li>
                        <li><i class="bi bi-check-lg"></i> Linkedin.</li>
                        <li><i class="bi bi-check-lg"></i> Telegram.</li>
                    </ul>
                    <div class="pricing-footer">
                        <a href="#" class="btn btn-md text-light" style="background-color: #61544A">Pasang lowongan <strong>10</strong> <span><img src="assets/icon-img/icon-koin-gede.png" width="7%" alt="koin"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container content"> <br><br>
        <!-- {{-- menu main --}} -->
        <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="zoom-in">
            <img src="assets/img/orang-pasangLowongan.png" class="img-fluid" width="90%">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0" style="color: black">
                <h2><b>Langkah-Langkah Memasang Lowongan</b></h2><br>
                <ul style="list-style: none" class="langkah-lowongan">
                    <li><i class="bi bi-1-circle-fill" style="color: #F26419"></i> Pilih paket pemasangan lowongan sesuai yang anda inginkan</li>
                    <li><i class="bi bi-2-circle-fill" style="color: #F26419" ></i> Kirim materi lowongan via formulir website atau whatsapp kami</li>
                    <li><i class="bi bi-3-circle-fill" style="color: #F26419" ></i> Anda akan diberi instruksi pembayaran</li>
                    <li><i class="bi bi-4-circle-fill" style="color: #F26419" ></i> Lowongan anda siap di publish!</li>
                </ul>
            </div>
            </div>
        </div>
    
        </div>
    </section>
    
    <section class="pt-5 pt-md-9" id="service">
    
        <div class="container">
            <div class="mb-7 text-center " data-aos="zoom-out">
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize" style="color: #F26419">Kenapa harus area kerja?</h3>
                <hr style="width: 350px; margin-top: -30px; border: 2px solid rgba(242, 100, 25, 1); border-radius: 5px; margin: auto;">
            </div>
            <div class="row justify-content-center mt-5">
            {{-- <div class="col-lg-3 col-sm-6 mb-6" data-aos="zoom-in">
                <div class="card service-card shadow-hover border-0 rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="assets2/icon-img/icon-ceklis-talent-hunter.png" width="55" alt="Service" />
                    <p class="mb-0 fw-medium mt-1" style="color: #F26419">Built Wicket longer admire do barton vanity itself do in it.</p>
                </div>
                </div>
            </div> --}}
            <div class="col-lg-3 col-sm-6 mb-6" data-aos="zoom-in">
                <div class="card service-card shadow-hover border-0 rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <i class="fa-solid fa-sack-dollar fa-bounce fa-2xl" style="color: #F26419;"></i>
                {{-- <p></p> --}}
                    <p class="mb-0 fw-medium mt-4 text-justify" style="color: #F26419">Akun media social kami diikuti ratusan ribu pencari kerja serta memiliki jaringan social media yang lengkap</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6" data-aos="zoom-in">
                <div class="card service-card shadow-hover border-0 rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <i class="fa-sharp fa-solid fa-building fa-bounce fa-2xl" style="color: #F26419;"></i>
                    <p class="mb-0 fw-medium mt-4 text-justify" style="color: #F26419">Akun media social kami diikuti ratusan ribu pencari kerja serta memiliki jaringan social media yang lengkap</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6" data-aos="zoom-in">
                <div class="card service-card shadow-hover border-0 rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <i class="fa-sharp fa-solid fa-lock fa-bounce fa-2xl" style="color: #F26419;"></i>
                    <p class="mb-0 fw-medium mt-4 text-justify" style="color: #F26419">Akun media social kami diikuti ratusan ribu pencari kerja serta memiliki jaringan social media yang lengkap</p>
                </div>
                </div>
            </div>
            
            </div>
        </div><!-- end of .container-->
    
        </section>
    <!-- End About Section -->
        
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
    <script src="https://kit.fontawesome.com/c2d4601d88.js" crossorigin="anonymous"></script>

    <!-- Template Main JS File -->
    {{-- <script src="assets/js/main.js "></script> --}}
@endsection