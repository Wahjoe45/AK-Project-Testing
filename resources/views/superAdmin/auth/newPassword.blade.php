@extends('superAdmin.auth.index')

@section('container-admin')
<div class="container-fluid">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col my-5">
                        <center>
                            <div class="row justify-content-center">
                                <img id="logo" class="mb-4" src="assets/img/logo-ak.png">
                            </div>
                            <h3 class="mb-3">Lupa Password</h3>
                            <div class="row justify-content-center">
                                <img id="logo2" class="mb-4" src="assets/img/Lock.png">
                            </div>
                            <h6 class="mb-3">Masukkan email untuk mengatur kata sandi anda</h6>
                        </center>
                        <div class="form-group">
                            <label class="form-control-label">Password Baru</label>
                            <input type="text" id="email" name="email" placeholder="Masukan password baru" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Konfirmasi Password</label>
                            <input type="password" id="psw" name="psw" placeholder="Masukan konfirmasi password" class="form-control">
                        </div>
                        <div class="row justify-content-center">
                            <a href="#">
                                <button type="button" class="btn btn-dark pr-5 pl-5 mt-4" onclick="successChangePassword()">Kirim</button>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-5 right">
                    <h1 class="text-white">Area Kerja</h1>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
