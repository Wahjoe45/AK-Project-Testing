
@extends('admin.mainAdmin')

@section('container-admin')
<div class="content-wrapper ">
    <div class="content-header p-4">

        <div class="container-fluid ">
            <div class="container mt-4 " style="border: 1px solid #AFA9A9;">
                <div class="row">
                    <div class="col-3">
                        <img src="assets/img/image 1.png" alt="" width="250px">
                    </div>
                    <div class="col-9 text-center" style="margin: auto">
                        <h4><strong>Front-End Developer</strong></h4>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col">
                        <h4><strong>Detail Lowongan</strong></h4>
                        <div class="line-hr mb-3"></div>

                        <h4 class="mt-4 mb-2"><strong>Gaji</strong></h4>
                        <p>Rp.2.500.000 - Rp.4.500.000 per bulan</p>

                        <h4 class="mt-4 mb-2"><strong>Deskripsi Pekerjaan</strong></h4>
                        <p>‣ Good personality, good attitude <br>‣ Memiliki pengalaman web Programming <br>‣ Memahami desain afd dan erd <br>‣ Mampu mengimplentasikan desain ui/ux <br>‣ Menguasai HTML5, CSS3 dan JSX <br>‣ Memahami GIT <br>‣ Memahami Bootsrap <br>‣ Work From Office. Yogyakarta</p>
                    
                        <h4 class="mt-4 mb-2"><strong>Syarat Perkerjaan</strong></h4>
                        <p>‣ Minimal pendidikan SMA/SMK <br>‣ Laki-laki, Perempuan <br>‣ Umur 18-30 <br>‣ Batas lamaran hinggan dd/mm/yyyy</p>
                    
                        <h4 class="mt-4 mb-2"><strong>Aktivitas Lowongan</strong></h4>
                        <p class="text-muted">Lowongan di pasang 2 hari yang lalu</p>
                    </div>
                </div>
            </div>
            <center>
                <a href="detailPerusahaanManagement"><button type="button" class="btn bg-dark">Kembali</button></a>
            </center>
        </div>
    </div>
</div>
@endsection