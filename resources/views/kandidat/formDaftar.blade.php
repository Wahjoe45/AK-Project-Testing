{{-- css untuk form pendaftaran --}}

<style>
        
    /* CSS untuk elemen label bank dan pilihan bank */
    label.bank-option {
        display: block;
        border-bottom: 1px solid #ccc; /* Border hanya pada bagian bawah */
        /* width: 50%; */
        padding: 6px;
        margin-bottom: 5px;
    }


    label.qr-option {
        display: block;
        /* width: 50%; */
        padding: 6px;
        margin-bottom: 5px;
    }

    /* CSS untuk garis bawah pada label pilihan bank saat dihover */
    label.bank-option:hover {
        border-bottom: 2px solid #F26419;;
    }

    label.qr-option:hover {
        border-bottom: 2px solid #F26419;;
    }

    /* CSS untuk elemen teks yang dapat diklik */
    .clickable-text {
        cursor: pointer;
        color: rgb(0, 0, 0);
        margin-bottom: 10px;
    }
</style>

{{-- tahap 1 memilih divisi yang diinginkan --}}
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 8px;">
            <!-- Header -->
            <div class="modal-header" style="position: relative; text-align: center;">
                <h3 class="modal-title" id="staticBackdropLabel" style="border-bottom: 3px solid #F26419; font-weight: bold;">Daftar Kandidat</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="position: absolute; top: 10px; right: 10px;" onclick="window.location.href =('/daftarKandidat')"></button>
            </div>

            <!-- Body content -->
            <div class="modal-body">
                <!-- Bidang yang diminati -->
                <div>
                    <h5 style="text-align: center; font-weight: bold;">Bidang yang diminati</h5>
                    <form>
                    <div class="row mt-5 mb-5">
                        <label for="user id" class="col-2 col-form-label " style=" margin-left: 30px; margin-right: 25px; font-weight: bold;">Divisi<span style="color: #F26419">*</span></label>

                    <div class="col-sm-8">        
                        <select class="form-select form-select-sm" id="floatingSelect" aria-label="Floating label select example" style="border: 1px solid #000000;">
                            <option value="" disabled selected>Select</option>
                            <option value="1">Admin</option>
                            <option value="2">Videographer</option>
                            <option value="3">Human Resource</option>
                            <option value="4">UI/UX</option>
                            <option value="5">Desain Grafis</option>
                        </select>
                        
                        </div>
                    </div> 
                </form>
                </div>
            </div>
            <!-- Footer (optional) -->
            <div class="modal-footer">
                <button class="btn" style="background-color: rgba(red, rgba(0, 128, 0, 0), blue); color:#F26419;" data-bs-target="#staticBackdrop2" data-bs-toggle="modal" data-bs-dismiss="modal">Selanjutnya &gt;</button>
            </div>
        </div>    
    </div>
</div>


{{-- tahap 2 memilih metode pembayaran --}}
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 8px;">
            <!-- Header -->
            <div class="modal-header" style="position: relative; text-align: center;">
                <h3 class="modal-title" id="staticBackdropLabel" style="border-bottom: 3px solid #F26419; font-weight: bold;">Daftar Kandidat</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="position: absolute; top: 10px; right: 10px;"  onclick="window.location.href =('/daftarKandidat')"></button>
            </div>

    <!-- Body content -->
            <div class="modal-body" style="font-weight: bold;">
                <!-- Metode Pembayaran -->
                <div>
                    <h5 style="text-align: center; color: rgb(0, 0, 0);font-weight: bold;">Metode Pembayaran</h5>
                    <form>
                        <div class="mt-3 mb-3" style="margin-right:50px; margin-left:50px; border: 1px solid #C5C5C5; border-radius: 5px;">
                            
                            <div class="clickable-text mt-3 mb-1" id="transaksiBankButton" style="border-bottom: 1px solid #ccc; margin-left: 50px; margin-right: 50px">
                                <img src="assets/img/formKandidat/Group.png" style="margin-right: 10px; margin-left: 15px padding: 6px; "width= "20px"  > Transfer Bank 
                                <img src="assets/img/formKandidat/low.png" style="margin-left: 105px"  ></div>

                                    <div id="methodPayments" style="display: none; margin">
                                        <label for="bca" class="bank-option" style="margin-left: 100px; margin-right: 50px">
                                            <img src="assets/img/formKandidat/logoBca.png" style="margin-right: 10px; " width= "20px"  >Bank BCA
                                            <input type="radio" style="float: right; " id="bca" name="metodeBayar" value="BCA">
                                        </label>

                                        <label for="bni" class="bank-option" style="margin-left: 100px; margin-right: 50px">
                                            <img src="assets/img/formKandidat/logoBni.png" style="margin-right: 10px;  " width= "20px"  >Bank BNI
                                            <input type="radio" style="float: right; "id="bni" name="metodeBayar" value="BNI">
                                        </label>

                                        <label for="bri" class="bank-option" style="border-bottom: 1px solid #ccc; margin-left: 50px; margin-right: 50px">
                                            <img src="assets/img/formKandidat/logoBri.png" style="margin-left: 50px; margin-right: 10px;  " width= "20px"  >Bank BRI
                                            <input type="radio" style="float: right; "id="bri" name="metodeBayar" value="BRI">
                                        </label>
                                    </div>

                                    <div class="mt-1" style="margin-left: 50px; margin-right: 50px;">
                                        <label for="qris" class="qr-option">
                                            <img src="assets/img/formKandidat/logoQris.png" style="margin-right: 10px; margin-left: 1px; " width= "35px"  >Qris
                                            <input type="radio" style="float: right; "id="qris" name="metodeBayar" value="qris">
                                        </label>
                                    </div> 
                        </div>
                    </form> 
                </div>
                </div>
            <!-- Footer (optional) -->
            <div class="modal-footer">
                <button class="btn mr-auto" style="background-color: rgba(red, rgba(0, 128, 0, 0), blue); color:#F26419;" data-bs-target="#staticBackdrop" data-bs-toggle="modal" data-bs-dismiss="modal" >&lt; Kembali</button>
                <button class="btn" style="background-color: rgba(red, rgba(0, 128, 0, 0), blue); color:#F26419;" data-bs-target="#staticBackdrop3" data-bs-toggle="modal" data-bs-dismiss="modal">Selanjutnya &gt;</button>
            </div>
        </div>    
    </div>
</div>

{{-- tahap 3 konfirmasi pembayaran --}}
<div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 8px;">
            <!-- Header -->
            <div class="modal-header" style="position: relative; text-align: center;">
                <h3 class="modal-title" id="staticBackdropLabel" style="border-bottom: 3px solid #F26419; font-weight: bold;">Daftar Kandidat</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="position: absolute; top: 10px; right: 10px;" onclick="window.location.href =('/daftarKandidat')"></button>
            </div>

            <div class="mt-3 mb-3" style="margin-right:50px; margin-left:50px; border: 1px solid #C5C5C5; border-radius: 5px;">
            <!-- Body content -->
                    <div class="modal-body">
                        <!-- Data Konfirmasi Pembayaran -->
                        <div>
                            <h5 style="text-align: center; font-weight: bold;">Metode Pembayaran</h5>
                                <div class="mt-3 mb-3 flex-column">
                                    <div class="justify-content-between mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <label for="noTransaksi" class="form-label">No Transaksi : </label>
                                            </div>
                                            <div class="col">
                                                <p style="float: right;">11829236282</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="noTransaksi" class="form-label">Dari </label>
                                            </div>
                                            <div class="col">
                                                <p style="float: right;">Bambang Kurnia</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="noTransaksi" class="form-label">Ke  </label>
                                            </div>
                                            <div class="col">
                                                <p style="float: right;">Area Kerja</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="noTransaksi" class="form-label">Metode Pembayaran </label>
                                            </div>
                                            <div class="col">
                                                <p style="float: right;">Transfer Bank</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="noTransaksi" class="form-label">Nama Bank </label>
                                            </div>
                                            <div class="col">
                                                <p style="float: right;">BCA</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="noTransaksi" class="form-label">Jumlah Deposit </label>
                                            </div>
                                            <div class="col">
                                                <p style="float: right; color:#F26419">Rp. 200.000,-</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="noTransaksi" class="form-label">Biaya Admin </label>
                                            </div>
                                            <div class="col">
                                                <p style="float: right; color:#F26419">Rp. 2000,-</p>
                                            </div>
                                        </div>
                                        <div class="row" style="font-weight: bold">
                                            <div class="col">
                                                <label for="noTransaksi" class="form-label" >Total Pembayaran </label>
                                            </div>
                                            <div class="col">
                                                <p style="float: right; color:#F26419">Rp.202.000,-</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3" style="margin-left: 70px; margin-right: 70px" >
                                        <button id="konfirmasiBtn" type="button" class="btn" style="background-color: rgba(242, 100, 25, 1); color: white; align-items: center;" data-bs-toggle="modal" >Konfirmasi</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <!-- Footer (optional) -->
            <div class="modal-footer">
                <button class="btn mr-auto" style="background-color: rgba(red, rgba(0, 128, 0, 0), blue); color:#F26419;" data-bs-target="#staticBackdrop2" data-bs-toggle="modal" data-bs-dismiss="modal" >&lt; Kembali</button>
            </div>
        </div>    
    </div>
</div>






{{-- js untuk tahap 2 dan 3 --}}
<script>
    var methodPayments = document.getElementById("methodPayments");
    var transaksiBankButton = document.getElementById("transaksiBankButton");

    // Menampilkan dan menyembunyikan pilihan bank ketika teks diklik
    transaksiBankButton.addEventListener("click", function() {
        if (methodPayments.style.display === "none") {
            methodPayments.style.display = "block";
        } else {
            methodPayments.style.display = "none";
        }
    });


    // Menangkap tombol "Konfirmasi" dan menambahkan event listener
    document.getElementById("konfirmasiBtn").addEventListener("click", function() {
        // Menampilkan popup "Menunggu Konfirmasi Pembayaran"
        alert("Menunggu Konfirmasi Pembayaran");

        // Mengarahkan pengguna ke halaman transaksi (ganti URL sesuai dengan halaman transaksi Anda)
        window.location.href = "/daftarKandidat";
    });
</script>