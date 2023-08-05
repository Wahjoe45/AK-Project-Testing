

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
    <link rel="stylesheet" type="text/css" href="assets/css/perusahaan/listOrangLamarLowonganSaya.css">
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

        <div class="row">
            {{-- title kandidat --}}
            <div class="col-lg-3 p-3" style=" display: flex; align-items: center; ">
                <h4 style="margin: auto"><b>Kandidat <span><img src="assets/img/areakerjalogo17.png" style="width: 30px"></span></b></h4>
            </div>
            {{-- input untuk nama / username kandidat --}}
            <div class="col-lg-3 p-3" style=" display: flex; align-items: center; justify-content: center">
                <div style=" display: flex; justify-content: start; align-items: center; ">
                     <div style="position: relative; max-width: max-content;">
     
                         <div style="border: 2px solid #A5A5A5; width: max-content; display: flex; justify-content: end; border-radius: 8px; padding: 8px; padding-top: 10px">
                        
                             <input type="text"  style="border: none;" placeholder="Nama kandidat/username">
                         </div>
                         <span style="position: absolute; top: -10px; left: 45px; background-color: white;"><h6 style="margin-bottom: 0px">Nama</h6></span>
                     </div>
                 </div>
            </div>
            {{-- dropdown untuk jenis paket --}}
            <div class="col-lg-3 p-3" style=" display: flex; align-items: center; justify-content: center">
                <div style=" display: flex; justify-content: start; align-items: center; ">
                     <div style="position: relative; max-width: max-content;">
     
                         <div style="border: 2px solid #A5A5A5; width: max-content; display: flex; justify-content: end; border-radius: 8px; padding: 8px; padding-top: 10px">
                             <select name="" style="border: none; width: 180px;">
                                 <option value="">Programmer</option>
                                 <option value="">Videographer</option>
                                 <option value="">UI /UX</option>
                             </select>
                         </div>
                         <span style="position: absolute; top: -10px; left: 45px; background-color: white;"><h6 style="margin-bottom: 0px">Skill</h6></span>
                     </div>
                 </div>
            </div>
            {{-- button search --}}
            <div class="col-lg-3 p-3" style=" display: flex; align-items: center;  justify-content: center" >
                <button type="button" class="btn btn-cari-kandidat">
                    <i class="fa fa-search" aria-hidden="true"></i>&nbsp;Cari Kandidat
                </button>
            </div>
        </div>

        {{-- list orang orang lamar pada postingan lowongan saya --}}
        <div class="wadah-list-orang-lamar">
            <table class="table" style="text-align: center">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Nama</th>
                    <th scope="col">SKill</th>
                    <th scope="col">CV</th>
                    <th scope="col">Ekspetasi Range Gaji</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" >
                        <div class="rounded-circle" style="background-size: cover; background-image: url('assets/img-thumbnails/thumb-pic-kandidat1.jpeg'); width: 50px; height: 50px;')">
                        </div>
                    </th>
                    <td>Bambang Kurnia</td>
                    <td>Programmer</td>
                    <td style="color: #FF9837">
                        <span style="display: flex; align-items: center; justify-content: space-between; width: 65px; margin: auto">
                            <i class="fa fa-download" aria-hidden="true"></i> |
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </span>
                    </td>
                    <td>Rp. 5.500.000</td>
                    <td class="text-success">Diterima <i class="fa fa-check" aria-hidden="true"></i></td>
                    <td style="color: #FF9837" id="hapus-kandidat1">Hapus <i class="fa fa-trash-o" aria-hidden="true"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">
                        <div class="rounded-circle" style="background-size: cover; background-image: url('assets/img-thumbnails/thumb-pic-kandidat1.jpeg'); width: 50px; height: 50px;')">
                        </div>
                    </th>
                    <td>Bambang Kurnia</td>
                    <td>Programmer</td>
                    <td style="color: #FF9837">
                        <span style="display: flex; align-items: center; justify-content: space-between; width: 65px; margin: auto">
                            <i class="fa fa-download" aria-hidden="true"></i> |
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </span>
                    </td>
                    <td>Rp. 5.500.000</td>
                    <td class="text-danger">Ditolak <i class="fa fa-times" aria-hidden="true"></i></td>
                    <td style="color: #FF9837" id="hapus-kandidat2">Hapus <i class="fa fa-trash-o" aria-hidden="true"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">
                        <div class="rounded-circle" style="background-size: cover; background-image: url('assets/img-thumbnails/thumb-pic-kandidat1.jpeg'); width: 50px; height: 50px;')">
                        </div>
                    </th>
                    <td>Bambang Kurnia</td>
                    <td>Programmer</td>
                    <td style="color: #FF9837">
                        <span style="display: flex; align-items: center; justify-content: space-between; width: 65px; margin: auto">
                            <i class="fa fa-download" aria-hidden="true"></i> |
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </span>
                    </td>
                    <td>Rp. 5.500.000</td>
                    <td class="text-warning">Pending</td>
                    <td style="color: #FF9837" id="hapus-kandidat3">Hapus <i class="fa fa-trash-o" aria-hidden="true"></i></td>
                  </tr>
                </tbody>
              </table>

              <br>

              {{-- next lihat tabel selanjutnya --}}
              <div style="margin: auto; display: flex; justify-content: space-between; align-items: center; width: 170px">
                    <span><i class="fa fa-angle-double-left" aria-hidden="true" style="font-size: 20px"></i></span>
                    <span style="display: flex; align-items: center; justify-content: space-between; width: 70%" >
                        <div class="rounded-circle bg-primary text-light text-center" style="width: 30px; height: 30px;">1</div>
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
        $(document).ready(function(){
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
                            .then(function(){ 
                            
                                //lempar ke page dashboardProfilPerusahaan
                                location.href = "/kandidatPelamar";
                            })
                            
                        } else {
                            swal("Data kandidat gagal dihapus!");
                        }
                        });
                });
            });

            $("#hapus-kandidat1, #hapus-kandidat2, #hapus-kandidat3").hover(function(event){
                $(this).css("text-decoration", "underline");}, function(){
                    $(this).css("text-decoration", 'none');
            });
        });
    </script>
@endsection