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
    <link rel="stylesheet" type="text/css" href="assets/css/perusahaan/pageKoinSaya.css">
    {{-- icons --}}
    {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> --}}
@endsection

@section('container-content')
    <br><br>
    <div class="container" style="width: 95%; margin: auto">

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


        {{-- deskripsi tabel riwayat --}}

        <div class="row">
            {{-- title riwayat --}}
            <div class="col-lg-3 p-3 " style=" display: flex; justify-items: center;">
                <h4 style="margin: auto"><b>Riwayat</b></h4>
            </div>
            <div class="col-lg-5 p-3" style=" display: flex; align-items: center; ">
                
            </div>

            {{-- button link top up --}}
            <div class="col-lg-2 p-3 text-center text-success" style=" display: flex; justify-content: center">
                <span style="margin-top: auto">
                    <i class="fa fa-plus-circle" style="font-size: 25px" aria-hidden="true"></i>
                    <h6>Top Up Koin</h6>
                </span>
            </div>
            {{-- button link top up --}}
            <div class="col-lg-2 p-3 text-center" style="">
                <h5>Koin Saya</h5>
                <div style=" display: flex; justify-content: center; align-items: center; ">
                    <h3 style="color: #EFAF18;">1000</h3>
                    <img src="assets/icon-img/icon-koin-gede.png" style="max-width: 45px;">
                </div>
            </div>
        </div>

        {{-- list orang orang lamar pada postingan lowongan saya --}}
        <div class="wadah-list-orang-lamar">
            <table class="table" style="text-align: center">
                <thead>
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Feb 08, 22</td>
                        <td>Top Up Koin melalui transfer Bank</td>
                        <td style="color: #A5A5A5">Belum Bayar</td>
                        <td>
                            <span style="display: flex; justify-content: space-between; align-items: center;width: max-content; margin: auto;">
                                <h5 class="text-success mr-1">1000</h5>
                                <img src="assets/icon-img/icon-coin-kecil.png" style="max-width: 25px;height: 25px;">
                            </span>
                        </td>
                        <td>
                            <i class="fa fa-eye" style="color:#F26419; font-size: 20px" aria-hidden="true"></i>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>Feb 08, 22</td>
                        <td>Pembukaan CV Kandidat Areakerja</td>
                        <td style="color: #A5A5A5">Berhasil</td>
                        <td>
                            <span style="display: flex; justify-content: space-between; align-items: center;width: max-content; margin: auto;">
                                <h5 class="text-danger mr-1">-5</h5>
                                <img src="assets/icon-img/icon-coin-kecil.png" style="max-width: 25px;height: 25px;">
                            </span>
                        </td>
                        <td>
                            <i class="fa fa-eye" style="color:#F26419; font-size: 20px" aria-hidden="true"></i>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>Feb 08, 22</td>
                        <td>Daftar  Talent Hunter  Areakerja</td>
                        <td style="color: #A5A5A5">Berhasil</td>
                        <td>
                            <span style="display: flex; justify-content: space-between; align-items: center;width: max-content; margin: auto;">
                                <h5 class="text-danger mr-1">-20</h5>
                                <img src="assets/icon-img/icon-coin-kecil.png" style="max-width: 25px;height: 25px;">
                            </span>
                        </td>
                        <td>
                            <i class="fa fa-eye" style="color:#F26419; font-size: 20px" aria-hidden="true"></i>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>Feb 08, 22</td>
                        <td>Top Up Koin melalui transfer Bank</td>
                        <td style="color: #A5A5A5">Berhasil</td>
                        <td>
                            <span style="display: flex; justify-content: space-between; align-items: center;width: max-content; margin: auto;">
                                <h5 class="text-success mr-1">1000</h5>
                                <img src="assets/icon-img/icon-coin-kecil.png" style="max-width: 25px;height: 25px;">
                            </span>
                        </td>
                        <td>
                            <i class="fa fa-eye" style="color:#F26419; font-size: 20px" aria-hidden="true"></i>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>Feb 08, 22</td>
                        <td>Pembukaan CV Kandidat Areakerja</td>
                        <td style="color: #A5A5A5">Berhasil</td>
                        <td>
                            <span style="display: flex; justify-content: space-between; align-items: center;width: max-content; margin: auto;">
                                <h5 class="text-success mr-1">-5</h5>
                                <img src="assets/icon-img/icon-coin-kecil.png" style="max-width: 25px;height: 25px;">
                            </span>
                        </td>
                        <td>
                            <i class="fa fa-eye" style="color:#F26419; font-size: 20px" aria-hidden="true"></i>
                        </td>
                        
                    </tr>
                </tbody>
            </table>

            <br>

            {{-- next lihat tabel selanjutnya --}}
            <div style="margin: auto; display: flex; justify-content: space-between; align-items: center; width: 170px">
                <span><i class="fa fa-angle-double-left" aria-hidden="true" style="font-size: 20px"></i></span>
                <span style="display: flex; align-items: center; justify-content: space-between; width: 70%">
                    <div class="rounded-circle bg-primary text-light text-center" style="width: 30px; height: 30px;">1
                    </div>
                    <div class="rounded-circle bg-light text-center" style="width: 30px; height: 30px;">2</div>
                    <div class="rounded-circle bg-light text-center" style="width: 30px; height: 30px;">3</div>
                </span>
                <span><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size: 20px"></i></span>
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
            $(document).ready(function() {
                $(document).click(function(e) {
                    $("#hapus-kandidat1, #hapus-kandidat2, #hapus-kandidat3").click(function(e) {
                        swal({
                                title: "Kamu yakin untuk menghapus kandidat ini?",
                                text: "",
                                icon: "warning",
                                buttons: true,
                                dangerMode: true,
                            })
                            .then((willDelete) => {
                                if (willDelete) {
                                    swal("Data kandidat berhasil dihapus!", {
                                            icon: "success",

                                        })
                                        .then(function() {

                                            //lempar ke page dashboardProfilPerusahaan
                                            location.href = "/kandidatPelamar";
                                        })

                                } else {
                                    swal("Data kandidat gagal dihapus!");
                                }
                            });
                    });
                });

                $("#hapus-kandidat1, #hapus-kandidat2, #hapus-kandidat3").hover(function(event) {
                    $(this).css("text-decoration", "underline");
                }, function() {
                    $(this).css("text-decoration", 'none');
                });
            });
        </script>
    @endsection
