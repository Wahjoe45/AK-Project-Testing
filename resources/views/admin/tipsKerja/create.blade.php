@extends('admin.mainAdmin')

@section('container-admin')

<div class="content-wrapper ">
    <div class="content-header p-4">
        <div class="container-fluid ">
            <h3>Add New Post</h3>

            <!-- Script Judul Tips Kerja -->
            <div class="mb-3">
                <input class="form-control" id="fullName" type="text" value="{{ old('judulTipsKerja') }}" placeholder="Masukan judul Tips Kerja....">
                @error('judulTipsKerja')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Script Konten Upload Gambar Tips Kerja -->
            <a href="">
                <label for="fileInput" class="btn btn-secondary pl-3 pr-3">
                <i class="fa-solid fa-image mr-3"></i>Tambahkan Gambar
                <input type="file" name="gambarTipsKerja" id="fileInput" accept="image/*" class="d-none">
                </label>
            </a>

            <!-- Script Konten Tips Kerja -->
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

            <div class="col-12 text-right">
                <a href="adminTipsKerja">
                    <button type="button" class="btn btn-success pl-4 pr-4">Simpan</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
