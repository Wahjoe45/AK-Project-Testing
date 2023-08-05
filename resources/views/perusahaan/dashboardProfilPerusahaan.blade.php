

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
    <link rel="stylesheet" type="text/css" href="assets/css/perusahaan/dashboardProfilPerusahaan.css">
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
                <button type="button" class="btn" style="background-color: rgba(255, 152, 55, 1); color: white; font-weight: 500; width: 120px; margin-bottom: 5px" onclick="window.location.href='/editProfilPerusahaan';">Edit Profile</button>

                <button type="button" class="btn" style="background-color: rgba(255, 152, 55, 1); color: white; font-weight: 500; width: 120px; margin-bottom: 5px" onclick="window.location.href='/editGantiAlamatLain';">Edit Alamat</button>
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint cumque laboriosam necessitatibus aspernatur distinctio. Assumenda, expedita! Nobis adipisci quisquam temporibus sint vero corporis dignissimos deserunt, tempore libero. Aliquid alias consectetur obcaecati aspernatur eligendi placeat facilis harum architecto provident ea saepe in eaque suscipit nobis ullam quod molestias amet minus hic, soluta expedita. Corrupti cumque unde tempora doloremque deleniti eaque officia deserunt. Odio, dolorum quia ex eligendi sed delectus ipsum, doloribus quisquam rerum deserunt sequi explicabo molestiae! Aliquid perferendis animi dicta expedita, ad natus saepe quibusdam laboriosam, pariatur, facilis aut voluptas ducimus ratione impedit inventore tempora veniam magni! Voluptate, cum eveniet?</p>
        </div>

        <br><br>
        {{-- main detail deskripsi --}}

        <div class="detail-deskripsi">
            <div class="row">
                <div class="col-lg-8" style="">
                    <h5><strong>Badan Usaha</strong></h5>
                    <p>CV (Persekutuan Komanditer)</p><br>
                    <h5><strong>Visi & Misi</strong></h5><br>
                    <h5><strong>Visi</strong></h5>
                    <p>
                        <ol>
                            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam obcaecati voluptatibus, animi veniam odit consectetur dolores odio ipsum beatae saepe.</li>
                            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam obcaecati voluptatibus, animi veniam odit consectetur dolores odio ipsum beatae saepe.</li>
                            
                        </ol>
                    </p>
                    <br><br>
                    <h5><strong>Misi</strong></h5>
                    <p>
                        <ol>
                            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam obcaecati voluptatibus, animi veniam odit consectetur dolores odio ipsum beatae saepe.</li>
                            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam obcaecati voluptatibus, animi veniam odit consectetur dolores odio ipsum beatae saepe.</li>
                            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam obcaecati voluptatibus, animi veniam odit consectetur dolores odio ipsum beatae saepe.</li>
                            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam obcaecati voluptatibus, animi veniam odit consectetur dolores odio ipsum beatae saepe.</li>
                        </ol>
                    </p>
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

    {{-- postingan lowongan dari perusahaan --}}
    <button type="button" class="btn" style="background-color: rgba(255, 152, 55, 1); color: white; font-weight: 500; width: 150px; margin-bottom: 5px">Lowongan Anda</button>
    <br><br>
    
    <div class="postingan-lowongan-perusahaan">
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
                        <button type="button" class="btn btn-sm" style="color: rgb(56, 56, 56); font-weight: 500; width: 150px; border: 1px solid rgba(255, 152, 55, 1);">Detail Lowongan</button>
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
                        <button type="button" class="btn btn-sm" style="color: rgb(56, 56, 56); font-weight: 500; width: 150px; border: 1px solid rgba(255, 152, 55, 1);">Detail Lowongan</button>
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
                            <button type="button" class="btn btn-sm" style="color: rgb(56, 56, 56); font-weight: 500; width: 150px; border: 1px solid rgba(255, 152, 55, 1);">Detail Lowongan</button>
                            <button type="button" class="btn btn-sm" style="background-color: rgba(255, 152, 55, 1); color: white; font-weight: 500; width: 150px; ">Pelamar Saya</button>
                        </section>
                    </div>
                </div>
            </div>
        </div>


        <br><br>
        <h5 style="text-align: right;"><a href="/postinganLowonganSaya" style="color: rgba(255, 152, 55, 1);">Tampilkan lebih banyak >></a></h5>
       
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
                for(var i = 1; i <= 3; i++) {
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