{{-- <link rel="stylesheet" href="/assets/css/partials/header-jumbotron.css"> --}}
<div class="jumbotron jumbotron-fluid"  data-aos="fade-up" data-aos-delay="200"

@php
    $title = "";
@endphp

        style="{{ ($title === 'beranda') ? 'background-image: url("assets/img/bg-hero-1.png");' : '' }}
                {{ ($title === 'Tips Kerja') ? 'background-image: url("assets/img/tips-bg.png");' : '' }}
                {{ ($title === 'Talent Hunter') ? 'background-image: url("assets/img/bg-hero-talent-hunter.png");' : '' }}
                {{ ($title === 'Daftar Kandidat') ? 'background-image: url("assets/img/bg-hero-daftar-kandidat.png");' : '' }}
                {{ ($title === 'Pasang Lowongan') ? 'background-image: url("assets/img/pasangLowongan.png");' : '' }}
                {{ ($title === 'Syarat Ketentuan') ? 'background-image: url("assets/img/pasangLowongan.png");' : '' }}
                {{ ($title === 'Rekrut Saya') ? 'background-image: url("assets/img/rekrutSaya.png");' : '' }}
                {{ ($title === 'Rekrut Detail') ? 'background-image: url("assets/img/rekrutSaya.png");' : '' }}
                {{ ($title === 'Lowongan Detail') ? 'background-image: url("assets/img/bg-hero-lowongan-tersimpan.png");' : '' }}
                {{ ($title === 'Beranda Pelamar') ? 'background-image: url("assets/img/bg-hero-1.png");' : '' }}
                {{ ($title === 'Profil Pelamar') ? 'background-image: url("assets/img/bg-hero-1.png");' : '' }}
                {{ ($title === 'Alamat Pelamar') ? 'background-image: url("assets/img/bg-hero-1.png");' : '' }}
                {{ ($title === 'Isi data diri') ? 'background-image: url("assets/img/bg-hero-1.png");' : '' }}
                {{ ($title === 'isiAlamatr') ? 'background-image: url("assets/img/bg-hero-1.png");' : '' }}
                {{ ($title === 'data lengkap') ? 'background-image: url("assets/img/bg-hero-1.png");' : '' }}

                ; background-size:cover;">
        <div class="container">
           <h1 class="display-4 title-main" data-aos="fade-up" data-aos-delay="200" data-aos-delay="200">
                {!! ($title === 'Talent Hunter') ? '<b>Talent <br> Hunter</b>'  : '' !!}
                {!! ($title === 'beranda') ? '<b>Tempatnya <br> Cari Kerja</b>'  : '' !!}
                {!! ($title === 'Tips Kerja') ? '<b>Tips Kerja</b>'  : '' !!}
                {!! ($title === 'Pasang Lowongan') ? '<b>Pasang <br> Lowongan</b>'  : '' !!}
                {!! ($title === 'Daftar Kandidat') ? '<b>Daftar <br> Kandidat</b>'  : '' !!}
                {!! ($title === 'Syarat Ketentuan') ? '<b>Syarat <br> dan Ketentuan</b>'  : '' !!}
                {!! ($title === 'Rekrut Saya') ? '<b>Rekrut <br> Saya</b>'  : '' !!}
                {!! ($title === 'Rekrut Detail') ? '<b>Rekrut <br> Saya</b>'  : '' !!}
                {!! ($title === 'Lowongan Detail') ? '<b>Lowongan <br> Tersimpan</b>'  : '' !!}
                {!! ($title === 'Beranda Pelamar') ? '<b>Tempatnya <br> Cari Kerja</b>'  : '' !!}
                {!! ($title === 'Profil Pelamar') ? '<b>Hi Bambang</b>'  : '' !!}
                {!! ($title === 'Alamat Pelamar') ? '<b>Hi Bambang</b>'  : '' !!}
                {!! ($title === 'Isi data diri') ? '<b>Hi Bambang</b>'  : '' !!}
                {!! ($title === 'isiAlamatr') ? '<b>Hi Bambang</b>'  : '' !!}
                {!! ($title === 'data lengkap') ? '<b>Hi Bambang</b>'  : '' !!}
                

            </h1>
            <p class="lead child-main" data-aos="fade-up" data-aos-delay="200">

                {!! ($title === 'Talent Hunter') ? 'Daftarkan perusahaan anda dan biar kami <br> yang mencarikan kandidat yang cocok untuk anda' : '' !!}
                {!! ($title === 'beranda') ? 'Temukan loker terbaru se-Indonesia <br> dengan mudah!' : '' !!}
                {!! ($title === 'Tips Kerja') ? 'Pelajari tips-tips kerja yang telah kami rangkum <br> untuk anda' : '' !!}
                {!! ($title === 'Pasang Lowongan') ? 'Dapatkan karyawan berkualitas <br> untuk perusahaan anda' : '' !!}
                {!! ($title === 'Daftar Kandidat') ? 'Ikuti pelatihan terakreditasi Aeakerja.com <br> dan dapatkan pekerjaan impian anda!' : '' !!}
                {!! ($title === 'Rekrut Saya') ? 'CV anda sudah terdaftar. Perusahaan impian anda akan segera merekrut anda .' : '' !!}
                {!! ($title === 'Rekrut Detail') ? 'CV anda sudah terdaftar. Perusahaan impian anda akan segera merekrut anda .' : '' !!}
                {!! ($title === 'Beranda Pelamar') ? 'Temukan loker terbaru se-Indonesia <br> dengan mudah!' : '' !!}

                {!! ($title === 'Profil Pelamar') ? '<b></b>Selamat bergabung di Area Kerja~</b>'  : '' !!}            
                {!! ($title === 'Alamat Pelamar') ? '<b></b>Selamat bergabung di Area Kerja~</b>'  : '' !!}            
                {!! ($title === 'Isi data diri') ? '<b></b>Selamat bergabung di Area Kerja~</b>'  : '' !!}            
                {!! ($title === 'isiAlamatr') ? '<b></b>Selamat bergabung di Area Kerja~</b>'  : '' !!}            
                {!! ($title === 'data lengkap') ? '<b></b>Selamat bergabung di Area Kerja~</b>'  : '' !!}            


            </p>

            {{-- button untuk page daftar kandidat page --}}
            {!! ($title === 'Daftar Kandidat') ? '<button type="button" class="btn" style="background-color: rgba(242, 100, 25, 1); color: white; margin-left: 90px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Daftar</button> 
            ' : '' !!}

            {{-- button untuk page talent hunter --}}
            {!! ($title === 'Talent Hunter') ? '<button type="button" class="btn" style="background-color: rgba(242, 100, 25, 1); color: white; margin-left: 90px;">Daftar</button>' : '' !!}
        </div>
</div>





