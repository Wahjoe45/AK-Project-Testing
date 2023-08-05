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

            <p class="text-center">Masukan kata sandi baru anda. Kata sandi baru harus berbeda dari yang lama.</p>
            

<form>
  <div class="text-center">
    <div class="mb-3">
        <input type="password" class="form-control" name="password" id="password" style="border: 2px solid black" placeholder="Sandi Baru" required>
    </div>
    <div class="mb-3">
        <input type="password" class="form-control" name="password" id="password" style="border: 2px solid black" placeholder="Ketik Ulang sandi" required>
      </div>
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-primary" style="background-color: #F26419; padding: 5px 80px; border-radius: 5px;">KIRIM</button>
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
