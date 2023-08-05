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
                        <h3 class="mb-3">Selamat datang</h3>
                        <h6 class="mb-3">Silahkan masukkan Email dan Password</h6>
                        </center>
                        <div class="form-group">
                            <label class="form-control-label">Email</label>
                            <input type="text" id="email" name="email" placeholder="Masukan email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Password</label>
                            <input type="password" id="psw" name="psw" placeholder="Masukan password" class="form-control">
                        </div>

                        <div class="row justify-content-center mb-2">
                            <div class="col-md-1">
                                <span>
                                    <input class="form-check-input" type="checkbox" value="">
                                </span>
                            </div>
                            <div class="col-md-5" style="margin-left: -20px">
                                <span>
                                    <p>Ingat saya</p>
                                </span>
                            </div>
                            <div class="col-md-5 text-right">
                                <span>
                                    <a href="superAdminForgotPassword"><p>Lupa Password?</p></a>
                                </span>
                            </div>
                            
                        </div>
                        <div class="row justify-content-center">
                            <a href="superAdminDashboard">
                                <button class="btn btn-dark pr-5 pl-5 mt-4">Login</button>
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
