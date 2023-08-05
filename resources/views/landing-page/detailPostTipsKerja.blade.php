
@extends('layouts.main-non-user')
@section('css')
<link rel="stylesheet" type="text/css" href="assets/css/landing-page/detailPostTipsKerja.css">
@endsection
@section('container-content')

    <div class="konten">
        {{-- button back --}}

        <p style="display: flex;" class="button-back">
            <span>
                <a href="/tipsKerja"><span class="material-symbols-outlined">arrow_back_ios</span></a>
            </span>
            <span><a href="/tipsKerja">kembali</a></span>
        </p>
        
        <span></span>
        <section class="title-post">
            <h1 style="color: rgba(47, 72, 88, 1);">4 Rekomendasi Kerja Freelance Menguntungkan yang Patut Kamu Coba</h1><br>
            <p style="color: rgba(242, 100, 25, 1);">Areakerja.com <br>
                <span style="color: rgba(165, 165, 165, 1);">Kamis, 27 Oktober 2022 13.00 WIB</span>
            </p>
        </section>
        <span style="text-align: right">
            <p class="icon-bagikan" style="color: rgba(165, 165, 165, 1); display: flex; align-items: center; justify-content: end; gap: 0.5em;">BAGIKAN &nbsp;&nbsp;&nbsp;
                <img src="assets/icon-img/icon-facebook-color.png">
                <img src="assets/icon-img/icon-tweeter-color.png">
                <img src="assets/icon-img/icon-whatsapp-color.png">
                <img src="assets/icon-img/icon-telegram-color.png">
            </p>
        </span>

        <img src="assets/img/main-img-detail-post-tips-kerja.png" class="main-image">
        <p>Sumber foto : www.kompas.com</p>

        <section class="konten-main">
            <p>
                Mau mendapatkan penghasilan tambahan? Ingin dapat pengalaman dari luar pekerjaan utama? Tentu saja, kamu bisa mencari
                pekerjaan freelance atau pekerja lepas sebagai salah satu solusi untuk mendapatkan pemasukan di luar pendapatan utama
                kamu. Atau mungkin buat kamu yang masih ingin mendapatkan pengalaman di dunia pekerjaan, tentu saja kerja freelance
                adalah jawabannya. Hanya saja, dari sekian banyak jenis pekerjaan freelance, tentu hanya ada beberapa yang memiliki
                prospek dan menjanjikan di masa mendatang. Ini tentu akan jadi pertimbangan kamu sebagai calon pekerja lepas. Lalu,
                apa saja sih tip pekerjaan yang menjanjikan sebagai freelance itu? Penasaran ya? Tak perlu berlama-lama, berikut ini
                adalah beberapa jenis kerja freelance terbaik yang sanggup memberikan keuntungan finansial buat kamu.
            </p>

            <br>
            <h3 style="color: rgba(47, 72, 88, 1);">Jenis Pekerjaan Freelance yang Menguntungkan</h3>
            <br><br>

            <h4>1. Penulis Konten Lepas</h4>

            <br>
            <img src="assets/img/detail-tips-kerja-post-1.png">
            <p>Sumber foto : www.detik.com</p>

            <p>Penulis konten atau bahasan kerennya Content Writer merupakan satu dari sekian banyak pekerjaan freelance yang sanggup
                memberikan Anda pemasukan yang menguntungkan. <br><br>Hal itu tak lepas dari kebutuhan perusahaan dari berbagai bidang industri
                yang tentunya membutuhkan sebuah tulisan artikel untuk dimuat di web atau situs mereka. <br><br>Apalagi, di era yang serba
                digital seperti sekarang ini, tentu saja menjadi salah satu kesempatan untuk kamu yang punya bakat dan minat dalam bidang
                tulis menulis.<br><br> Mengingat, ke depan akan banyak perusahaan yang tentu membutuhkan penulis konten untuk setiap produknya.
                Baik itu konten pemasaran, konten deskripsi, maupun konten tulisan artikel pada sebuah website.</p>
        </section>
    </div>

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
@endsection