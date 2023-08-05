@extends('admin.mainAdmin')

@section('container-admin')
<div class="content-wrapper ">
    <div class="content-header ">
        <div class="container-fluid ">
          @if (Session::has('pesan'))
          <div class="alert alert-danger text-center">
            <button type="button" class="close" data-dismiss="alert">x</button>
             {{ Session::get('pesan') }}
          </div>
          @endif
            <h3 class="mb-3">Management</h3>
            <div class="row mb-4">
                <div class="col-md-1 mr-4 ">
                    <a href="perusahaanManagement"><button type="button" class="btn btn-dark" >Management</button></a>
                </div>
                <div class="col-md-1 mr-4">
                    <a href="perusahaanReqruitment"><button type="button" class="btn btn-outline-dark" >Reqruitment</button></a>
                </div>
                <div class="col-md-2">
                    <a href="perusahaanTalentHunter"><button type="button" class="btn btn-outline-dark" >Talent Hunter</button></a>
                </div>
                <div class="col"></div>
                <div class="col-md-4">
                    <div class="form-outline">
                        <input type="email" id="form1Example1" class="form-control" placeholder="Search here....."/>
                    </div>
                </div>
            </div>
            <div class="row">
                <table class="table align-middle">
                    <thead>
                        <tr class="text-center bg-dark">
                        <th scope="col">ID</th>
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                      @foreach ($perusahaan as $item)  
                      <tr>
                        <th scope="row">{{ $loop->iteration  }}</th>
                        <td>{{ $item->namaPerusahaan }}</td>
                        <td>{{$item->email}}</td>
                        <td>{{ $item->teleponPerusahaan }}</td>
                        <td>Ngasinan, Kraguman, Jogonalan, Klaten Jawa Tengah 57452</td>
                        <td class="d-flex justify-content-between">
                        @endforeach
                            <a href="detailPerusahaanManagement">
                        @foreach ($detailPerusahaan as $item)
                                <a href="{{ route('perusahaan.detail', $item->id) }}" class="btn btn-link btn-sm bg-dark" data-ripple-color="dark">
                                <i class="fa-solid fa-eye"></i>
                                </a>
                                @endforeach
                                @foreach ($perusahaan as $item)
                                <form action="{{ route('perusahaan.hapus', $item->id) }}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-link btn-sm bg-dark" onclick="showConfirmationForm()" data-ripple-color="dark">
                                    <i class="fa-solid fa-ban"></i>
                                  </button>
                                </form>
                                @endforeach
                              </a>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection