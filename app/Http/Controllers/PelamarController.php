<?php

namespace App\Http\Controllers;

use App\Models\alamatPelamar;
use App\Models\pelamar;
use Illuminate\Support\Facades\Auth;

class PelamarController extends Controller
{
    public function show($id)
    {
        $pelamarData = pelamar::all();
        $pelamar = pelamar::find($id);
        $alamat = alamatPelamar::find($id);
        $title = 'Profil';
        return view('pelamar.ProfilPelamar', compact('pelamar', 'title', 'pelamarData', 'alamat'));
    }
}
