

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
    <link rel="stylesheet" type="text/css" href="assets/css/perusahaan/editProfilPerusahaan.css">
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
                <section class="edit-title-perusahaan">
                    <input type="text" name="" id="" value="Seven_Inc">
                    <div style="display: block; margin: 10px;"></div>
                    <input type="text" name="" id="" value="Jasa TI dan Konsultan TI">
                    <br><br>
                    {{-- <p style="color: #A5A6B4; line-height: 0px">Alamat:</p>
                    <p style="color: #A5A6B4; line-height: 0px">Kota Sleman, D.I. Yogyakarta, Indonesia <span> <i class="fa fa-pencil" style="font-size: 20px" aria-hidden="true"></i></span></p>
                    <br> --}}
                    {{-- <button type="button" class="btn" style="background-color: rgba(255, 152, 55, 1); color: white; font-weight: 500; width: 120px; margin-bottom: 5px">Edit Profile</button>
                    <button type="button" class="btn" style="background-color: rgba(255, 152, 55, 1); color: white; font-weight: 500; width: 120px; margin-bottom: 5px">Edit Alamat</button>
                    <button type="button" class="btn" style="background-color: rgba(255, 152, 55, 1); color: white; font-weight: 500; margin-bottom: 5px"><i class="fa fa-share-alt" aria-hidden="true"></i></button> --}}
                </section>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-3" style="">
                <img src="assets/img/logo-seven-inc.png" width="90%" style="margin: auto; display: block">
            </div>
        </div>
        
        <br>
        
        {{-- deskripsi --}}
        
        <div class="deskripsi" style="overflow: auto; scrollbar: none;">
            <p><strong>Deskripsi</strong></p>
            {{-- <input type="text" style="height: 80%; width: 100%; background-color: transparent; border: 1px solid #A5A5A5; border-radius: 10px;"> --}}
            <textarea name="" id="" cols="120%" rows="5%" style="resize: none; background-color: transparent; border: 1px solid #A5A5A5; border-radius: 10px;"></textarea>
        </div>

        <br><br>
        {{-- main detail deskripsi --}}

        <div class="detail-deskripsi" style="border: 1px solid grey; padding:20px; border-radius: 10px">
            <div class="row">
                <div class="col-lg-8" style="overflow: auto; scrollbar: none;">
                    <h5><strong>Badan Usaha</strong></h5>
                    {{-- dropdown select badan usaha--}}
                    <div class="input-group mb-3" style="width: 65%">
                        <select class="custom-select" id="inputGroupSelect02">
                          <option selected>Pilih Badan Usaha</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                    </div>
                    <br>
                    <h5><strong>Visi & Misi</strong></h5><br>
                    <h5><strong>1. Visi</strong></h5>
                    {{-- input visi --}}
                    <div style="width: max-content" style="overflow: auto; scrollbar: none;">
                        <textarea name="" id="" cols="51" rows="5%" style="resize: none; background-color: transparent; border: 1px solid #A5A5A5; border-radius: 10px;" placeholder="Tuliskan Visi Perusahaan Anda..."></textarea>
                        {{-- <div style="display: block"></div> 
                        <button type="button" class="btn btn-sm" style="background-color: rgba(255, 152, 55, 1); color: white;font-weight: 500; width: 100px; margin-bottom: 5px; display: block; margin: auto;" >Tambah</button> --}}
                    </div>
                        <br><br>
                    <h5><strong>2. Misi</strong></h5>
                    <div style="width: max-content" style="overflow: auto; scrollbar: none;">
                        <textarea name="" id="" cols="51" rows="5%" style="resize: none; background-color: transparent; border: 1px solid #A5A5A5; border-radius: 10px;" placeholder="Tuliskan Misi Perusahaan Anda..."></textarea>
                        {{-- <div style="display: block"></div> 
                        <button type="button" class="btn btn-sm" style="background-color: rgba(255, 152, 55, 1); color: white;font-weight: 500; width: 100px; margin-bottom: 5px; display: block; margin: auto;">Tambah</button> --}}
                    </div>
                    <br>
                </div>
                <div class="col-lg-4" style="">
                    <div class="side-right-deskripsi">
                        <h5>Website</h5>
                        <input type="text" name="" id="" value="http://Seven.inc">
                        {{-- <a href="">http://Seven.inc</a> --}}
                        <hr>
                        <h5>Telepon</h5>
                        <input type="text" name="" id="" value="081232323180">
                        {{-- <a href="">081232323180</a> --}}
                        <hr>
                        <h5>Whatsapp</h5>
                        <input type="text" name="" id="" value="081233323180">
                        {{-- <a href="">081233323180</a> --}}
                        <hr>
                        <h5>Email</h5>
                        <input type="text" name="" id="" value="Seven_inc@gmail.com">
                        {{-- <a href="">Seven_inc@gmail.com</a>   --}}
                    </div>
                </div>
            </div>

            <hr>
            <div style="max-width: max-content; display: block; margin: auto; margin-top: 30px;">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12" style="width: max-content">

                        <button type="button" class="btn mb-3" style="background-color: white; color: rgba(255, 152, 55, 1);font-weight: 500; width: 180px; margin-bottom: 5px; margin: auto; border: 1px solid rgba(255, 152, 55, 1); display: block;" id="batal-perubahan">Batal Perubahan <i class="fa fa-times" aria-hidden="true"></i></button>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12" style="width: max-content">
                        <button type="button" class="btn" style="background-color: rgba(255, 152, 55, 1); color: white;font-weight: 500; width: 180px; margin-bottom: 5px; margin: auto; display: block;" id="simpan-perubahan">Simpan Perubahan <i class="fa fa-check" aria-hidden="true"></i></button>
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

    {{-- sweet alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $(document).ready(function(){
            $(document).click(function(e) {
                $("#simpan-perubahan").click(function(e) {
                    swal({
                        title: "Kamu yakin untuk menyimpan perubahan ini?",
                        text: "",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                        })
                        .then((willDelete) => {
                        if (willDelete) {
                            swal("Data perubahan berhasil disimpan", {
                            icon: "success",
                            
                            })
                            .then(function(){ 
                            
                                //lempar ke page dashboardProfilPerusahaan
                                location.href = "/dashboardProfilPerusahaan";
                            })
                            
                        } else {
                            swal("Data perubahan gagal disimpan!");
                        }
                        });
                });
            });


            $(document).click(function(e) {
                $("#batal-perubahan").click(function(e) {
                    swal({
                        title: "Kamu yakin untuk membatalkan perubahan ini?",
                        text: "",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                        })
                        .then(function(){ 
                            //lempar ke page dashboardProfilPerusahaan
                            location.href = "/dashboardProfilPerusahaan";
                        })
                });
            });

        });
    </script>
@endsection