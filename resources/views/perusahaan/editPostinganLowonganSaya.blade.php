

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
    <link rel="stylesheet" type="text/css" href="assets/css/perusahaan/editPostinganLowonganSaya.css">
    {{-- icons --}}
    {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> --}}
@endsection

@section('container-content')
    <br><br>
    <div class="container" style="width: 80%; margin: auto">

        {{-- button back --}}
        <p style="display: flex; " id="button-back">
            <span>
                <a href="/postinganLowonganSaya"><span class="material-symbols-outlined">arrow_back_ios</span></a>
            </span>
            <span><a href="/postinganLowonganSaya">kembali</a></span>
        </p>

        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-2" style="">
                <img src="assets/img/logo-seven-inc.png" width="100%" style="margin: auto; display: block;">
            </div>
            <div class="col-lg-10 col-md-9 col-sm-10" style="padding: 20px;padding-left: 30px">
                <h3><strong>Seven_Inc</strong></h3>
                <h4>Jasa TI dan Konsultan TI</h4>
                <p style="color: #A5A6B4;">Kota Sleman, D.I. Yogyakarta, Indonesia</p>
            </div>
        </div>
        
        <br>

        {{-- Detail postingan lowongan saya --}}

        
        <div class="wadah-detail-postingan">
            {{-- baris 1 --}}
            <div class="row">
                <div class="col-lg-4 col-sm-6" style="">
                    
                    <div class="wadah">
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
                    <br>
                    {{-- edit input alamat --}}
                    <h5>Alamat</h5>
                    <div class="jenis-lowongan">
                        <select name="" id="" style="padding: 3px; width: 150px" class="flex-item">
                            <option value="">Kantor Utama</option>
                            <option value="">Kantor 2</option>
                            <option value="">Kantor 3</option>
                            <option value="">Kantor 4</option>
                        </select>
                    </div>
                </div>
                {{-- deskripsi detail lowongan --}}
                <div class="col-lg-8 col-sm-6" style="">
                    
                    <div class="edit-postingan-lowongan">

                        {{-- deskripsi detail nya --}}
                        <h4 style="margin-bottom: 30px">Detail Lowongan</h4>

                        {{-- input edit gaji --}}
                        <h5>Gaji</h5>
                        
                        <div class="gaji">
                            <input type="number" name="" id="" style="width: 150px" class="flex-item">
                            <h5 class="flex-item">-</h5>
                            <input type="number" name="" id="" placeholder="optional" style="width: 150px" class="flex-item">
                            <h3 style="font-weight: 300"class="flex-item">/</h3>
                            <select name="" id="" style="padding: 3px;" class="flex-item">
                                <option value="">Per jam</option>
                                <option value="">Per hari</option>
                                <option value="">Per minggu</option>
                                <option value="">Per bulan</option>
                                <option value="">Per 3 bulan</option>
                                <option value="">Per 6 bulan</option>
                                <option value="">Per tahun</option>
                            </select>
                        </div>  

                        <br>
                        {{-- edit input jenis lowongan --}}
                        <h5>Jenis Lowongan</h5>
                        {{-- <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Full-Time</h6> --}}
                        <div class="jenis-lowongan">
                            <select name="" id="" style="padding: 3px; width: 150px" class="flex-item">
                                <option value="">Part-Time</option>
                                <option value="">Full-Time</option>
                                <option value="">Half-Time</option>
                                <option value="">Half-Week</option>
                                <option value="">Half-Moon</option>
                                <option value="">Lainnya</option>
                            </select>
                        </div>

                        <br>
                        {{-- deskripsi pekerjaan --}}
                        <h5>Deskripsi Pekerjaan</h5>

                        <div class="deskripsi-pekerjaan">
                            <textarea name="" id="" cols="30" rows="10">

                            </textarea>
                        </div>
                        
                        <br>
                        {{-- syarat pekerjaan --}}
                        <h5>Syarat Pekerjaan</h5>
                        <div class="syarat-pekerjaan">
                            {{-- pendidikan --}}
                            <div class="row">
                                <div class="col-lg-4 p-2" style="">
                                    <h6>Pendidikan</h6>
                                </div>
                                <div class="col-lg-8 p-2 radio-pendidikan" style="">
                                    {{-- input radio button pendidikan --}}
                                    <span>
                                        <input type="radio" id="html" name="fav_language" value="HTML">
                                        <label for="html">SD</label>
                                    </span>
                                    <span>
                                        <input type="radio" id="css" name="fav_language" value="CSS">
                                        <label for="css">SMP</label>
                                    </span>
                                    <span>
                                        <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                                        <label for="javascript">SMA</label>
                                    </span>
                                    <span>
                                        <input type="radio" id="css" name="fav_language" value="CSS">
                                        <label for="css">SMK</label>
                                    </span>
                                    <span>
                                        <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                                        <label for="javascript">S1</label>
                                    </span>
                                    <span>
                                        <input type="radio" id="css" name="fav_language" value="CSS">
                                        <label for="css">S2</label>
                                    </span>
                                    <span>
                                        <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                                         <label for="javascript">S3</label>
                                    </span>
                                    <span>
                                        <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                                        <label for="javascript">D3</label>
                                    </span>
                                </div>
                            </div>

                            {{-- Jenis Kelamin --}}
                            <div class="row">
                                <div class="col-lg-4 p-2" style=";">
                                    <h6>Jenis Kelamin</h6>
                                </div>
                                <div class="col-lg-8 p-2 checkbox-jenis-kelamin" style=";">
                                    {{-- checkbox jenis kelamin --}}
                                    <span>
                                        <input type="checkbox" id="html" name="fav_language" value="HTML">
                                        <label for="html">Laki-Laki</label>
                                    </span>
                                    <span>
                                        <input type="checkbox" id="css" name="fav_language" value="CSS">
                                        <label for="css">Perempuan</label>
                                    </span>
                                </div>
                            </div>

                            {{-- Umur --}}
                            <div class="row">
                                <div class="col-lg-4 p-2" style=";">
                                    <h6>Umur</h6>
                                </div>
                                <div class="col-lg-8 p-2 input-umur" style=";">
                                    {{-- input number umur --}}
                                    <div class="flex-item" style="display: flex; width: max-content;">
                                        <input type="number" name="" id="" style="width: 80px" class="flex-item">
                                        <h5 class="flex-item">-</h5>
                                        <input type="number" name="" id="" placeholder="opsional" style="width: 80px" class="flex-item">
                                        
                                    </div>
                                    
                                </div>

                            </div>

                            {{-- Batas Lamaran --}}
                            <div class="row">
                                <div class="col-lg-4 p-2" style=";">
                                    <h6>Batas Lamaran</h6>
                                </div>
                                <div class="col-lg-8 p-2 input-umur" style=";">
                                    {{-- input date batas lamaran --}}
                                    <div class="flex-item" style=";display: flex; width: max-content;">
                                        <input type="date" name="" id="" style="width: 150px" class="flex-item">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>
                        
                        <button type="button" class="btn mx-auto d-block" id="simpan-perubahan" style="background-color: #F79C4B; color: white; width: 100px; font-weight: 500">Simpan</button>
                    </div>
                    
                </div>
            </div>

             
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
                                location.href = "/detailPostinganLowongan";
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