<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/assets/img/imagelogin/area kerja logo 17.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="assets/css/regis.css">
  <title>Lupa Password</title>
</head>

<body>

<div class="container-fluid">
    <div class="row">
    <div class="col-md-4">
        <div class="row justify-content-center">
        <div class="col-md-9">

            <br>
            <br>
            <br>
            <br>
            <h4 class="mt-5 text-center">Lupa Kata Sandi</h4>

            
            <div class="text-center">
                <img src="assets/img/Lock.png" alt="Logo" class="mb-4 mt-5" style="max-width: 100px;
                height: auto;">
            </div>

            <p class="text-center">Masukan 4 digit kode yang dikirimkan ke emailpengguna@gmail.com</p>
            
<div class="row justify-content-center">
            <style>            
              .countdown {
                font-size: 24px;
                font-weight: bold;
                text-align: center;
                margin-bottom: 5px
              }

              .digit-input {
                width: 60px; Atur ukuran kolom input sesuai kebutuhan Anda
                margin: 10px; /* Atur margin antar kolom input sesuai kebutuhan Anda */
                margin-bottom: 5px;
              }
            </style>
          </head>
          <body>
            <div class="countdown" id="countdown"></div>
          
            <script>
              // Batas waktu dalam detik (90 detik)
              var timeLimit = 90;
          
              // Mengupdate countdown setiap detik
              var countdownInterval = setInterval(function() {
                // Mengurangi waktu limit setiap detik
                timeLimit--;
          
                // Menghitung menit dan detik yang tersisa
                var minutes = Math.floor(timeLimit / 60);
                var seconds = timeLimit % 60;
          
                // Format menit dan detik menjadi dua digit angka
                var formattedMinutes = String(minutes).padStart(2, '0');
                var formattedSeconds = String(seconds).padStart(2, '0');
          
                // Mengupdate elemen HTML dengan nilai countdown
                document.getElementById("countdown").innerHTML = formattedMinutes + ":" + formattedSeconds;
          
                // Menghentikan countdown saat mencapai batas waktu
                if (timeLimit <= 0) {
                  clearInterval(countdownInterval);
                  document.getElementById("countdown").innerHTML = "Waktu Habis";
                }
              }, 1000);
            </script>
</div>

<form>
  <div class="text-center">
    <input type="text" class="digit-input" maxlength="1" pattern="[0-9]" required>
    <input type="text" class="digit-input" maxlength="1" pattern="[0-9]" required>
    <input type="text" class="digit-input" maxlength="1" pattern="[0-9]" required>
    <input type="text" class="digit-input" maxlength="1" pattern="[0-9]" required>
  </div>
  <div class="text-center">
    {{-- <button type="submit" class="btn btn-primary" style="background-color: #F26419; padding: 5px 80px; border-radius: 5px;">KIRIM</button> --}}
    <a class="btn" style="background-color: #F26419; color: aliceblue; padding: 5px 80px; border-radius: 5px;"  href="/lupaPwSandiBaru ">Kirim</a>
  </div>
</form>

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
