@extends('admin.auth.index')

@section('container-admin')
<div class="container-fluid">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1-1">
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
                            <h6 class="mb-2">Masukkan email untuk mengatur kata sandi anda</h6>
                        </center>
                        <center>
                            <!-- Script Countdown-->
                            <h6 id="countdown"></h6>
                            <script>
                                // Waktu countdown dalam detik (misalnya 2 menit)
                                var countdownTime = 120;
                                // Update countdown setiap satu detik
                                var countdownInterval = setInterval(function() {
                                // Kurangi waktu countdown
                                countdownTime--;
                                // Hitung menit dan detik
                                var minutes = Math.floor(countdownTime / 60);
                                var seconds = countdownTime % 60;

                                // Tampilkan countdown dalam elemen dengan id "countdown"
                                document.getElementById("countdown").innerHTML = minutes + " : " + seconds;

                                // Hentikan countdown ketika mencapai 0 detik
                                if (countdownTime <= 0) {
                                    clearInterval(countdownInterval);
                                    document.getElementById("countdown").innerHTML = "Waktu telah habis!";
                                }
                            }, 1000);
                            </script>
                            <!-- ENDScript Countdown-->
                        </center>
                        
                        <div class="row mt-2 pt-2">
                            <div class="col">
                              <input type="text" class="form-control form-control-lg text-center py-4" maxlength="1" autofocus="">
                            </div>
                            <div class="col">
                              <input type="text" class="form-control form-control-lg text-center py-4" maxlength="1">
                            </div>
                            <div class="col">
                              <input type="text" class="form-control form-control-lg text-center py-4" maxlength="1">
                            </div>
                            <div class="col">
                              <input type="text" class="form-control form-control-lg text-center py-4" maxlength="1">
                            </div>
                          </div>
                        <div class="row justify-content-center">
                            <a href="adminNewPassword">
                                <button class="btn btn-dark pr-5 pl-5 mt-4">Kirim</button>
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
