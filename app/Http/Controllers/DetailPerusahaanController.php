<?php

namespace App\Http\Controllers;

use App\Models\DetailPerusahaan;
use App\Models\perusahaan;
use Illuminate\Http\Request;

class DetailPerusahaanController extends Controller
{
    public function index()
    {
        $detailPerusahaan = DetailPerusahaan::all();

        $perusahaan = perusahaan::all();

        return view('admin.perusahaan.management.index', [
            'detailPerusahaan' => $detailPerusahaan,
            'perusahaan' => $perusahaan,
            'title' => 'Index'
        ]);
    }

    public function detail($id)
    {
        $detailPerusahaan = DetailPerusahaan::findOrFail($id);

        $perusahaan = perusahaan::all();

        return view('admin.perusahaan.management.detail', [
            'detailPerusahaan' => $detailPerusahaan,
            'perusahaan' => $perusahaan,
            'title' => 'Detail Perusahaan'
        ]);
    }

    public function destroy($id)
    {
        $perusahaan = perusahaan::findOrFail($id);

        $perusahaan->delete();

        return redirect()->back()->with(['pesan' => 'Data Perusahaan Telah Dihapus!']);
    }
}
