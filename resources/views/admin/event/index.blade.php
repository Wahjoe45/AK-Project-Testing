@extends('admin.mainAdmin')

@section('container-admin')
<div class="content-wrapper ">
    <div class="content-header p-4">
        <div class="container-fluid ">
            <h3>Event Management</h3>
            <div class="row">
                <div class="col-6 text-left mt-2 mb-2">
                    <h4>Kelola Event</h4>
                </div>
                <div class="col-6 text-right mt-2 mb-2">
                    <a href="createEvent">
                        <button type="button" class="btn-sm btn-primary border border-0" >Buat Event</button>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-6 text-left">

                </div>
                <div class="col-6 text-right">

                </div>
            </div>
            <div class="input-group mb-3 mt-1">
                <div class="input-group-prepend">
                        <select class="form-select text-center text-muted border border-2" style="width: 100px; background-color:rgba(236, 236, 236, 1)">
                            <option>Nama</option>
                            <option>Status</option>
                            <option>Begin</option>
                            <option>End</option>
                        </select>
                </div>
                <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="cari...">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <a href="">
                        <button type="button" class="btn-md btn-link border border-0" style="background-color:rgb(201, 201, 201)">SHOW RUNNING EVENTS ONLY</button>
                    </a>
                </div>
                <div class="col-3">
                    <a href="">
                        <button type="button" class="btn-md btn-link border border-0" style="background-color:rgb(201, 201, 201); margin-left: -50px">SHOW UNVERIFIED EVENTS ONLY</button>
                    </a>
                </div>
                <div class="col-3" ></div>
                <div class="col-1 text-right">
                    <p>Urutkan :</p>
                </div>
                <div class="col-2 text-right">
                    <select class="form-select text-center text-muted" style="width: 200px; background-color:rgba(236, 236, 236, 1)">
                        <option>Segera Mulai</option>
                        <option>Status</option>
                        <option>Begin</option>
                        <option>End</option>
                    </select>
                </div>
            </div>
            <div class="row mt-2" style="box-shadow: 0px 2px 2px 1px rgba(0, 0, 0, 0.25);">
                <table class="table table-striped">
                    <thead class=" bg-dark">
                        <tr>
                        <th scope="col ">Status</th>
                        <th scope="col " class="text-left">Nama Event</th>
                        <th scope="col " >Pendaftar</th>
                        <th scope="col " >kuota</th>
                        <th scope="col " >Waiting List</th>
                        <th scope="col " >Begin</th>
                        <th scope="col " >End</th>
                        <th scope="col " >Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <th scope="row">
                                    <button class="btn-sm btn-success pl-3 pr-3 border border-0">Verified</button>
                            </th>
                            <td class="text-left"><a href="detailEvent">Nama Event Areakerja...</a></td>
                            <td >0</td>
                            <td >200</td>
                            <td >0</td>
                            <td >27 Jul 2023 08.00</td>
                            <td >27 Aug 2023 08.00</td>
                            <td >
                                <button type="button" class="btn btn-link btn-sm bg-dark" onclick="deleteConfirmation()" data-ripple-color="dark">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <a href="">
                                    <button class="btn-sm btn-danger border border-0">Unverified</button>
                                </a>
                            </th>
                            <td class="text-left"><a href="">Nama Event Areakerja...</a></td>
                            <td >0</td>
                            <td >200</td>
                            <td >0</td>
                            <td >27 Jul 2023 08.00</td>
                            <td >27 Aug 2023 08.00</td>
                            <td >
                                <button type="button" class="btn btn-link btn-sm bg-dark" onclick="deleteConfirmation()" data-ripple-color="dark">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <a href="">
                                    <button class="btn-sm btn-success pl-3 pr-3 border border-0">Verified</button>
                                </a>
                            </th>
                            <td class="text-left"><a href="">Nama Event Areakerja...</a></td>
                            <td >0</td>
                            <td >200</td>
                            <td >0</td>
                            <td >27 Jul 2023 08.00</td>
                            <td >27 Aug 2023 08.00</td>
                            <td >
                                <button type="button" class="btn btn-link btn-sm bg-dark" onclick="deleteConfirmation()" data-ripple-color="dark">
                                    <i class="fa-solid fa-trash"></i>
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