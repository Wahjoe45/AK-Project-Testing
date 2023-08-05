<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/auth/regis.css">
    <title>Regis</title>
    <style>
      .message{
        color: red;
        font-size: 11px;
      }
      .popup{
        border-radius: 30px;
      }
    </style>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @if (session()->has('success'))
  <script>
      Swal.fire({
        text: 'Selamat! Akun anda berhasil dibuat.Silahkan masuk terlebih dahulu.',
        icon: 'success',
        confirmButtonColor: '#F26419',
        confirmButtonText: 'Masuk',
        width:'410px',
        customClass: {
      popup: 'popup' // Menambahkan kelas CSS baru
    }
      }).then((result) => {
        if (result.isConfirmed) {
          // Redirect ke halaman lain
          window.location.href = '/login'; // Ganti URL dengan halaman tujuan Anda
        }
      });
  </script>
  @endif

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="row justify-content-center">
          <div class="col-md-9">
            <!-- Logo -->

            <!-- Judul Login -->
            <h4 class="mb-2 mt-5 text-center">Ayo Bergabung Bersama Kami</h4>
            <p class="text-center">Silahkan isi data berikut ini</p>

            <div class="form-box">
              <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="showPelamarForm()">Pelamar</button>
                <button type="button" class="toggle-btn" onclick="showPerusahaanForm()">Perusahaan</button>
              </div>
            </div>

            {{-- PELAMAR --}}

            <div id="pelamar-form">
              <!-- Form untuk Pelamar -->
              <form action="regis" method="post" onsubmit="return validateForm('pelamar')">
                @csrf
                <div class="mb-3">
                  <label for="namaPelamar" class="form-label">Nama Pengguna</label>
                  {{-- <input type="text" name="username" id="username" class="@error('username') error @enderror" > --}}
                  <input type="text" class="form-control @error('namaPelamar') is-invalid @enderror" name="namaPelamar" id="namaPelamar" required>
                  {{-- data tidak valid --}}
                  @error('namaPelamar')
                  <div class="message">
                    <em>
                      <span class="text-red-500">{{$message = 'Tidak mengandung Spasi'}}</span>
                      </em>
                      </div>
                      @enderror
                  {{-- end --}}
                </div>
                <div class="mb-3">
                  <label for="emailPelamar" class="form-label">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required>
                   {{-- data tidak valid --}}
                   @error('email')
                   <div class="message">
                     <em>
                       <span class="text-red-500">{{$message = 'Email sudah ada'}}</span>
                       </em>
                       </div>
                       @enderror
                   {{-- end --}}
                </div>
                <div class="mb-3">
                  <label for="teleponPelamar" class="form-label">No. Telepon</label>
                  <input type="tel" class="form-control @error('teleponPelamar') is-invalid @enderror" name="teleponPelamar" id="teleponPelamar" required>
                   {{-- data tidak valid --}}
                   @error('teleponPelamar')
                   <div class="message">
                     <em>
                       <span class="text-red-500">{{$message = 'Masukan No. Telepon Anda'}}</span>
                       </em>
                       </div>
                       @enderror
                   {{-- end --}}
                </div>
                <div class="mb-3">
                  <label for="passwordPelamar" class="form-label">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required>
                  {{-- data tidak valid --}}
                  @error('password')
                  <div class="message">
                    <em>
                      <span class="text-red-500">{{$message = 'Kata Sandi Harus 8 Karakter'}}</span>
                      </em>
                      </div>
                      @enderror
                  {{-- end --}}
                </div>
                <div class="mb-3 form-check">
                  <div class="row">
                    <div class="col-lg-12">
                      <input type="checkbox" class="form-check-input" id="rememberMePelamar">
                      <label class="form-check-label" for="rememberMePelamar">Saya menyetujui <a href="/syaratKetentuan" class="text-decoration-none" style="color: #F26419">Syarat dan Ketentuan</a> yang berlaku</label>
                    </div>

        
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" style="background-color: #F26419; padding: 5px 80px; border-radius: 5px;">MASUK</button>
                </div>
              </form>
            </div>

            {{-- PERUSAHAAN --}}

            <div id="perusahaan-form" style="display: none;">
              <!-- Form untuk Perusahaan -->
              <form action="regisperusahaan" method="post" onsubmit="return validateForm('perusahaan')">
                @csrf
                <div class="mb-3">
                  <label for="namaPerusahaan" class="form-label">Nama Perusahaan</label>
                  <input type="text" class="form-control" name="namaPerusahaan" id="namaPerusahaan"  required>
                </div>
                <div class="mb-3">
                  <label for="emailPerusahaan" class="form-label">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"  required>
                  {{-- data tidak valid --}}
                  @error('email')
                  <div class="message">
                    <em>
                      <span class="text-red-500">{{$message = 'Email Sudah Ada'}}</span>
                      </em>
                      </div>
                      @enderror
                  {{-- end --}}
                </div>
                <div class="mb-3">
                  <label for="teleponPerusahaan" class="form-label">No. Telepon Perusahaan</label>
                  <input type="tel" class="form-control" name="teleponPerusahaan" id="teleponPerusahaan"  required>
                </div>
                <div class="mb-3">
                  <label for="passwordPerusahaan" class="form-label">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required>
                  {{-- data tidak valid --}}
                  @error('passwordPerusahaan')
                  <div class="message">
                    <em>
                      <span class="text-red-500">{{$message = 'Kata Sandi Harus 8 Karakter'}}</span>
                      </em>
                      </div>
                      @enderror
                  {{-- end --}}
                </div>
                <div class="mb-3 form-check">
                  <div class="row">
                    <div class="col-lg-12">
                      <input type="checkbox" class="form-check-input" id="rememberMePerusahaan">
                      <label class="form-check-label" for="rememberMePerusahaan">Saya menyetujui <a href="syaratKetentuan" class="text-decoration-none" style="color: #F26419">Syarat dan Ketentuan</a> yang berlaku</label>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" style="background-color: #F26419; padding: 5px 80px; border-radius: 5px;">MASUK</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-8">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/img/imagelogin/Property 1=Slider 1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/img/imagelogin/Property 1=Slider 2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/img/imagelogin/Property 1=Slider 3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/img/imagelogin/Property 1=Slider 4.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/img/imagelogin/Property 1=Slider 5.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev"></button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next"></button>
        </div>
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

    <script>
      var pelamarForm = document.getElementById('pelamar-form');
      var perusahaanForm = document.getElementById('perusahaan-form');
      var btn = document.getElementById('btn');
      var btn_pelamar = document.getElementById('btn-pelamar');
      var btn_perusahaan = document.getElementById('btn-perusahaan');
      
      function showPelamarForm() {
        pelamarForm.style.display = 'block';
        perusahaanForm.style.display = 'none';
        // if (window.innerWidth <= 767) {
        //   // btn.style.left = 'calc(60% - 30px)';
        // } else {
        //   btn.style.left = '90px';
        // }
      
        if (window.innerWidth <= 540) {
          btn.style.left = '33%';
        } else if(window.innerWidth >= 540 && window.innerWidth <= 720) {
          btn.style.left = '35%';
        } else if(window.innerWidth >= 720 && window.innerWidth <= 767) {
          btn.style.left = '37%';
        } else if(window.innerWidth >= 767 && window.innerWidth <= 910) {
          btn.style.left = '1%';
        } else if(window.innerWidth >= 910 && window.innerWidth <= 1060) {
          btn.style.left = '10%';
        } else if(window.innerWidth >= 1060 && window.innerWidth <= 1080) {
          btn.style.left = '20%';
        } else if(window.innerWidth >= 1080 && window.innerWidth <= 1106) {
          btn.style.left = '15%';
        } else if(window.innerWidth >= 1106 && window.innerWidth <= 1250) {
          btn.style.left = '15%';
        }else if(window.innerWidth >= 1250 && window.innerWidth <= 1430) {
          btn.style.left = '19%';
        } else if(window.innerWidth >= 1480) {
          btn.style.left = '25%';
        }
        btn_pelamar.style.color = "white";
        btn_perusahaan.style.color = "black";
        // btn.style.left = '90px';
      }
      
      function showPerusahaanForm() {
        perusahaanForm.style.display = 'block';
        pelamarForm.style.display = 'none';
        // if (window.innerWidth <= 767) {
        //   // btn.style.left = 'calc(60% - 30px)';
        // } else {
        //   btn.style.left = '180px';
        // }
      
        if (window.innerWidth <= 540) {
          btn.style.left = '50%';
        } else if(window.innerWidth >= 540 && window.innerWidth <= 720) {
          btn.style.left = '50%';
        } else if(window.innerWidth >= 720 && window.innerWidth <= 767) {
          btn.style.left = '50%';
        } else if(window.innerWidth >= 767 && window.innerWidth <= 910) {
          btn.style.left = '50%';
        } else if(window.innerWidth >= 910 && window.innerWidth <= 1060) {
          btn.style.left = '50%';
        } else if(window.innerWidth >= 1060 && window.innerWidth <= 1080) {
          btn.style.left = '50%';
        } else if(window.innerWidth >= 1080 && window.innerWidth <= 1106) {
          btn.style.left = '50%';
        }else if(window.innerWidth >= 1106 && window.innerWidth <= 1250) {
          btn.style.left = '50%';
        } else if(window.innerWidth >= 1250 && window.innerWidth <= 1430) {
          btn.style.left = '50%';
        } else if(window.innerWidth >= 1480) {
          btn.style.left = '50%';
        }
      
        btn_pelamar.style.color = "black";
        btn_perusahaan.style.color = "white";
      
        // btn.style.left = '180px';
      }
      
      // Menjalankan fungsi saat halaman dimuat
      showPelamarForm();
      
      // Menambahkan event listener pada perubahan ukuran layar
      window.addEventListener('resize', function() {
        showPelamarForm();
      });
      
      
      
          function validateForm(type) {
            if (type === 'pelamar') {
              var rememberMePelamar = document.getElementById('rememberMePelamar');
              if (!rememberMePelamar.checked) {
                alert('Anda harus menyetujui Syarat dan Ketentuan.');
                return false;
              }
            } else if (type === 'perusahaan') {
              var rememberMePerusahaan = document.getElementById('rememberMePerusahaan');
              if (!rememberMePerusahaan.checked) {
                alert('Anda harus menyetujui Syarat dan Ketentuan.');
                return false;
              }
            }
            return true;
          }
        </script>
</body>

</html>
