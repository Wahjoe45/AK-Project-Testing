

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
    <link rel="stylesheet" type="text/css" href="assets/css/perusahaan/editAlamatSudahAda.css">
    {{-- icons --}}
    {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> --}}

    <style>
        /* ::-webkit-scrollbar {
            display: none;
        }                                                                */
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
            <div class="card-alamat" style="background-color: #FFF7E4; border: none">
                <div class="row">
                    <div class="col-lg-9">
                        <h6 >Alamat Default</h6>
                        <span style="margin-right: 15px"><i class="fa fa-map-marker" aria-hidden="true" style="font-size: 25px"></i></span>
                        Jalan Prapatan Dalam No. 04 Rt. 47 BALIKPAPAN KOTA, KOTA BALIKPAPAN, KALIMANTAN TIMUR, ID, 76111
                    </div>
                    <div class="col-lg-3">
                        {{-- <div style="text-align: right;" class="text-primary"><p>Ubah <i class="fa fa-pencil" aria-hidden="true"></i></p></div> --}}
                        <button type="button" class="btn btn-sm" style="background-color: white;color: rgba(255, 152, 55, 1); font-weight: 500; width: 150px; margin-bottom: 5px;  display: block; margin-left: auto; border: 1px solid rgba(255, 152, 55, 1); margin-top: 20px;">Alamat Utama</button>
                        
                    </div>
                </div>
                <hr>

                {{-- form buat edit alamatnya --}}
                <form action="">
                    {{-- nama alamat --}}
                    <div class="form-input ">
                        <label for="" style="margin-right: 40px;"><span>Nama Alamat</span></label>
                        
                        <div class="input-group" style="width: 100%;">
                            <input type="text"  style="width: 100%; height: 28.67px;border: 1.5px solid #C5C5C5; border-radius: 7px;" placeholder="Contoh: rumah, kantor, gedung, sekolah, dll.">
                        </div>
                    </div>
                    
                    {{-- <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div> --}}

                    {{-- provinsi --}}
                    <div class="form-dropdown">
                        <label for=""  style="margin-right: 52px;">Provinsi<span style="font-size: 20px; color: red;">&nbsp;*</span></label>
                        
                        <div class="input-group mb-2" style="width: 100%;">
                            <select class="custom-select" id="inputGroupSelect02" style="border-radius: 7px; padding: 2px; border: 1.5px solid #C5C5C5;height: 28.67px">
                            <option selected>Pilih Provinsi...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    {{-- kabupaten --}}
                    <div class="form-dropdown">
                        <label for="" style="margin-right: 32px;">Kabupaten<span style="font-size: 20px; color: red;">&nbsp;*</span></label>
                        
                        <div class="input-group mb-2" style="width: 100%;">
                            <select class="custom-select" id="inputGroupSelect02" style="border-radius: 7px; padding: 2px; border: 1.5px solid #C5C5C5;height: 28.67px">
                            <option selected>Pilih Kabupaten...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    {{-- kecamatan --}}
                    <div class="form-dropdown">
                        <label for="" style="margin-right: 32px;">Kecamatan<span style="font-size: 20px; color: red;">&nbsp;*</span></label>
                        
                        <div class="input-group mb-2" style="width: 100%;">
                            <select class="custom-select" id="inputGroupSelect02" style="border-radius: 7px; padding: 2px; border: 1.5px solid #C5C5C5;height: 28.67px">
                            <option selected>Pilih Kecamatan...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    {{-- detail alamat --}}
                    <div class="form-input">
                        <label for="" style="margin-right: 67px;"><span>Detail<span style="font-size: 20px; color: red;">&nbsp;*</span></span></label>
                        
                        <div class="input-group" style="width: 100%;">
                            <input type="text"  style="width: 100%; height: 28.67px;border: 1.5px solid #C5C5C5; border-radius: 7px;" placeholder="Detail alamat anda...">
                        </div>
                    </div>
                    
                </form>

                <hr>


                <button type="button" class="btn btn-sm" style="background-color: rgba(255, 152, 55, 1); color: white;font-weight: 500; width: 180px; margin-bottom: 5px; display: block; margin: auto;" id="simpan-perubahan">Simpan Perubahan <i class="fa fa-check" aria-hidden="true"></i></button>

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
                                location.href = "/editGantiAlamatLain";
                            })
                            
                        } else {
                            swal("Data perubahan gagal disimpan!");
                        }
                        });
                });
            });
        });
    </script>
@endsection