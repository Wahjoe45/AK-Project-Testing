@extends('layouts.main-non-user')
@section('css')

<link rel="stylesheet" type="text/css" href="assets/css/landing-page/beranda.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/landing-page/fitur-slide-carousel-posts/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/landing-page/fitur-slide-carousel-posts/style.css">

{{-- my style css tampilanAwalDetailPost.css--}}
<link rel="stylesheet" type="text/css" href="assets/css/landing-page/tampilanAwalDetailPost.css">

@endsection
@section('container-content')
    <div class="container content">
        {{-- menu main --}}
        <div class="menu-main" data-aos="fade-up">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 logo-main">
                    <div class="wadah" style="padding-bottom: 15px">
                        <img src="assets/icon-img/icon-perusahaan.png" width="35px">Perusahaan
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 logo-main">
                    <div class="wadah">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                <img src="assets/icon-img/icon-area.png" width="30px">
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12 col-12 input-group m-0">
                                <select class="custom-select" id="inputGroupSelect02" style="background-color: transparent; border: 0px; ">
                                    <option selected>Area</option>
                                    <option value="1" >One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                {{-- <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        style="padding: 0px; background-color: transparent; color: rgba(242, 100, 25, 1);">

                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 logo-main">
                    <div class="wadah">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-12" >
                                <img src="assets/icon-img/icon-posisi.png" width="30px">
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12 col-12 input-group m-0">
                                <select class="custom-select" id="inputGroupSelect02" style="background-color: transparent; border: 0px; ">
                                    <option selected>Posisi</option>
                                    <option value="1" >One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                {{-- <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        style="padding: 0px; background-color: transparent; color: rgba(242, 100, 25, 1);">

                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 logo-main">
                    <div class="wadah">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                <img src="assets/icon-img/icon-jenis.png" width="35px">
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12 col-12 input-group m-0">
                                <select class="custom-select" id="inputGroupSelect02" style="background-color: transparent; border: 0px; ">
                                    <option selected>Jenis</option>
                                    <option value="1" >One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                {{-- <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        style="padding: 0px; background-color: transparent; color: rgba(242, 100, 25, 1);">

                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="btn button-search" style="background-color: rgba(242, 100, 25, 1);">Cari <img
                    src="assets/icon-img/icon-search.png" width="20px"></button>
        </div>

        {{-- rekomendasi postingan --}}
        
        <div id="title-rekomendasi"></div>
        
        {{-- button back --}}
        <p style="display: flex; " id="button-back">
            <span>
                <a><span class="material-symbols-outlined">arrow_back_ios</span></a>
            </span>
            <span><a>kembali</a></span>
        </p>

        <div id="wadah-ajax"></div>

        <div id="wadah-content-body">   
        
            {{-- <h3><b>REKOMENDASI</b></h3> --}}

            {{-- carousel rekomendasi --}}
            
            @include('landing-page.fitur-slide-carousel-posts.index')

            {{-- end carousel rekomendasi --}}

            {{-- section lowongan terbaru --}}

            <h3 style="margin-top: 50px"><b>LOWONGAN TERBARU</b></h3>

            {{-- postingan lowongan terbaru --}}
            <div class="lowongan-terbaru">
                {{-- baris 1 --}}
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12" id="post-lowongan-terbaru" data-aos="fade-down-right">
                        <div class="post">
                            <div class="row" id="lowongan-post">
                                <div class="col-sm-4" style="margin-top: 30px;">
                                    <img src="assets/img/logo-seven-inc.png">
                                </div>
                                <div class="col-sm-8">
                                <h4 style="margin-bottom: 20px;margin-top: 20px">Videographer</h4>
                                    <div class="container konten-deskripsi" style="padding: 5px">
                                        <div style="display: flex;">
                                            <span class="material-icons" style="margin-right: 7px">business</span>
                                            Seven Inc
                                        </div>
                                            <hr>
                                        <div style="display: flex;">
                                            <span class="material-icons" style="margin-right: 7px"> timelapse</span>
                                            Full-Time</span>
                                        </div>
                                        <hr>
                                        <div style="display: flex;">
                                            <span class="material-icons" style="margin-right: 7px">paid</span>
                                            Rp.2.5 - 4.5 jt/bulan</span>
                                        </div>
                                        <hr>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12" id="post-lowongan-terbaru" data-aos="fade-down-left">
                        <div class="post">
                            <div class="row">
                                <div class="col-sm-4" style="margin-top: 30px;">
                                    <img src="assets/img/logo-seven-inc.png">
                                </div>
                                <div class="col-sm-8">
                                <h4 style="margin-bottom: 20px;margin-top: 20px">Videographer</h4>
                                    <div class="container konten-deskripsi" style="padding: 5px">
                                        <div style="display: flex;">
                                            <span class="material-icons" style="margin-right: 7px">business</span>
                                            Seven Inc
                                        </div>
                                            <hr>
                                        <div style="display: flex;">
                                            <span class="material-icons" style="margin-right: 7px"> timelapse</span>
                                            Full-Time</span>
                                        </div>
                                        <hr>
                                        <div style="display: flex;">
                                            <span class="material-icons" style="margin-right: 7px">paid</span>
                                            Rp.2.5 - 4.5 jt/bulan</span>
                                        </div>
                                        <hr>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- baris 2 --}}
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12" id="post-lowongan-terbaru" data-aos="fade-down-right">
                        <div class="post">
                            <div class="row">
                                <div class="col-sm-4" style="margin-top: 30px;">
                                    <img src="assets/img/logo-seven-inc.png">
                                </div>
                                <div class="col-sm-8">
                                <h4 style="margin-bottom: 20px;margin-top: 20px">Videographer</h4>
                                    <div class="container konten-deskripsi" style="padding: 5px">
                                        <div style="display: flex;">
                                            <span class="material-icons" style="margin-right: 7px">business</span>
                                            Seven Inc
                                        </div>
                                            <hr>
                                        <div style="display: flex;">
                                            <span class="material-icons" style="margin-right: 7px"> timelapse</span>
                                            Full-Time</span>
                                        </div>
                                        <hr>
                                        <div style="display: flex;">
                                            <span class="material-icons" style="margin-right: 7px">paid</span>
                                            Rp.2.5 - 4.5 jt/bulan</span>
                                        </div>
                                        <hr>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12" id="post-lowongan-terbaru" data-aos="fade-down-left">
                        <div class="post">
                            <div class="row">
                                <div class="col-sm-4" style="margin-top: 30px;">
                                    <img src="assets/img/logo-seven-inc.png">
                                </div>
                                <div class="col-sm-8">
                                <h4 style="margin-bottom: 20px;margin-top: 20px">Videographer</h4>
                                    <div class="container konten-deskripsi" style="padding: 5px">
                                        <div style="display: flex;">
                                            <span class="material-icons" style="margin-right: 7px">business</span>
                                            Seven Inc
                                        </div>
                                            <hr>
                                        <div style="display: flex;">
                                            <span class="material-icons" style="margin-right: 7px"> timelapse</span>
                                            Full-Time</span>
                                        </div>
                                        <hr>
                                        <div style="display: flex;">
                                            <span class="material-icons" style="margin-right: 7px">paid</span>
                                            Rp.2.5 - 4.5 jt/bulan</span>
                                        </div>
                                        <hr>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- baris 3 --}}
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12" id="post-lowongan-terbaru" data-aos="fade-down-right">
                        <div class="post">
                            <div class="row">
                                <div class="col-sm-4" style="margin-top: 30px;">
                                    <img src="assets/img/logo-seven-inc.png">
                                </div>
                                <div class="col-sm-8">
                                <h4 style="margin-bottom: 20px;margin-top: 20px">Videographer</h4>
                                    <div class="container konten-deskripsi" style="padding: 5px">
                                        <div style="display: flex;">
                                            <span class="material-icons" style="margin-right: 7px">business</span>
                                            Seven Inc
                                        </div>
                                            <hr>
                                        <div style="display: flex;">
                                            <span class="material-icons" style="margin-right: 7px"> timelapse</span>
                                            Full-Time</span>
                                        </div>
                                        <hr>
                                        <div style="display: flex;">
                                            <span class="material-icons" style="margin-right: 7px">paid</span>
                                            Rp.2.5 - 4.5 jt/bulan</span>
                                        </div>
                                        <hr>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12" id="post-lowongan-terbaru" data-aos="fade-down-left">
                        <div class="post">
                            <div class="row">
                                <div class="col-sm-4" style="margin-top: 30px;">
                                    <img src="assets/img/logo-seven-inc.png">
                                </div>
                                <div class="col-sm-8">
                                    <h4 style="margin-bottom: 20px;margin-top: 20px">Videographer</h4>
                                    <div class="container konten-deskripsi" style="padding: 5px">
                                        <div style="display: flex;">
                                            <span class="material-icons" style="margin-right: 7px">business</span>
                                            Seven Inc
                                        </div>
                                            <hr>
                                        <div style="display: flex;">
                                            <span class="material-icons" style="margin-right: 7px"> timelapse</span>
                                            Full-Time</span>
                                        </div>
                                        <hr>
                                        <div style="display: flex;">
                                            <span class="material-icons" style="margin-right: 7px">paid</span>
                                            Rp.2.5 - 4.5 jt/bulan</span>
                                        </div>
                                        <hr>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <img src="assets/gif/loading-footer.gif" class="gif-loading">
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
    <script src="assets/js/fitur-slide-carousel-posts/owl.carousel.min.js"></script>
    <script src="assets/js/fitur-slide-carousel-posts/script.js"></script>

    <script>
        $(document).ready(function(){
          $("#lowongan-post").click(function(){
            $("#wadah-content-body").hide();
            $("#button-back a").show();
            $("#wadah-ajax").show();
            $("#wadah-ajax").load("http://ak-project-magang.test/detail");
          });
        });

        $(document).ready(function(){
          $("#button-back a").click(function(){
            $("#wadah-ajax").hide();
            $("#wadah-content-body").show();
            $("#button-back a").hide();
          });
        });
    </script>
    {{-- <script>
        function loadDoc() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("wadah-ajax").innerHTML =
              this.responseText;
              alert('jalan');
            }
            
          };
          xhttp.open("GET", "test.txt", true);
          xhttp.send();
        }
    </script> --}}
@endsection