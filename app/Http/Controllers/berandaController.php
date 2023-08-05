<?php

namespace App\Http\Controllers;

use App\Models\alamatPelamar;
use App\Models\pelamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class berandaController extends Controller
{
    public function view($id)
    {
        $pelamar = pelamar::find($id);
        $alamat = alamatPelamar::find($id);
        $title = "Beranda";
        return view('pelamar.berandaPelamar', compact('title', 'pelamar', 'alamat'));
    }
}
