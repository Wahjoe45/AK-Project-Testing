<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="uPtf-8">
  <link rel="shortcut icon" href="/assets/img/imagelogin/area kerja logo 17.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Login</title>
  <style>
    .message{
      font-size: 14px;
      color: red;
    }
  </style>
</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="row justify-content-center">
          <div class="col-md-9">
            <div class="text-center">
              <img src="assets/img/imagelogin/logo login areakerja.png" alt="Logo" class="mb-4 mt-5" style="max-width: 200px;
                height: auto;">
            </div>
            <!-- Logo -->

            <!-- Judul Login -->
            <h4 class="mb-2 text-center">Selamat Datang Kembali</h4>
            <p class="text-center">Silahkan masukkan Email dan Password</p>

            {{-- ALERT LOGIN GAGAL --}}
            @error('email')
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <div class="message">
                       <span class="text-red-500">{{$message = 'Email atau Password Salah!'}}</span>
                  </div>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
             @enderror
            {{-- END --}}

            <!-- Form Login -->
            <form action="/login" method="post">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" style="border: 2px solid black" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" style="border: 2px solid black" required>
              </div>
              <div class="mb-3 form-check">
                <div class="row">
                  <div class="col-lg-6">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Ingat Saya</label>
                  </div>
                  <div class="col-lg-6" style="text-align: right;">
                    <a href="/lupaPw" class="text-decoration-none" style="color: #F26419;">Lupa Password?</a>
                  </div>
                </div>
              </div>
              <div class="text-center">
                {{-- onclick="window.location.href='/pelamar';" --}}
                <button type="submit" class="btn btn-primary" 
                  style="background-color: #F26419; padding: 5px 80px; border-radius: 5px;">MASUK</button>
              </div>
            </form>

            <!-- Tidak memiliki akun - Daftar disini -->
            <div class="mt-3 text-center">
              <p>Tidak memiliki akun? <a href="/regis" class="text-decoration-none"
                  style="color: #F26419;">Daftar disini</a></p>
            </div>
          </div>
        </div>
      </div>

      @include('auth.slideFoto')

      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
        crossorigin="anonymous"></script>
    -->
</body>

</html>
