@extends('admin.mainAdmin')

@section('container-admin')

<div class="content-wrapper ">
    <div class="content-header p-4">
        <div class="container-fluid ">
            <a href="event" class="text-dark"><h3 class="mb-3"><i class="fa-solid fa-chevron-left mr-2"></i>Event</h3></a>
            <div class="row mb-3">
                <span><strong>Status :</strong></span>
                <div class="col-1">
                    <button type="button" class="btn-sm btn-success border border-0 pl-3 pr-3">Verified</button>
                </div>
                <div class="col"></div>
                <div class="col-2 text-right" style="margin-right: -75px">
                    <a href="">
                        <button type="button" class="btn-sm btn-danger border border-0 pl-3 pr-3"><i class="fa-solid fa-trash mr-2"></i>Hapus</button>
                    </a>
                </div>
                <div class="col-2 text-right">
                    <a href="editEvent">
                        <button type="button" class="btn-sm btn-primary border border-0 pl-3 pr-3"><i class="fa-solid fa-pen-to-square mr-2"></i>Edit Event</button>
                    </a>
                </div>
            </div>
            <div class="container-fluid py-5 px-5 pl-2 pr-2" style="border-radius: 5px; background: #D9D9D9;">
                <h6 class="text-muted mb-3">Dibuat 27 Aug 2023 08.00</h6>
                <img src="assets/img/event.png" alt="" class="mb-4" width="100%">
                <h4>Judul Event Areakerja.com</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="line-hr"></div>
                <h5 class="mt-4 mb-3">Detail Acara</h5>
                <span class="mb-3"><i class="fa-solid fa-clock mr-3"></i> : Waktu: 30 Agustus 2023 (09.00 - 15.00) WIB</span> <br>
                <span class="mb-3"><i class="fa-solid fa-location-crosshairs mr-3"></i> : Lokasi: Kantor 1 Seven INC, Bantul, Yogyakarta</span>
                <h5 class="mt-4 mb-3">Daftar kegiatan:</h5>
                <table class="table table-striped border border-2">
                    <thead>
                      <tr class="bg-dark">
                        <th scope="col">Waktu</th>
                        <th scope="col">Kegiatan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">09.00 - 10:00</td>
                        <td class="text-center">Penyambutan</td>
                      </tr>
                      <tr>
                        <td class="text-center">10.00 - 11:00</td>
                        <td class="text-center">Isi Kegiatan</td>
                      </tr>
                      <tr>
                        <td class="text-center">11.00 - 13:00</td>
                        <td class="text-center">Isoma</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection