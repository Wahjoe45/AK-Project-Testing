@extends('superAdmin.mainSuperAdmin')

@section('container-superAdmin')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
       <div class="container pt-3 pb-3 bg-white" style="border-radius: 10px; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
        <div class="row">
            <div class="col-md-2">
                <span class="fs-4 text-black">Data Pelamar</span>
            </div>
            <div class="col">

            </div>
            <div class="col-md-1 text-right">
                <a href="#">
                    <button type="button" class="btn btn-lg-orange">
                        Kandidat
                    </button>
                </a>
            </div>
            <div class="col-md-2 text-right">
                <a href="nonKandidatPelamarSuperAdmin">
                    <button type="button" class="btn btn-outline-lg-orange">
                        Non-Kandidat
                    </button>
                </a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-3">
                <a href="">
                    <button type="button" class="btn btn-lg-orange">
                        <i class='menu-icon tf-icons bx bx-plus'></i>Tambahkan Data
                    </button>
                </a>
            </div>
            <div class="col"></div>
            <div class="col-md-5">
                <div class="input-group mb-3">
                    <button class="btn btn-lg-orange" type="button" id="button-addon1"><i class='bx bx-search-alt-2'></i></button>
                    <input type="text" class="form-control form-control-orange" placeholder="Search Here..." aria-label="Example text with button addon" aria-describedby="button-addon1">
                  </div>
            </div>
        </div>
        <div class="row mt-2">
            <table class="table align-middle">
                <thead>
                <tr class="text-center bg-lg-orange">
                    <th scope="col" class=" text-white">ID</th>
                    <th scope="col" class=" text-white">Nama Lengkap</th>
                    <th scope="col" class=" text-white">Pendidikan</th>
                    <th scope="col" class=" text-white">Keahlian</th>
                    <th scope="col" class=" text-white">Umur</th>
                    <th scope="col" class=" text-white">Alamat</th>
                    <th scope="col" class=" text-white">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                    <th scope="row">1</th>
                    <td>Bambang Pamungkas</td>
                    <td>S1</td>
                    <td>Front-End Developer</td>
                    <td>22</td>
                    <td>Ngasinan, Kraguman, Jogonalan, Klaten Jawa Tengah 57452</td>
                    <td>
                        <a href="detailPelamarKandidat">
                            <button type="button" class="btn btn-lg-orange btn-sm" data-ripple-color="dark">
                            View
                            </button>
                        </a>
                    </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Cristono Rolandi</td>
                        <td>D3</td>
                        <td>Back-End Developer</td>
                        <td>21</td>
                        <td>Paoman, Indramayu, Indramayu, Jawa Barat 54747</td>
                        <td>
                            <a href="detailPelamarKandidat">
                                <button type="button" class="btn btn-lg-orange btn-sm" data-ripple-color="dark">
                                View
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Raswa Febriyanto</td>
                        <td>S3</td>
                        <td>UI/UX Dsigner</td>
                        <td>30</td>
                        <td>Celeng, Lobener, Indramayu, Jawa Barat 54747</td>
                        <td>
                            <a href="detailPelamarKandidat">
                                <button type="button" class="btn btn-lg-orange btn-sm" data-ripple-color="dark">
                                View
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Eka Kumalala</td>
                        <td>S2</td>
                        <td>Data Analisis</td>
                        <td>28</td>
                        <td>Celeng, Lobener, Indramayu, Jawa Barat 54747</td>
                        <td>
                            <a href="detailPelamarKandidat">
                                <button type="button" class="btn btn-lg-orange btn-sm" data-ripple-color="dark">
                                View
                                </button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
       </div>
    </div>
</div>
@endsection
