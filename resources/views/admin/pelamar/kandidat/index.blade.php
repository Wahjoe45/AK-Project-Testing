@extends('admin.mainAdmin')

@section('container-admin')
<div class="content-wrapper ">
    <div class="content-header ">
        <div class="container-fluid ">
            <h3 class="mb-3">Profile Admin</h3>
            <div class="row mb-4">
                <div class="col-md-1 ">
                    <a href="pelamarKandidat"><button type="button" class="btn btn-dark" >Kandidat</button></a>
                </div>
                <div class="col-md-2">
                    <a href="pelamarNonKandidat"><button type="button" class="btn btn-outline-dark" >non-kandidat</button></a>
                </div>
                <div class="col-md-5">
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                        <input type="email" id="form1Example1" class="form-control" placeholder="Search here....."/>
                    </div>
                </div>
            </div>
            <div class="row">
                <table class="table align-middle">
                    <thead>
                      <tr class="text-center bg-dark">
                        <th scope="col">ID</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">Keahlian</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
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
                                <button type="button" class="btn btn-link btn-sm" data-ripple-color="dark">
                                <i class="fa-solid fa-eye"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-link btn-sm ban-form" onclick="showConfirmationForm()" data-ripple-color="dark">
                                <i class="fa-solid fa-ban"></i>
                            </button>
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
                                <button type="button" class="btn btn-link btn-sm" data-ripple-color="dark">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button type="button" class="btn btn-link btn-sm" data-ripple-color="dark">
                                    <i class="fa-solid fa-ban"></i>
                                </button>
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
                                <button type="button" class="btn btn-link btn-sm" data-ripple-color="dark">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button type="button" class="btn btn-link btn-sm" data-ripple-color="dark">
                                    <i class="fa-solid fa-ban"></i>
                                </button>
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
                                <button type="button" class="btn btn-link btn-sm" data-ripple-color="dark">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button type="button" class="btn btn-link btn-sm" data-ripple-color="dark">
                                    <i class="fa-solid fa-ban"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection