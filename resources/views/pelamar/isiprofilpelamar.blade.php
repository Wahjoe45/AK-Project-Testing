@extends('layouts.profilpelamar')
@section('container')

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="assets/css/pelamar/popup.css">

    <h1>Informasi Akun</h1>
    <hr style="border: 3px solid #F26419;">
    <div class="container">
          <div class="row mb-3">
            <label for="user id" class="col-sm-2 col-form-label">User id</label>
            <div class="col-sm-8">
              <input type="text" class="form-control form-control-sm " style="background-color: whitesmoke; margin-left: 20%; "  id="user id">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inpuUsername" class="col-sm-2 col-form-label">Username<span style="color: #F26419">*</span></label>
            <div class="col-sm-8">
              <input type="text" class="form-control form-control-sm" style="background-color: whitesmoke; margin-left: 20%;" id="inpuUsername">
            </div>
          </div>


          <div class="row mb-3">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email <span style="color: #F26419">*</span> </label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="email" class="form-control form-control-sm" style="background-color: whitesmoke; margin-left: 16%;" id="inputEmail">
                <div class="input-group-append">
                  <span class="input-group-text justify-text-end form-control-sm" style="background-color: transparent; border-color: transparent;">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#EditEmailModal">
                      <i class="bi bi-pencil-fill" style="color: #F26419;"></i>
                    </a>
                  </span>
                </div>
              </div>
            </div>
          </div>
{{-- modal email --}}
<div class="modal fade" id="EditEmailModal" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="border-radius: 40px;" >
      <div class="modal-header" style="border: none;">
        <h5 class="modal-title" id="staticBackdropLabel">Ubah alamat email</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center ">
        <h4>Masukan email baru anda. </h4>
<p>(email baru harus berbeda dari email sebelumnya)</p>
<br>
<br>
        <div class="form-group">
          <div class="row">
            <label for="editEmailInput" class="col-4 col-form-label"> Email<span style="color: #F26419">*</span> </label>
            <div class="col-8">
              <input type="email" class="form-control" id="editEmailInput">
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>

      <div class="modal-footer d-flex justify-content-center" style="border: none;">
        <button class="btn" style="background-color: #F26419; color: white; width: 209px; height: 40px; border-radius: 10px;" data-bs-target="#CekEmail" data-bs-toggle="modal">Kirim </button>
      </div>
      <br>
      <br>
    </div>
  </div>
</div>


<div class="modal fade" id="CekEmail" aria-hidden="true" data-bs-backdrop="static" aria-labelledby="editPasswordLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="border-radius: 40px;">
      <div class="modal-header" style="border: none;">
        <h5 class="modal-title" id="editPasswordModalLabel">Ubah kata sandi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
          <g clip-path="url(#clip0_1728_11372)">
          <path d="M44.1641 8.8335H8.83073C6.40156 8.8335 4.43615 10.821 4.43615 13.2502L4.41406 39.7502C4.41406 42.1793 6.40156 44.1668 8.83073 44.1668H44.1641C46.5932 44.1668 48.5807 42.1793 48.5807 39.7502V13.2502C48.5807 10.821 46.5932 8.8335 44.1641 8.8335ZM44.1641 17.6668L26.4974 28.7085L8.83073 17.6668V13.2502L26.4974 24.2918L44.1641 13.2502V17.6668Z" fill="#F26419"/>
          </g>
          <defs>
          <clipPath id="clip0_1728_11372">
          <rect width="53" height="53" fill="white"/>
          </clipPath>
          </defs>
          </svg>
        <p>Silahkan cek email Anda</p>
      </div>
      <div class="modal-footer d-flex justify-content-center" style="border: none; ">
        <button class="btn"  style="background-color: #F26419; color: white; width: 209px; height: 40px; border-radius: 10px;" data-bs-target="#selamatemailanda" data-bs-toggle="modal">Ubah Kata Sandi</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="selamatemailanda" aria-hidden="true" aria-labelledby="selamatLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content"style="border-radius: 40px;">

      <div class="modal-body text-center mt-5">
        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
          <path d="M22.4974 0.416992C10.3074 0.416992 0.414062 10.3103 0.414062 22.5003C0.414062 34.6903 10.3074 44.5837 22.4974 44.5837C34.6874 44.5837 44.5807 34.6903 44.5807 22.5003C44.5807 10.3103 34.6874 0.416992 22.4974 0.416992ZM18.0807 33.542L7.03906 22.5003L10.1528 19.3866L18.0807 27.2924L34.842 10.5312L37.9557 13.667L18.0807 33.542Z" fill="#F26419"/>
          </svg>
        <p>Selamat! Email anda berhasil diubah.</p>
      </div>
    </div>
  </div>
</div>
{{-- end modal email --}}


          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Kata Sandi<span style="color: #F26419">*</span></label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="password" class="form-control form-control-sm" style="background-color: whitesmoke; margin-left: 16%;" id="inputPassword3">
                <div class="input-group-append">
                  <span class="input-group-text justify-text-end form-control-sm" style="background-color: transparent; border-color: transparent;">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#KirimEmailModal">
                      <i class="bi bi-pencil-fill" style="color: #F26419;"></i>
                    </a>
                  </span>
                </div>
              </div>  
            </div>
          </div>
          

{{-- modal password --}}
          <div class="modal fade" id="KirimEmailModal" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content"style="border-radius: 40px;" >
                <div class="modal-header" style="border: none;">
                  <h5 class="modal-title" id="staticBackdropLabel">Ubah kata sandi</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center ">
                  <h4>Masukan email baru anda. </h4>
          <p class="fw-bold" >(Verifikasi ubah kata sandi di kirim lewat email)</p>
          <br>
          <br>
                  <div class="form-group">
                    <div class="row">
                      <label for="editEmailInput" class="col-4 col-form-label"> Email<span style="color: #F26419">*</span> </label>
                      <div class="col-8">
                        <input type="email" class="form-control" id="editEmailInput">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer d-flex justify-content-center" style="border: none;">
                  <button class="btn" style="background-color: #F26419; color: white; width: 209px; height: 40px; border-radius: 10px;" data-bs-target="#editPassword2" data-bs-toggle="modal">Kirim </button>
                </div>
              </div>
            </div>
          </div>


          <div class="modal fade" id="editPassword2" aria-hidden="true" data-bs-backdrop="static" aria-labelledby="editPasswordLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content"style="border-radius: 40px;">
                <div class="modal-header" style="border: none;">
                  <h5 class="modal-title" id="editPasswordModalLabel">Ubah kata sandi</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                 <div class="container"> 
<p>(Silahkan Ubah kata sandi)</p>
<br>
<br>
        <div class="form-group">
          <div class="row">
            <label for="editEmailInput" class="col-4 col-form-label"> Email<span style="color: #F26419">*</span> </label>
            <div class="col-8">
              <input type="email" class="form-control" id="editEmailInput">
            </div>
          </div>
          <hr style="border: 3px solid #F26419;">
          <div class="row">
            <label for="editEmailInput" class="col-4 col-form-label"> Sandi baru<span style="color: #F26419">*</span> </label>
            <div class="col-8">
              <input type="email" class="form-control" id="editEmailInput">
            </div>
          </div>
          <br>
          <div class="row">
            <label for="editEmailInput" class="col-4 col-form-label"> Ulangi Kata sandi<span style="color: #F26419">*</span> </label>
            <div class="col-8">
              <input type="email" class="form-control" id="editEmailInput">
            </div>
          </div>
        </div>
      </div>
                <div class="modal-footer d-flex justify-content-center" style="border: none; ">
                  <button class="btn"  style="background-color: #F26419; color: white; width: 209px; height: 40px; border-radius: 10px;" data-bs-target="#selamat" data-bs-toggle="modal">Ubah Kata Sandi</button>
                </div>
              </div>
            </div>
          </div>


          <div class="modal fade" id="selamat" aria-hidden="true" aria-labelledby="selamatLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content"style="border-radius: 40px;">
                <div class="modal-body text-center mt-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                    <path d="M22.4974 0.416992C10.3074 0.416992 0.414062 10.3103 0.414062 22.5003C0.414062 34.6903 10.3074 44.5837 22.4974 44.5837C34.6874 44.5837 44.5807 34.6903 44.5807 22.5003C44.5807 10.3103 34.6874 0.416992 22.4974 0.416992ZM18.0807 33.542L7.03906 22.5003L10.1528 19.3866L18.0807 27.2924L34.842 10.5312L37.9557 13.667L18.0807 33.542Z" fill="#F26419"/>
                    </svg>
                  <p>Selamat! sandi anda berhasil diubah.</p>
                </div>
              </div>
            </div>
          </div>
{{-- end modal password --}}

      </div>

      <h1>Data diri</h1>
      <hr style="border: 3px solid #F26419;">
      <div class="container">
      <form >
        <div class="row mb-3">
          <label for="user id" class="col-sm-2 col-form-label">Nama Lengkap<span style="color: #F26419">*</span></label>
          <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm " style=" margin-left: 20%; "  id="user id">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inpuUsername" class="col-sm-2 col-form-label">Deskripsi Diri<span style="color: #F26419">*</span></label>
          <div class="col-sm-8">
            <textarea class="form-control" id="" name="Deskripsi Diri"style=" margin-left: 20%;" rows="3" required></textarea>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputEmail" class="col-sm-2 col-form-label">Gender<span style="color: #F26419">*</span></label>
          <div class="col-sm-8" >
            <input style=" margin-left: 20%;" type="radio" name="gender" value="male"> laki-laki
            <input style=" margin-left: 20%;" type="radio" name="gender" value="female"> perempuan
          </div>
        </div>
        <div class="row mb-3">
          <label for="input no. Telepon" class="col-sm-2 col-form-label">No.Telepon<span style="color: #F26419">*</span></label>
          <div class="col-sm-8">
            <input type="tel" class="form-control form-control-sm" style=" margin-left: 20%;" >
          </div>
        </div>
        <div class="row mb-3">
          <label for="user id" class="col-sm-2 col-form-label">Pendidikan<span style="color: #F26419">*</span></label>
          <div class="col-sm-10">
            <div class="input-group">
                <textarea class="form-control" style="background-color: #EBEBEB; margin-left: 16%;" id="exampleFormControlTextarea1" rows="3"></textarea>
                {{-- <input type="email" class="form-control form-control-sm" style="background-color: whitesmoke; margin-left: 16%;" id="inputEmail"> --}}
                <div class="input-group-append">
                  <span class="input-group-text justify-text-end form-control-sm" style="background-color: transparent; border-color: transparent;">
                    <a href="#">
                      <i class="bi bi-pencil-fill" style="color: #F26419;"></i>
                    </a>
                  </span>
                </div>
              </div>
          </div>
        </div>
        <!-- Tambahkan tombol dropdown untuk Organisasi -->
        <div class="row mb-2">
          <label for="user id" class="col-sm-2 col-form-label">Organisasi</label>
          <div class="col-sm-10">
            <div class="input-group">
                <textarea class="form-control" style="background-color: #EBEBEB; margin-left: 16%;" id="exampleFormControlTextarea1" rows="3"></textarea>
                {{-- <input type="email" class="form-control form-control-sm" style="background-color: whitesmoke; margin-left: 16%;" id="inputEmail"> --}}
                <div class="input-group-append">
                  <span class="input-group-text justify-text-end form-control-sm" style="background-color: transparent; border-color: transparent;">
                    <a href="#">
                      <i class="bi bi-pencil-fill" style="color: #F26419;"></i>
                    </a>
                  </span>
                </div>
              </div>
          </div>
        </div>
        <!-- Tambahkan tombol dropdown untuk Pengalaman Kerja -->
        <div class="row mb-2">
          <label for="user id" class="col-sm-2 col-form-label">Pengalaman Kerja</label>
          <div class="col-sm-10">
            <div class="input-group">
                <textarea class="form-control" style="background-color: #EBEBEB; margin-left: 16%;" id="exampleFormControlTextarea1" rows="3"></textarea>
                {{-- <input type="email" class="form-control form-control-sm" style="background-color: whitesmoke; margin-left: 16%;" id="inputEmail"> --}}
                <div class="input-group-append">
                  <span class="input-group-text justify-text-end form-control-sm" style="background-color: transparent; border-color: transparent;">
                    <a href="#">
                      <i class="bi bi-pencil-fill" style="color: #F26419;"></i>
                    </a>
                  </span>
                </div>
              </div>
          </div>
        </div>
        <!-- Tambahkan tombol dropdown untuk Skill -->
        <div class="row mb-2">
          <label for="user id" class="col-sm-2 col-form-label">Skill<span style="  color: #F26419">*</span></label>
          <div class="col-sm-10">
            <div class="input-group">
                <textarea class="form-control" style="background-color: #EBEBEB; margin-left: 16%;" id="exampleFormControlTextarea1" rows="3"></textarea>
                {{-- <input type="email" class="form-control form-control-sm" style="background-color: whitesmoke; margin-left: 16%;" id="inputEmail"> --}}
                <div class="input-group-append">
                  <span class="input-group-text justify-text-end form-control-sm" style="background-color: transparent; border-color: transparent;">
                    <a href="#">
                      <i class="bi bi-pencil-fill" style="color: #F26419;"></i>
                    </a>
                  </span>
                </div>
              </div>
          </div>
        </div>

          
      </form>
    </div>
        <h1>Social Media</h1>
        <hr style="border: 3px solid #F26419;">

        <div class="container">
            <form >
              <div class="row mb-3">
                <label for="Instagram" class="col-sm-2 col-form-label">Instagram</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm " style=" margin-left: 20%; "  id="Instagram">
                </div>
              </div>
              <div class="row mb-3">
                <label for="LinkedIn" class="col-sm-2 col-form-label" >LinkedIn</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm" style=" margin-left: 20%;" id="LinkedIn">
                </div>
              </div>
              <div class="row mb-3">
                <label for="Website" class="col-sm-2 col-form-label">Website</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm" style=" margin-left: 20%;" id="Website">
                </div>
              </div>
              <div class="row mb-3">
                <label for="Twitter" class="col-sm-2 col-form-label">Twitter</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm" style=" margin-left: 20%;" id="Twitter">
                </div>
              </div>
            </form>
          </div>

          <div class="d-grid gap-2 d-md-flex justify-content-end mt-5">
            <div class="modal fade" id="buttonsave" aria-hidden="true" aria-labelledby="buttonsave1" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content"style="border-radius: 40px;">
                  <div class="modal-body text-center mt-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                      <path d="M22.4974 0.416992C10.3074 0.416992 0.414062 10.3103 0.414062 22.5003C0.414062 34.6903 10.3074 44.5837 22.4974 44.5837C34.6874 44.5837 44.5807 34.6903 44.5807 22.5003C44.5807 10.3103 34.6874 0.416992 22.4974 0.416992ZM18.0807 33.542L7.03906 22.5003L10.1528 19.3866L18.0807 27.2924L34.842 10.5312L37.9557 13.667L18.0807 33.542Z" fill="#F26419"/>
                      </svg>
                    <p>Data berhasil disimpan..</p>
                  </div>
                </div>
              </div>
            </div>
            <button class="btn btn-primary" style="background-color: #C5C5C5;" type="button">Unduh cv</button>
            <button class="btn btn-primary" style="background-color: #14AE5C;" type="button" data-bs-toggle="modal" data-bs-target="#buttonsave">Simpan</button>
          </div>

@endsection




