@extends('layouts.profilpelamar')
@section('container')


    <h1>Alamat</h1>
    <hr style="border: 3px solid red;">
    <div class="container" style="background-color: #FFF7E4; border-radius: 20px">
      <br>

<form action="{{ route('alamat.update', $alamat->id) }}" method="POST">
  <div class="container">
    @csrf
    @method('PUT')
  <div class="mb-3">
  <label for="labelAlamat" class="form-label">Label Alamat</label>
  <input type="text" class="form-control" style="background-color: #FFF7E4; border: none;" id="labelAlamat" aria-describedby="emailHelp" name="labelAlamat" value="{{ $alamat->label }}" required>


  </div>
  <hr style="border: 3px solid black">
  <div class="mb-3">
  <label for="alamatLengkap" class="form-label">Alamat Lengkap</label>
  <input type="text" class="form-control" style="background-color: #FFF7E4; border: none;" id="alamatLengkap" aria-describedby="emailHelp" name="alamatLengkap" value="{{ $alamat->alamat }}" required>

  </div>
  <div class="mb-3">
  <hr style="border: 3px solid black">
  <label for="kecamatan" class="form-label">Kecamatan</label>
  <input type="text" class="form-control" style="background-color: #FFF7E4; border: none;" id="kecamatan" aria-describedby="emailHelp" name="kecamatan" value="{{ $alamat->kecamatan }}" required>

  </div>
  <div class="mb-3">
  <hr style="border: 3px solid black">
  <label for="kota" class="form-label">Kota</label>
  <input type="text" class="form-control" style="background-color: #FFF7E4; border: none;" id="kota" aria-describedby="emailHelp" name="kota" value="{{ $alamat->kota }}" required>

  </div>
  <div class="mb-3">
  <hr style="border: 3px solid black">
  <label for="provinsi" class="form-label">Provinsi</label>
  <input type="text" class="form-control" style="background-color: #FFF7E4; border: none;" id="provinsi" aria-describedby="emailHelp" name="provinsi" value="{{ $alamat->provinsi }}" required>

  </div>
  <div class="mb-3">
  <hr style="border: 3px solid black">
  <label for="detailLainnya" class="form-label">Detail Lainnya (Cth: Blok/Unit)</label>
  <input type="text" class="form-control" style="background-color: #FFF7E4; border: none;" id="detailLainnya" aria-describedby="emailHelp" name="detail" value="{{ $alamat->detail }}" placeholder="Opsional">

  </div>
  <div class="mb-3">
  <hr style="border: 3px solid black">
  <label for="kodePos" class="form-label">Kode Pos</label>
  <input type="text" class="form-control" style="background-color: #FFF7E4; border: none;" id="kodePos" aria-describedby="emailHelp" name="kode" value="{{ $alamat->kode }}" required>
  <hr style="border: 3px solid black">
  </div>

  <div class="mb-3">
  <label for="nama" class="form-label">Nama Pelamar</label>
  <input type="text" class="form-control" style="background-color: #FFF7E4; border: none;" id="nama" aria-describedby="emailHelp" name="nama_pelamar" value="{{ $alamat->nama_pelamar }}">
  <hr style="border: 3px solid black">
  </div>

    <div class="d-grid gap-2 d-md-flex justify-content-center mt-5">
        <button class="btn btn-primary" style="background-color: #F26419; border:none;" type="submit">Simpan</button>
    </div>
  </form>
  <br>
  <br>

  </div>
    </div>

@endsection
