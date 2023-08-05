@extends('admin.mainAdmin')

@section('container-admin')
<div class="content-wrapper ">
    <div class="content-header ">
        <div class="container-fluid ">
            <h3 class="mb-3">Pelamar Non Kandidat</h3>
            <div class="row mb-4">
                <div class="col-md-1 ">
                    <a href="pelamarKandidat"><button type="button" class="btn btn-outline-dark" >Kandidat</button></a>
                </div>
                <div class="col-md-2">
                    <a href="pelamarNonKandidat"><button type="button" class="btn btn-dark" >non-kandidat</button></a>
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
                <table class="table align-middle border-0">
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
                        <td>Stenavo Bambang</td>
                        <td>S2</td>
                        <td>Front-End Developer</td>
                        <td>25</td>
                        <td>Ngasinan, Kraguman, Jogonalan, Klaten Jawa Tengah 57452</td>
                        <td>
                            <a href="detailPelamarNonKandidat">
                                <button type="button" class="btn btn-link btn-sm" data-ripple-color="dark">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </a>
                            
                            <button class="btn btn-link btn-sm" onclick="showConfirmationForm()" data-ripple-color="dark">
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