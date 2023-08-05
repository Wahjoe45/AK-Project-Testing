@extends('admin.mainAdmin')

@section('container-admin')
<div class="content-wrapper ">
    <div class="content-header p-4">
        <div class="container-fluid border border-2 p-4" style="box-shadow: 0px 2px 2px 1px rgba(0, 0, 0, 0.25);">
            <div class="row">
                <div class="col-sm-11">
                </div>
                <div class="col-sm-1 text-right">
                    <a href="perusahaanTalentHunter">
                        <button type="button" class="btn">
                            <i class="fa-solid fa-x"></i>
                        </button>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4>Deskripsi Perusahaan</h4>
                    <div class="line-hr-1"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend justo eu urna fermentum, vel venenatis ipsum vestibulum. Suspendisse consectetur odio nec scelerisque fringilla. Nulla facilisi. Sed gravida vestibulum enim, ac hendrerit nulla varius id. Fusce ut tellus vel metus tempus posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ultrices quam quis augue venenatis, a congue ipsum lobortis. Vestibulum euismod vitae ipsum in interdum. Pellentesque tincidunt urna et metus lobortis, nec fermentum lectus interdum.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4>Culture Perusahaan</h4>
                    <div class="line-hr-1"></div>
                    <p>In et sagittis dui. Integer aliquam et erat a aliquam. Nulla facilisi. Pellentesque tristique lacus ut quam tristique dictum. Nam ut enim vel orci hendrerit dapibus. Sed feugiat, arcu ac faucibus viverra, turpis dolor volutpat lectus, eu pharetra justo felis quis tortor. Quisque dignissim tortor a lacus aliquet tincidunt. Sed iaculis vel dui vel consequat. Aenean venenatis eleifend metus, vel cursus odio. Proin ut lacus orci. Aenean eu fermentum tellus, a dapibus felis. Aliquam auctor pellentesque felis, non laoreet velit sagittis ut. Sed id fermentum odio. Vestibulum id facilisis libero. Sed vel purus sagittis, cursus tortor ac, fermentum massa. Ut id nisi fermentum, fringilla nunc a, cursus velit. Vivamus euismod urna vel purus pellentesque vestibulum.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4>Alamat</h4>
                    <div class="line-hr-1"></div>
                    <p>Ngasinan, Kraguman, Jogonalan, Klaten Jawa Tengah 57452</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4>Kriteria Kandidat</h4>
                    <div class="line-hr-1"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>Posisi yang dibutuhkan</p>
                    <p>Jenis Kelamin</p>
                    <p>Kisaran Gaji</p>
                    <p>Detail Tambahan</p>
                </div>
                <div class="col-6">
                    <p>: Front-End Developer</p>
                    <p>: Laki - Laki</p>
                    <p>: Rp 4.500.000 sampai Rp 6.500.000</p>
                    <p>: Memiliki pengalaman lebih dari 1 tahun</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection