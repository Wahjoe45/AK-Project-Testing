

@extends('layouts.main-perusahaan')
@section('css')
    <!-- Google Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    {{-- <link href="assets/css/main.css" rel="stylesheet"> --}}
    {{-- bootstrap 4 --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

    {{-- my style css --}}
    <link rel="stylesheet" type="text/css" href="assets/css/perusahaan/syaratKetentuan.css">
    {{-- icons --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endsection

@section('container-content')
    <div class="container container-content">
        <div class="row justify-content-between gy-5">
            <div class="text-align: justify;">
                {{-- syarat dan ketentuan --}}
                <h2 data-aos="fade-up" style="color: rgb(0, 0, 0); font-weight: bold;">Syarat & Ketentuan <br>Penggunaan</h2>
                <ul data-aos="fade-up"> &nbsp; Pada dokumen Syarat dan Ketentuan Penggunaan (“S&K”) ini menyatakan syarat dan ketentuan yang perlu Anda penuhi dan setujui untuk dapat
                    menggunakan aplikasi dan/atau situs yang kami sediakan (“Layanan”) dengan segala fitur dan kegunaannya, dan hubungan Anda dengan Area Kerja sebagai penyedia Layanan.
                    Harap baca S&K dengan seksama karena isinya akan mempengaruhi hak dan kewajiban Anda berdasarkan hukum. Jika Anda tidak menyetujui S&K ini, mohon untuk tidak mendaftar atau menggunakan Layanan.</ul>
                <ul data-aos="fade-up">Penggunaan Layanan melibatkan beberapa pihak yang masing-masing memiliki hak dan kewajiban yang perlu dipenuhi. Pihak-pihak tersebut adalah:
                    <ol type="1">
                    <li>Area Kerja, sebagai penyedia Layanan. 
                    <li>Pengguna Layanan (“Pengguna”), yaitu individu yang bertujuan untuk mencari informasi lowongan pekerjaan dan/atau melamar pekerjaan (“Pencari Kerja”) dan individu atau entitas bisnis yang sedang mencari pekerja atau karyawan pada Layanan (“Perusahaan”) serta individu yang menggunakan Layanan untuk mengakses soal-soal pada fitur Belajar yang terdapat pada Layanan.</li>
                    </ol>
                </ul>

                {{-- Ketentuan Umum pengguna --}}
                    <br>
                    <h2 data-aos="fade-up" style="color: rgb(0, 0, 0); font-weight: bold;">Ketentuan Umum Pengguna</h2>
                    <ul data-aos="fade-up"> &nbsp; Dengan menggunakan Layanan, Anda menyatakan bahwa:
                        <ol type="a">
                        <li>Anda setuju untuk terikat dengan S&K yang ditetapkan serta kebijakan mengenai pembaruan S&K di kemudian hari. Anda dipersilahkan untuk tidak menggunakan dan/atau mengakses Layanan jika tidak setuju untuk terikat dengan S&K ini atau pun pembaruannya.</li> 
                        <li>Apabila Anda belum dewasa menurut ketentuan perundang-undangan yang berlaku, wajib mendapatkan bimbingan dan pengawasan orang tua dalam menggunakan Layanan.</li> 
                        <li>Jika ada pertentangan antara S&K dengan kontrak apa pun yang Anda miliki dengan Area Kerja, Ketentuan ini yang akan diutamakan (kecuali dinyatakan lain).</li>
                        </ol>
                    </ul>

                {{-- Registrasi --}}
                    <br>
                    <h2 data-aos="fade-up" style="color: rgb(0, 0, 0); font-weight: bold;">a. Registrasi</h2>
                    <ul data-aos="fade-up">
                        <li>Untuk mendaftarkan akun pada Layanan, anda harus berusia 18 tahun ke atas.</li>
                        <li>Data-data yang anda masukkan untuk proses registrasi harus merupakan data tepat dan lengkap.</li>
                        <li>Anda diperbolehkan mendaftar atas nama pribadi atau perusahaan tempat anda bekerja (apabila Anda memiliki hak), dan tidak diperbolehkan mendaftar atas nama orang atau perusahaan lain.</li> 
                        <li> Anda bertanggung jawab untuk menjaga kerahasiaan data yang Anda gunakan untuk masuk ke akun Anda.</li>
                        <li>Dalam hal Anda lupa kata sandi akun, Anda dapat mengikuti langkah-langkah yang terdapat pada Layanan untuk membuat kata sandi baru. Apabila terdapat langkah tertentu yang tidak dapat Anda penuhi, maka anda tidak akan mendapatkan akses untuk membuat kata sandi baru.</li>
                        <li>Jika kami memiliki alasan untuk meyakini bahwa akan terjadi pelanggaran keamanan atau penyalahgunaan akun Anda oleh pihak yang tidak berhak, kami akan meminta Anda untuk mengubah kata sandi Anda atau kami dapat menangguhkan akun Anda demi keamanan.</li>
                        </ul> 

                {{-- Kekayaan Intelektual --}}
                    <br>
                    <h2 data-aos="fade-up" style="color: rgb(0, 0, 0); font-weight: bold;">b. Kekayaan Intelektual</h2>
                    <ul data-aos="fade-up">
                        <li>Aplikasi, situs, akun media sosial, dan semua layanan yang dimiliki AreaKerja adalah milik eksklusif AreaKerja atau pemberi lisensinya.</li> 
                        <li>AreaKerja dan Layanan dilindungi oleh hak cipta, merek dagang, dan hak kekayaan intelektual lainnya.</li> 
                        <li>Anda dapat menggunakan dan menikmati layanan dan tampilan Layanan. Anda tidak boleh mereproduksi, memodifikasi, menyalin atau mendistribusikan atau menggunakan untuk tujuan komersial hal apa pun di Layanan, tanpa izin tertulis dari AreaKerja.</li> 
                        <li>Setiap pengguna Layanan setuju untuk tidak menggunakan Layanan dengan cara apa pun yang melanggar hak kekayaan intelektual atau hak milik orang lain seperti:</li> 
                    <ol type="a">
                        <li>Mencetak, mengunduh, menggandakan, mengirimkan atau menyalin, mereproduksi, mendistribusikan ulang, menerbitkan ulang, atau menggunakan informasi pribadi apapun tentang pengguna lain, kecuali telah mendapatkan izin tertulis atau dinyatakan lain pada S&K;</li> 
                        <li>Merekayasa balik (reverse engineer) atau mendekompilasi bagian mana pun dari Layanan;</li> 
                        <li>Membuat akun dengan identitas orang lain, menggunakan nama perusahaan secara tanpa hak, atau mengunggah lowongan pekerjaan secara tanpa hak;</li> 
                        <li>Menghapus atau mengubah materi apa pun yang diunggah oleh orang atau entitas lain mana pun;</li> 
                        <li>Mengakses data yang tidak ditujukan untuk Anda atau masuk ke server atau akun yang tidak diizinkan untuk Anda akses; dan</li> 
                        <li>Hal-hal lain yang dilakukan secara tanpa hak dan dapat menimbulkan kerugian secara materiil atau pun immateriil bagi pihak lain.</li> 
                    </ol>
                        <li>Kami tidak mengklaim kepemilikan konten Pengguna yang diposting pada Layanan dan Anda bebas untuk berbagi konten Anda dengan orang lain pada media yang telah Kami sediakan di Layanan. Namun, Kami memerlukan izin hukum tertentu dari Pengguna (dikenal sebagai "lisensi") untuk menyediakan Layanan. Saat Pengguna membagikan, memposting, atau mengunggah konten yang dilindungi oleh hak kekayaan intelektual (seperti foto atau video) pada atau sehubungan dengan Layanan Kami, Pengguna dengan ini memberikan kepada Kami konten non-eksklusif, bebas royalti, dapat dialihkan, disublisensikan, lisensi di seluruh dunia untuk menggunakan, mendistribusikan, memodifikasi, menjalankan, menyalin, dan menampilkan secara publik. Lisensi ini akan berakhir ketika konten Pengguna tersebut dihapus dari sistem Kami.</li> 
                        <li>Segala konten yang terdapat pada Layanan tersimpan dalam bentuk elektronik atau dicetakkan dalam satu salinan untuk penggunaan pribadi dan non-komersial bagi Pengguna, asalkan Pengguna menjaga semua hak kekayaan intelektual yang terdapat didalamnya. Pengguna tidak boleh mereproduksi, memodifikasi, menyalin atau mendistribusikan atau menggunakan untuk tujuan komersial atau terhadap setiap konten pada Layanan tanpa izin tertulis dari Kami.</li> 
                        <li>Dengan menggunakan Layanan, Pengguna (khususnya Perusahaan) bersedia memberikan lisensi atas merek dan logo miliknya kepada AreaKerja sepanjang digunakan untuk tujuan-tujuan promosional dengan cara yang tidak melanggar hukum yang berlaku di Indonesia.</li> 
                    </ul>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
    <script src="assets/vendor/aos/aos.js "></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js "></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js "></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js "></script>
    <script src="assets/vendor/php-email-form/validate.js "></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js "></script>
@endsection