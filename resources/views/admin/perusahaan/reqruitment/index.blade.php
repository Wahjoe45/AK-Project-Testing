@extends('admin.mainAdmin')

@section('container-admin')
<div class="content-wrapper ">
    <div class="content-header ">
        <div class="container-fluid ">
            <h3 class="mb-3">Reqruitment</h3>
            <div class="row mb-4">
                <div class="col-md-1 mr-4 ">
                    <a href="perusahaanManagement"><button type="button" class="btn btn-outline-dark" >Management</button></a>
                </div>
                <div class="col-md-1 mr-4">
                    <a href="perusahaanReqruitment"><button type="button" class="btn btn-dark" >Reqruitment</button></a>
                </div>
                <div class="col-md-2">
                    <a href="perusahaanTalentHunter"><button type="button" class="btn btn-outline-dark" >Talent Hunter</button></a>
                </div>
                <div class="col"></div>
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
                            <td>Ngasinan, Kraguman, Jogonalan, Klaten Jawa Tengah 57452</td>
                            <td>
                                <a href="detailPerusahaanReqruitment">
                                    <button type="button" class="btn btn-link btn-sm bg-dark" data-ripple-color="dark">
                                    <i class="fa-solid fa-eye"></i>
                                    </button>
                                </a>
                                <button type="button" class="btn btn-link btn-sm bg-dark" onclick="showConfirmationForm()" data-ripple-color="dark">
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