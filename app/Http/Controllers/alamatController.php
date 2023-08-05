<?php

namespace App\Http\Controllers;

use App\Models\alamatPelamar;
use App\Models\pelamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class alamatController extends Controller
{

    public function editAlamat($id)
    {
        $title = 'Alamat';
        $pelamar = pelamar::find($id);
        $alamat = alamatPelamar::find($id);
        return view('pelamar.alamat', compact('pelamar', 'alamat', 'title'));
    }

    public function update(Request $request, $id)
    {
        $alamat = alamatPelamar::find($id);
        $alamat->nama_pelamar = $request->input('nama_pelamar');
        $alamat->label  = $request->input('labelAlamat');
        $alamat->alamat = $request->input('alamatLengkap');
        $alamat->kecamatan = $request->input('kecamatan');
        $alamat->kota = $request->input('kota');
        $alamat->provinsi = $request->input('provinsi');
        $alamat->detail = $request->input('detail');
        $alamat->kode = $request->input('kode');

        $alamat->update();
        return redirect()->route('alamat.edit', $alamat->id)
            ->with('success', 'Alamat telah diupdate!');
    }
}
