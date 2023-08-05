@extends('admin.mainAdmin')

@section('container-admin')

<div class="content-wrapper ">
    <div class="content-header p-4">
        <div class="container-fluid ">
            <h3>Edit Post</h3>
            <div class="mb-3">
                <input class="form-control" id="fullName" type="text" value="" placeholder="Masukan judul Tips Kerja....">
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
            <div class="col-12 text-right">
                <a href="adminTipsKerja">
                    <button type="button" class="btn btn-success pl-4 pr-4">Simpan</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection