@extends('admin.mainAdmin')

@section('container-admin')



<div class="content-wrapper ">
    <div class="content-header ">
        <div class="container-fluid ">
            <h3 class="mb-2">Profile Admin</h3>
            <div class="row">
                <div class="col-xl-3">
                    <!-- Profile picture card-->
                    <div class="card mb-4 mb-xl-0">
                        <center><div class="card-header bg-dark">Profile Picture</div></center>
                        <div class="card-body text-center">
                            <!-- Profile picture image-->
                            <img class="img-account-profile rounded-circle mb-2" src="assets/img/face.15.png" alt="" width="150px">
                            <!-- Profile picture help block-->
                            <div class="small mb-0"><h4>Joseph Vissarionovich Stalin</h4></div>
                            <div class="small text-muted  mb-4">jstalin@gmail.com</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <center><div class="card-header bg-dark">Account Details</div></center>
                        <div class="card-body justify-content-center">
                            <form>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="email">Email</label>
                                        <input class="form-control" id="email" type="text" value="jstalin@gmail.com" disabled>
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="username">Username</label>
                                        <input class="form-control" id="username" type="text" value="jstalin" disabled>
                                    </div>
                                </div>
                                <!-- Form Group (username)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="fullName">Nama Lengkap</label>
                                <input class="form-control" id="fullName" type="text" value="Joseph Vissarionovich Stalin" disabled>
                                </div>
                                <!-- Form Row        -->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (organization name)-->
                                    <div class="col-md-4">
                                        <label class="small mb-1" for="province">Provinsi</label>
                                        <input class="form-control" id="province" type="text" value="Jawa Timur" disabled>
                                    </div>
                                    <!-- Form Group (location)-->
                                    <div class="col-md-4">
                                        <label class="small mb-1" for="city">Kabupaten / Kota</label>
                                        <input class="form-control" id="city" type="text" value="Madiun" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="small mb-1" for="postalCode">Kecamatan</label>
                                        <input class="form-control" id="postalCode" type="text" value="Mangun Harjo" disabled>
                                    </div>
                                </div>
                                <!-- Form Group (username)-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="">Desa</label>
                                        <input class="form-control" id="" type="text" placeholder="Masukan Kelurahaan anda" disabled value="-">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="">Kode Pos</label>
                                        <input class="form-control" id="" type="text" placeholder="Masukan Kecamatan anda" disabled value="63131">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1" for="fullName">Detail Lainnya</label>
                                <input class="form-control" id="fullName" type="text" value="Jl. Perintis Kemerdekaan No. 110, Gg. Cendrawasih" disabled>
                                </div>
                                <!-- Save changes button-->
                                <center>
                                    <a href="/profileEditAdmin">
                                        <button class="btn btn-primary pl-5 pr-5" type="button">
                                            Edit
                                        </button>
                                    </a>
                                </center>
                                    
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection