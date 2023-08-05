@extends('admin.mainAdmin')

@section('container-admin')
<div class="content-wrapper ">
    <div class="content-header p-4">
        <div class="container-fluid ">
            <h4>Tips Kerja</h4>
            <div class="row mb-2">
                <div class="col-4">
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Semua <span class="text-muted">(5)</span></a></li>
                        <li class="breadcrumb-item"><a href="#">Telah Terbit <span class="text-muted">(4)</span></a></li>
                        <li class="breadcrumb-item"><a href="#">Draf <span class="text-muted">(3)</span></a></li>
                    </ol>
                    </nav>
                </div>
                <div class="col-7"></div>
                <div class="col-1 text-right">
                    <a href="createTipsKerja">
                        <button class="btn-sm btn-primary border border-0">Buat Post</button>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1 text-left" >
                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Tanggal
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-1 text-left" style="margin-left: 10px">
                    <button class="btn btn-dark">Terapkan</button>
                </div>
                <div class="col-md-2 text-left">
                    <button class="btn btn-danger">Hapus <i class="fa-solid fa-trash"></i></button>
                </div>
                <div class="col">

                </div>
                <div class="col-md-3 text-right" style="margin-right: -90px">
                    <div class="form-outline">
                        <input type="email" id="form1Example1" class="form-control" placeholder="Search here....."/>
                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <button class="btn btn-secondary">Cari Laman</button>
                </div>
            </div>
            <div class="row mt-4" style="box-shadow: 0px 2px 2px 1px rgba(0, 0, 0, 0.25);">
                <table class="table table-striped">
                    <thead class=" bg-dark">
                        <tr>
                        <th scope="col ">#</th>
                        <th scope="col " class="text-left">Judul</th>
                        <th scope="col " >Penulis</th>
                        <th scope="col " ><i class="fa-solid fa-comment"></i></th>
                        <th scope="col " >Tanggal</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <th scope="row">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                            </th>
                            <td class="text-left"><a href="editTipsKerja">Tips Bekerja Yang Tidak Membuatmu Stress....</a></td>
                            <td >Steve</td>
                            <td >-</td>
                            <td >Telah Terbit 2023/05/22</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
