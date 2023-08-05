@extends('admin.mainAdmin')

@section('container-admin')

<div class="content-wrapper ">
    <div class="content-header p-4">
        <div class="container-fluid ">
            <h3>Add New Post</h3>
            <div class="mb-3">
                <input class="form-control" id="" type="text" value="" placeholder="Masukan judul Tips Kerja....">
            </div>
            <a href="">
                <button type="button" class="btn btn-secondary pl-3 pr-3 mb-3"><i class="fa-solid fa-image mr-3"></i>Tambahkan Gambar</button>
            </a>
            <div class="mb-3"> 
                    <textarea class="form-control" rows="3" id="ck-editor"></textarea>
                    <!-- Script Text Area CK-Editor -->
                    <script>
                        ClassicEditor
                        .create( document.querySelector( '#ck-editor' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                    </script>
                    <!-- Script Text Area CK-Editor -->
            </div>
            <div class="mb-3">
                <h6>Wahtu Acara</h6>
                <div class="row">
                <div class="col-2">
                    <input type="text" id="datepicker" class="form-control" placeholder="Pilih tanggal..">
                    <!-- Script datePicker -->
                    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/l10n/id.js"></script>
                    <script src="assets/js/datePicker.js"></script>
                    <!-- Script datePicker -->
                </div>

                <div class="col-2">
                    <input type="text" id="timepicker" class="form-control" placeholder="Mulai..">
                    <!-- Script datePicker -->
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/plugins/confirmDate/confirmDate.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                    <script src="assets/js/timePicker.js"></script>
                    <!-- Script datePicker -->
                </div>
                <span class="text-center mt-1 mr-1 ml-1">Sampai</span>
                <div class="col-md-2">
                    <input type="text" id="timepicker" class="form-control" placeholder="Selesai..">
                    <!-- Script datePicker -->
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/plugins/confirmDate/confirmDate.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                    <script src="assets/js/timePicker.js"></script>
                    <!-- Script datePicker -->
                </div>
                </div>
            </div>
            <div class="mb-3">
                <h6>Lokasi</h6>
                <textarea class="form-control" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <h6>Lokasi</h6>
                <div class="row mb-2">
                    <div class="col-md-2">
                        <input type="text" id="timepicker" class="form-control" placeholder="Waktu..">
                        <!-- Script datePicker -->
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/plugins/confirmDate/confirmDate.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                        <script src="assets/js/timePicker.js"></script>
                        <!-- Script datePicker -->
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" placeholder="Isi kegiatan..">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-2">
                        <input type="text" id="timepicker" class="form-control" placeholder="Waktu..">
                        <!-- Script datePicker -->
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/plugins/confirmDate/confirmDate.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                        <script src="assets/js/timePicker.js"></script>
                        <!-- Script datePicker -->
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" placeholder="Isi kegiatan..">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-2">
                        <input type="text" id="timepicker" class="form-control" placeholder="Waktu..">
                        <!-- Script datePicker -->
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/plugins/confirmDate/confirmDate.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                        <script src="assets/js/timePicker.js"></script>
                        <!-- Script datePicker -->
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" placeholder="Isi kegiatan..">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-2">
                        <input type="text" id="timepicker" class="form-control" placeholder="Waktu..">
                        <!-- Script datePicker -->
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/plugins/confirmDate/confirmDate.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                        <script src="assets/js/timePicker.js"></script>
                        <!-- Script datePicker -->
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" placeholder="Isi kegiatan..">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-12">
                        <button class="btn btn-secondary btn-block"><i class="fa-solid fa-plus mr-2"></i>Tambahan Acara</button>
                    </div>
                </div>
            </div>
            <div class="col-12 text-right">
                <a href="event">
                    <button type="button" class="btn btn-success pl-4 pr-4">Simpan</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection