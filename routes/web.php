<?php

use App\Http\Controllers\alamatController;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\DetailPerusahaanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\TipsKerjaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing-page/beranda', [
        'title' => 'beranda'
    ]);
});

Route::get('/beranda', function () {
    return view('landing-page/beranda', [
        'title' => 'beranda'
    ]);
});

Route::get('/talentHunter', function () {
    return view('landing-page/talentHunter', [
        'title' => 'Talent Hunter'
    ]);
});

Route::get('/tipsKerja', function () {
    return view('landing-page/tipsKerja', [
        'title' => 'Tips Kerja'
    ]);
});

Route::get('/detailPostTipsKerja', function () {
    return view('landing-page/detailPostTipsKerja', [
        'title' => 'Tips Kerja'
    ]);
});

Route::get('/daftarKandidat', function () {
    return view('landing-page/daftarKandidat', [
        'title' => 'Daftar Kandidat'
    ]);
});

Route::get('/pasangLowongan', function () {
    return view('landing-page/pasangLowongan', [
        'title' => 'Pasang Lowongan'
    ]);
});
Route::get('/syaratKetentuan', function () {
    return view('layouts.syaratKetentuan', [
        "title" => "syaratKetentuan"
    ]);
});

Route::get('/detail', function () {
    return view('landing-page/tampilanAwalDetailPost', [
        'title' => 'Tampilan Awal'
    ]);
});

Route::get('/rekrutSaya', function () {
    return view('layouts.rekrutsaya', [
        "title" => "Rekrut Saya"
    ]);
});

Route::get('/rekrutSaya2', function () {
    return view('layouts.rekrutsaya2', [
        "title" => "Detail"
    ]);
});

Route::get('/lowonganTersimpan', function () {
    return view('layouts.lowonganTersimpan', [
        "title" => "Detail"
    ]);
});

///pelamar


// Route::get('/profilPelamar', [profilController::class, 'view'])->name('pelamar.index');

Route::get('/isiprofilpelamar', function () {
    return view('pelamar.isiprofilpelamar',[
        "title" => "Isi data diri"
    ]);
});
Route::get('/datapelamar', function () {
    return view('pelamar.Datalengkap',[
        "title" => "data lengkap"
    ]);
});

Route::get('pelamar/{id}', [PelamarController::class, 'show'])->name('pelamar.profil'); // berhasil mengambil data berdasar id namum ketika return ke view tampilannya kacau


Route::prefix('/pelamar-management')->group(function(){
    Route::get('/pelamar/{id}', [PelamarController::class, 'show'])->name('pelamar.profil');
});
Route::get('/isialamat', function () {
    return view('pelamar.isialamat',[
        "title" => "isiAlamatr"
          ]);
});

Route::get('/berandaPelamar/{id}', [berandaController::class, 'view'])->name('beranda.view');

Route::prefix('alamat-management')->group(function () {
    Route::get('/alamat/{id}', [alamatController::class, 'editAlamat'])->name('alamat.edit');
    Route::put('/alamat/{id}', [alamatController::class, 'update'])->name('alamat.update');

});




// route::get('/login', function () {
//     return view('auth/login');
// });


// LOGIN NON USER
route::get('/login', [LoginController::class, 'index']);
route::post('/login', [LoginController::class, 'login']);



// route::get('/regis', function () {
//     return view('auth/regis');
// });

// REGISTER PELAMAR
route::get('/regis', [RegisController::class, 'index']);
route::post('/regis', [RegisController::class, 'registrasi_pelamar']);
// END
// REGISTRASI PERUSAHAAN
route::post('/regisperusahaan', [RegisController::class, 'registrasi_perusahaan']);
// END



// Lupa password

route::get('/lupaPw', function () {
    return view('auth/lupaPassword/lupaPw');
});
route::get('/lupaPwValidasi', function () {
    return view('auth/lupaPassword/lupaPwValidasi');
});
route::get('/lupaPwSandiBaru', function () {
    return view('auth/lupaPassword/lupaPwSandiBaru'); //

});

Route::get('/syaratKetentuan', function () {
    return view('layouts.syaratKetentuan', [
        "title" => "syaratKetentuan"
    ]);
});



// tampilan-kandidat


route::get('/regis', function () {
    return view('auth/regis');
});
Route::get('/rekrutSaya', function () {
    return view('kandidat.rekrutsaya', [
        "title" => "Rekrut Saya"
    ]);
});

Route::get('/rekrutSaya2', function () {
    return view('kandidat.rekrutsaya2', [
        "title" => "Rekrut Detail"
    ]);
});

Route::get('/lowonganTersimpan', function () {
    return view('kandidat.lowonganTersimpan', [
        "title" => "Lowongan Detail"
    ]);
});


// [Admin]
// Semua Komentar yang mempunyai label "[Admin]" adalah route dari tampilan Admin

// [Admin] Dashboard
Route::get('/dashboard', function () {
    return view('admin.dashboard.dashboard', [
        "title" => "Dashboard"
    ]);
});

// [Admin] Profile
route::get('/profileAdmin', function () {
    return view('admin/profile/index', [
        "title" => "Profile"
    ]);
});

route::get('/profileEditAdmin', function () {
    return view('admin/profile/edit', [
        "title" => "Edit Profil"
    ]);
});

// [Admin] Finance
route::get('/financeCoin', function () {
    return view('admin/finance/transaksiCoin/index', [
        "title" => "Finance Coin"
    ]);
});

route::get('/financeDetailCoin', function () {
    return view('admin/finance/transaksiCoin/detail', [
        "title" => "Finance Detail Coin"
    ]);
});

route::get('/financeCash', function () {
    return view('admin/finance/transaksiCash/index', [
        "title" => "Finance Cash"
    ]);
});

route::get('/financeDetailCash', function () {
    return view('admin/finance/transaksiCash/detail', [
        "title" => "Finance Detail Cash"
    ]);
});

// [Admin] Pelamar
route::get('/pelamarKandidat', function () {
    return view('admin/pelamar/kandidat/index', [
        "title" => "Kandidat"
    ]);
});

route::get('/detailPelamarKandidat', function () {
    return view('admin/pelamar/kandidat/detail', [
        "title" => "Detail Kandidat"
    ]);
});

route::get('/pelamarNonKandidat', function () {
    return view('admin/pelamar/nonKandidat/index', [
        "title" => "Non-Kandidat"
    ]);
});

route::get('/detailPelamarNonKandidat', function () {
    return view('admin/pelamar/nonKandidat/detail', [
        "title" => "Detail Non-Kandidat"
    ]);
});


// route::get('/perusahaanManagement', function () {
//     return view('admin/perusahaan/management/index', [
//         "title" => "Management"
//     ]);
// });

// [Admin] Perusahaan


Route::get('/perusahaanManagement', [DetailPerusahaanController::class, 'index'])->name('perusahaan.index');
// route::get('/detailPerusahaanManagement', function () {
//     return view('admin/perusahaan/management/detail', [
//         "title" => "Detail Management"
//     ]);
// });

Route::get('/detailPerusahaanManagement/{id}', [DetailPerusahaanController::class, 'detail'])->name('perusahaan.detail');
Route::delete('/detailPerusahaanManagement/{id}/delete', [DetailPerusahaanController::class, 'destroy'])->name('perusahaan.hapus');

route::get('/detailLowonganPerusahaanManagement', function () {
    return view('admin/perusahaan/management/detailLowongan', [
        "title" => "Detail Management"
    ]);
});

route::get('/perusahaanReqruitment', function () {
    return view('admin/perusahaan/reqruitment/index', [
        "title" => "Reqruitment"
    ]);
});

route::get('/detailPerusahaanReqruitment', function () {
    return view('admin/perusahaan/reqruitment/detail', [
        "title" => "Detail Reqruitment"
    ]);
});

route::get('/perusahaanTalentHunter', function () {
    return view('admin/perusahaan/talentHunter/index', [
        "title" => "Talent Hunter"
    ]);
});

route::get('/detailPerusahaanTalentHunter', function () {
    return view('admin/perusahaan/talentHunter/detail', [
        "title" => "Detail Talent Hunter"
    ]);
});

// [Admin] Auth
route::get('/adminLogin', function () {
    return view('admin/auth/login', [
        "title" => "Login"
    ]);
});

route::get('/adminForgotPassword', function () {
    return view('admin/auth/forgotPassword',[
        "title" => "Forgot Password"
    ]);
});

route::get('/adminCodeVerify', function () {
    return view('admin/auth/codeVerify',[
        "title" => " Code Verification"
    ]);
});

route::get('/adminNewPassword', function () {
    return view('admin/auth/newPassword',[
        "title" => "New Password"
    ]);
});

// [Admin] Tips Kerja

// route::get('/adminTipsKerja', function () {
//     return view('admin/tipsKerja/index',[
//         "title" => "Tips Kerja"
//     ]);
// });

route::get('/editTipsKerja', function () {
    return view('admin/tipsKerja/edit',[
        "title" => "Edit Tips Kerja"
    ]);
});

route::get('/createTipsKerja', function () {
    return view('admin/tipsKerja/create',[
        "title" => "Create Tips Kerja"
    ]);
});

Route::get('/adminTipsKerja/{id}', [TipsKerjaController::class, 'index'])->name('admin.tipsKerja');
// [Admin] Events

route::get('/event', function () {
    return view('admin/event/index',[
        "title" => "Event"
    ]);
});

route::get('/editEvent', function () {
    return view('admin/event/edit',[
        "title" => "Edit Event"
    ]);
});

route::get('/createEvent', function () {
    return view('admin/event/create',[
        "title" => "Tanmbahkan Event"
    ]);
});

route::get('/detailEvent', function () {
    return view('admin/event/detail',[
        "title" => "Detail event"
    ]);
});

// End Admin

// Pelamar

Route::get('/rekrutSaya', function () {
    return view('layouts.rekrutsaya', [
        "title" => "Rekrut Saya"
    ]);
});

Route::get('/rekrutSaya2', function () {
    return view('layouts.rekrutsaya2', [
        "title" => "Detail"
    ]);
});

Route::get('/lowonganTersimpan', function () {
    return view('layouts.lowonganTersimpan', [

        "title" => "Detail"
    ]);
});

// FAQ
Route::get('/faqs', function () {
    return view('layouts.faqs', [
        "title" => "FAQ'S"
    ]);
});
// perusahaan
Route::get('/syaratKetentuan', function () {
    return view('perusahaan.syaratKetentuan', [
        "title" => "Syarat Ketentuan"
    ]);
});

Route::get('/dashboardPerusahaanAkunBaru1', function () {
    return view('perusahaan.dashboardPerusahaanAkunBaru1', [
        "title" => "Perusahaan AkunBaru1"
    ]);
});

Route::get('/dashboardPerusahaanAkunBaru2', function () {
    return view('perusahaan.dashboardPerusahaanAkunBaru2', [
        "title" => "Perusahaan AkunBaru2"
    ]);
});

Route::get('/profilPerusahaanAkunBaru1', function () {
    return view('perusahaan.profilPerusahaanAkunBaru1', [
        "title" => "Profil Perusahaan1"
    ]);
});

Route::get('/editProfilPerusahaan', function () {
    return view('perusahaan.editProfilPerusahaan', [
        "title" => "Edit Profil"
    ]);
});

Route::get('/editAlamatKosongPerusahaan', function () {
    return view('perusahaan.editAlamatKosongPerusahaan', [
        "title" => "Edit Alamat"
    ]);
});

Route::get('/editGantiAlamatLain', function () {
    return view('perusahaan.editGantiAlamatLain', [
        "title" => "Ganti Alamat"
    ]);
});

Route::get('/editAlamatSudahAda', function () {
    return view('perusahaan.editAlamatSudahAda', [
        "title" => "Edit Alamat"
    ]);
});

Route::get('/dashboardProfilPerusahaan', function () {
    return view('perusahaan.dashboardProfilPerusahaan', [
        "title" => "Profil Perusahaan"
    ]);
});

Route::get('/tambahAlamatBaru', function () {
    return view('perusahaan.tambahAlamatBaru', [
        "title" => "Tambah Alamat"
    ]);

});


Route::get('/postinganLowonganSaya', function () {
    return view('perusahaan.postinganLowonganSaya',[
        "title" => "My Lowongan"
    ]);
});

Route::get('/detailPostinganLowongan', function () {
    return view('perusahaan.detailPostinganLowongan',[
        "title" => "Detail Lowongan"
    ]);
});

Route::get('/editPostinganLowonganSaya', function () {
    return view('perusahaan.editPostinganLowonganSaya',[
        "title" => "Edit Post Lowongan"
    ]);
});

// Route::get('/listOrangLamarLowonganSaya', function () {
//     return view('perusahaan.listOrangLamarLowonganSaya',[
//         "title" => "List Pelamar Lowongan"
//     ]);
// });

Route::get('/kandidatPelamar', function () {
    return view('perusahaan.listOrangLamarLowonganSaya',[
        "title" => "Kandidat Pelamar"
    ]);
});


Route::get('/koinSaya', function () {
    return view('perusahaan.pageKoinSaya',[
        "title" => "Koin Saya"
    ]);
});


// [Super Admin]
// Semua Komentar yang mempunyai label "[Super Admin]" adalah route dari tampilan Super Admin.

Route::get('/superAdminDashboard', function () {
    return view('superAdmin.dashboard.dashboard',[
        "title" => "FAQ'S"
    ]);
});

// [Super Admin] Auth
Route::get('/superAdminLogin', function () {
    return view('superAdmin.auth.login',[
        "title" => "FAQ'S"
    ]);
});

Route::get('/superAdminForgotPassword', function () {
    return view('superAdmin.auth.forgotPassword',[
        "title" => "FAQ'S"
    ]);
});

Route::get('/superAdminCodeVerify', function () {
    return view('superAdmin.auth.codeVerify',[
        "title" => "FAQ'S"
    ]);
});

Route::get('/superAdminNewPassword', function () {
    return view('superAdmin.auth.newPassword',[
        "title" => "FAQ'S"
    ]);
});

// [Super Admin] Profile

// [Super Admin] Data Pelamar
Route::get('/pelamarSuperAdmin', function () {
    return view('superAdmin.pelamar.kandidat.index',[
        "title" => "Pelamar"
    ]);
});
Route::get('/nonKandidatPelamarSuperAdmin', function () {
    return view('superAdmin.pelamar.nonKandidat.index',[
        "title" => "Pelamar"
    ]);
});
// [Super Admin] Peruahaan

// [Super Admin] Finance

// [Super Admin] Akun Freeze

// [Super Admin] Tips Kerja

// [Super Admin] Event


