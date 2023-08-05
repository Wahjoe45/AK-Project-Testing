@extends('admin.mainAdmin')

@section('container-admin')
<div class="content-wrapper ">
    <div class="content-header ">
        <div class="container-fluid ">
            <h3 class="mb-3">Riwayat Transaksi Tunai</h3>
            <div class="row mb-4">
                <div class="col-md-2 ">
                    <a href="financeCoin"><button type="button" class="btn btn-outline-dark" >Transaksi Coin</button></a>
                </div>
                <div class="col-md-2" style="margin-left: -64px">
                    <a href="financeCash"><button type="button" class="btn btn-dark" >Transaksi Tunai</button></a>
                </div>
                <div class="col">
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
                        <th scope="col">No</th>
                        <th scope="col">No.Referensi</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Dari</th>
                        <th scope="col">Sumber Dana</th>
                        <th scope="col">Transaksi (Tunai)</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                        <th scope="row">1</th>
                        <td>991773493631</td>
                        <td>Open Telent Hunter</td>
                        <td>Apple Corp.</td>
                        <td>VA BCA</td>
                        <td>1.000.000</td>
                        <td class="text-danger"><strong>Pending</strong></td>
                        <td>
                            
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="fa-solid fa-circle-info"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header-right">
                                            <h6></h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="border:0cm"><i class="fa-solid fa-x"></i></button>
                                        </div>
                                        <div class="modal-header">
                                            <img src="assets/img/logo-ak.png" alt="" width="230px"><br>
                                            <h5 class="modal-title mt-3" id="staticBackdropLabel">Transaksi Tunai</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6 text-left">
                                                    <p>Tanggal</p>
                                                    <p>No Referensi</p>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <p>22 Januari 2023 | 09:22:10 WIB</p>
                                                    <p>991773493631</p>
                                                </div>
                                                <div class="line-hr-1"></div>
                                                <div class="col-md-6 text-left">
                                                    <p>Nama Pelanggan</p>
                                                    <p>Sumber Dana</p>
                                                    <p>Jenis Transaksi</p>
                                                    <p>Catatan</p>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <p>Apple Corp</p>
                                                    <p>Virtual Account BCA</p>
                                                    <p>Open Talent Hunter</p>
                                                    <p>Mohon Di tunggu</p>
                                                </div>
                                                <div class="line-hr-1"></div>
                                                <div class="col-md-6 text-left">
                                                    <p>Nominal</p>
                                                    <p>Biaya Admin</p>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <p>1.000.000</p>
                                                    <p>2.500</p>
                                                </div>
                                                <div class="line-hr-1"></div>
                                                <div class="line-hr-1"></div>
                                                <div class="col-md-6 text-left">
                                                    <p><strong>Total</strong></p>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <p style="color: rgba(242, 100, 25, 1)">1.002.500</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection