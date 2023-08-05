@extends('admin.mainAdmin')

@section('container-admin')
<div class="content-wrapper ">
    <div class="content-header p-4">
        <div class="container-fluid ">
            <div class="row mt-5">
                <div class="col-3">
                    <img src="/assets/img/image 1.png" alt="" width="250px">
                </div>
                <div class="col">
                    <div class="container">
                      <h3>Deskripsi</h3>
                      <p>{{ $detailPerusahaan->deskripsi }}</p>
                      {{-- <p class="text-justify pr-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu bibendum odio. Mauris eget ipsum facilisis, tincidunt turpis ut, ultrices justo. Sed ullamcorper velit ut lectus efficitur elementum. Nulla facilisi. Duis id turpis justo. Vivamus fringilla, felis nec scelerisque blandit, mauris lorem aliquam nulla, in tincidunt neque lacus at turpis. Aenean interdum, libero at tempus tincidunt, justo quam lacinia tortor, nec dignissim orci eros vitae orci. Proin eu iaculis sapien. Etiam euismod magna ut turpis vestibulum laoreet. Cras vulputate felis urna, ut facilisis ipsum scelerisque vitae. Duis iaculis vel ex non scelerisque.</p> --}}
                    </div>
                  </div>
                </div>
            <div class="col mt-3">
                <h3>Visi</h3>
                <div class="line-hr mb-3"></div>
                <p>{{ $detailPerusahaan->visi }}</p>
                {{-- <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu bibendum odio. Mauris eget ipsum facilisis, tincidunt turpis ut, ultrices justo. Sed ullamcorper velit ut lectus efficitur elementum. Nulla facilisi. Duis id turpis justo. Vivamus fringilla, felis nec scelerisque blandit, mauris lorem aliquam nulla, in tincidunt neque lacus at turpis. Aenean interdum, libero at tempus tincidunt, justo quam lacinia tortor, nec dignissim orci eros vitae orci. Proin eu iaculis sapien. Etiam euismod magna ut turpis vestibulum laoreet. Cras vulputate felis urna, ut facilisis ipsum scelerisque vitae. Duis iaculis vel ex non scelerisque.</p> --}}
            </div>
            <div class="col mt-3">
                <h3>Misi</h3>
                <div class="line-hr mb-3"></div>
                <p>{{ $detailPerusahaan->misi }}</p>
                {{-- <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu bibendum odio. Mauris eget ipsum facilisis, tincidunt turpis ut, ultrices justo. Sed ullamcorper velit ut lectus efficitur elementum. Nulla facilisi. Duis id turpis justo. Vivamus fringilla, felis nec scelerisque blandit, mauris lorem aliquam nulla, in tincidunt neque lacus at turpis. Aenean interdum, libero at tempus tincidunt, justo quam lacinia tortor, nec dignissim orci eros vitae orci. Proin eu iaculis sapien. Etiam euismod magna ut turpis vestibulum laoreet. Cras vulputate felis urna, ut facilisis ipsum scelerisque vitae. Duis iaculis vel ex non scelerisque.</p> --}}
            </div>
            <div class="col mt-3">
                <h3>Data Perusahaan</h3>
                <div class="line-hr mb-3"></div>
            </div>
            <div class="row">
                <div class="col-4 ml-2">
                    <p class="mb-2">User ID</p>
                    <p class="mb-2">Username</p>
                    <p class="mb-2">Email</p>
                    <p class="mb-2">Kata Sandi</p>
                    <p class="mb-2">Nama Perusahaan</p>
                    <p class="mb-2">Legalitas</p>
                </div>
                <div class="col">
                  @foreach ($perusahaan as $item)
                  <p class="mb-2">: {{ $item->user_id ?? 'Kosong' }}</p>
                  <p class="mb-2">: {{$item->namaPerusahaan}}</p>
                  <p class="mb-2">: {{$item->email}}</p>
                  <p class="mb-2">: *************</p>
                  <p class="mb-2">: Seven INC</p>
                  <p class="mb-2">: PT</p>
                </div>
              </div>
              <div class="col mt-3">
                <h3>No Telepon</h3>
                <div class="line-hr mb-3"></div>
              </div>
              <div class="row">
                <div class="col-4 ml-2">
                  <p class="mb-2">No Perusahaan</p>
                  <p class="mb-2">No Whatsapp</p>
                  
                </div>
                @endforeach
                <div class="col">
                    <p class="mb-2">: {{ $item->teleponPerusahaan }}</p>
                    <p class="mb-2">: Seven_Inc</p>
                </div>
            </div>
            <div class="col mt-3">
                <h3>Lowongan</h3>
                <div class="line-hr mb-3"></div>
                <a href="detailLowonganPerusahaanManagement"><h4>Front-End Developer</h4></a>
                <p class="text-muted">Yogyakarta<br>di buat 2 hari yang lalu.</p>
                <a href=""><h4>Back-End Developer</h4></a>
                <p class="text-muted">Yogyakarta<br>di buat 2 hari yang lalu.</p>
                <a href=""><h4>Android Developer</h4></a>
                <p class="text-muted">Yogyakarta<br>di buat 2 hari yang lalu.</p>
            </div>
            <center>
                <a href="{{route('perusahaan.index')}}"><button type="button" class="btn bg-dark">Kembali</button></a>
            </center>
        </div>
    </div>
</div>
@endsection