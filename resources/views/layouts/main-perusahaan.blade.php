<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Area Kerja | {{$title}}</title>

    <link rel="icon" type="image/x-icon" href="assets/img/logo-ak-favicon.png">

    {{-- bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- bootstrap 4 --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     {{-- mystyle css --}}
     {{-- <link rel="stylesheet" type="text/css" href="assets/css/landing-page/main.css"> --}}
     @yield('css')

    {{-- icons online dari google--}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
   
    <!-- Add icon library and fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/fontawesome/css/font-awesome.min.css" rel="stylesheet">

    {{-- css untuk aos fade animasi ketika refresh halaman --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

     {{-- icons online dari bootstrap--}}
     {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> --}}
    
    {{-- jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    {{-- style ini untuk mengatur warna custom scrollbar nya --}}
    <style type="text/css">
        ::-webkit-scrollbar {
          width: 20px;
        }
        ::-webkit-scrollbar-thumb {
          background-color: #FF9837;
          border-radius: 20px;
          border: 6px solid transparent;
          background-clip: content-box;
        }
      </style>
  </head>
  <body>

    {{-- header navbar --}}
    @include('partials.navbarSK')
    @include('partials.navbarPerusahaan')

    {{-- header jumbotron --}}
    @include('partials.header-jumbotron')

    {{-- konten main di bungkus oleh kontainer ini --}}
      <section class="">
          @yield('container-content')
      </section>

    {{-- footer nya --}}
    @include('partials.footerPerusahaan')

     {{-- bootstrap js 5 --}}
     {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}

     {{-- bootstrap js 4 --}}
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
         integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
         integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
         integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
     </script>

     @yield('js')

     {{-- aos buat animasi fade ketika refresh page --}}
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     <script>
        AOS.init();
    </script>
  </body>
</html>