@extends('layouts.main-non-user')
@section('css')
<link rel="stylesheet" type="text/css"href="assets/css/landing-page/talentHunter.css">
@endsection

{{-- @section('title-jumbotron')
    Tips Kerja
@endsection

@section('child-title-jumbotron')
    Daftarkan perusahaan anda dan biar kami yang mencarikan kandidat yang cocok untuk anda
@endsection --}}

@section('container-content')
    <div class="konten">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12"data-aos="zoom-in">
                <img src="assets/img/pic-main-talent-hunter.png">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-left" style="margin-top: 30px">
                <h1>Langkah-Langkah <br> Daftar Talent Hunter</h1>
                <ul style="list-style: none;">
                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperd</li>
                </ul>
                    
            </div>
        </div>
        <br><br><br><br><br><br>
        {{-- benefit talent hunter --}}
        <h1 id="title-benefit">Benefit Talent Hunter</h1>
        <hr style="width: 30%; margin-top: -30px; border: 2px solid rgba(242, 100, 25, 1); border-radius: 5px; margin: auto;">
        
        <div class="container wadah-icon-benefit">
            <div class="row">
                <div class="col-sm-3" data-aos="zoom-in" ><img src="assets/icon-img/icon-ceklis-talent-hunter.png" style="width: 55px;margin-bottom: 20px;"><p>Mendapatkan kandidat sesuai kebutuhan perusahaan</p></div>
                <div class="col-sm-3" data-aos="zoom-in"><img src="assets/icon-img/icon-person-talent-hunter.png" style="width: 55px; margin-bottom: 20px;"><p>Kandidat yang didapatkan dipastikan siap kerja</p></div>
                <div class="col-sm-3" data-aos="zoom-in"><img src="assets/icon-img/icon-filter-talent-hunter.png" style="width: 55px; margin-bottom: 15px;"><p>Mempermudah perusahaan dalam penyaringan kandidat</p></div>
                <div class="col-sm-3" data-aos="zoom-in"><img src="assets/icon-img/icon-verify-talent-hunter.png" style="width: 55px; margin-bottom: 20px;"><p>Jaminan ganti kandidat yang baru jika tidak cocok</p></div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
@endsection