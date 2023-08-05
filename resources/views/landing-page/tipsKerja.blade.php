
@extends('layouts.main-non-user')
@section('css')
<link rel="stylesheet" type="text/css" href="assets/css/landing-page/tipsKerja.css">
@endsection
@section('container-content')

    <div class="konten">
        {{-- post 1 --}}
        <div class="row" style="text-align: justify">
            <div class="col-lg-3 col-md-4 col-sm-12" data-aos="fade-right" data-aos-delay="200">
                <img src="assets/img/post-tips-kerja.png">
            </div>
            <div class="col-lg-9 col-md-8 col-sm-12" data-aos="fade-left" data-aos-delay="200">
                <h4 style="text-align: left" >4 Rekomendasi Kerja Freelance Menguntungkan yang Patut Kamu Coba </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus posuere aliquam tincidunt ac pretium, eu tristique. Massa, eget eget volutpat amet. Phasellus mollis ultrices enim semper fringilla . Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus posuere aliquam tincidunt ac pretium, eu tristique. Massa, eget eget volutpat amet.</p>
                <span style="text-align: right; color: rgba(165, 165, 165, 1);"><p>2 hari yang lalu <a href="/detailPostTipsKerja" style="color: rgba(242, 100, 25, 1)">selengkapnya >></a></p></span>
            </div>
        </div>
        <hr>

        {{-- post 2 --}}
        <div class="row" style="text-align: justify">
            <div class="col-lg-3" data-aos="fade-right" data-aos-delay="200">
                <img src="assets/img/post-tips-kerja.png">
            </div>
            <div class="col-lg-9" data-aos="fade-left" data-aos-delay="200">
                <h4 style="text-align: left">4 Rekomendasi Kerja Freelance Menguntungkan yang Patut Kamu Coba </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus posuere aliquam tincidunt ac pretium, eu tristique. Massa, eget eget volutpat amet. Phasellus mollis ultrices enim semper fringilla . Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus posuere aliquam tincidunt ac pretium, eu tristique. Massa, eget eget volutpat amet.</p>
                <span style="text-align: right; color: rgba(165, 165, 165, 1);"><p>2 hari yang lalu <a href="/detailPostTipsKerja" style="color: rgba(242, 100, 25, 1)">selengkapnya >></a></p></span>
            </div>
        </div>
        <hr>

        {{-- post 3 --}}
        <div class="row" style="text-align: justify">
            <div class="col-lg-3" data-aos="fade-right" data-aos-delay="200">
                <img src="assets/img/post-tips-kerja.png">
            </div>
            <div class="col-lg-9" data-aos="fade-left" data-aos-delay="200">
                <h4 style="text-align: left">4 Rekomendasi Kerja Freelance Menguntungkan yang Patut Kamu Coba </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus posuere aliquam tincidunt ac pretium, eu tristique. Massa, eget eget volutpat amet. Phasellus mollis ultrices enim semper fringilla . Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus posuere aliquam tincidunt ac pretium, eu tristique. Massa, eget eget volutpat amet.</p>
                <span style="text-align: right; color: rgba(165, 165, 165, 1);"><p>2 hari yang lalu <a href="/detailPostTipsKerja" style="color: rgba(242, 100, 25, 1)">selengkapnya >></a></p></span>
            </div>
        </div>
        <hr>
    </div>

@endsection


@section('js')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
@endsection