<?php

namespace App\Http\Controllers;

use App\Models\alamatPelamar;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\perusahaan;
use App\Models\pelamar;

class RegisController extends Controller
{
    public function index()
    {
        return view('auth/regis');
    }
    // REGISTRASI PELAMAR
    public function registrasi_pelamar(Request $request)
    {
        $ValidateData = $request->validate([
            'namaPelamar' => 'required',
            'email' => 'required|email:dns|unique:pelamars',
            'teleponPelamar' => 'required',
            'password' => 'required|min:8',
        ]);
        $ValidateData['password']  = bcrypt($ValidateData['password']);
        pelamar::create($ValidateData);

        alamatPelamar::create([
            'nama_pelamar' => $ValidateData['namaPelamar'],
            'detail' => 'Tidak ada',
        ]);

        return redirect()->back()->with('success', '');
    }

    // REGISTRASI PERUSAHAAN

    public function registrasi_perusahaan(Request $request)
    {
        $ValidateData = $request->validate([
            'namaPerusahaan' => 'required',
            'email' => 'required|email:dns|unique:perusahaans',
            'teleponPerusahaan' => 'required',
            'password' => 'required|min:8',
        ]);
        $ValidateData['password']  = bcrypt($ValidateData['password']);
        perusahaan::create($ValidateData);
            return redirect()->back()->with('success', '');

    }
}
