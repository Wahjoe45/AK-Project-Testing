<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // LOGIN NON USER
    public function index(){
        return view('auth/login');
    }
    public function login(Request $request):RedirectResponse
    {
        // $credentials = $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);
        // $credentials = $request->only('email', 'password');


        if (Auth::guard('pelamar')->attempt(['email'=>$request->email, 'password'=>$request->password])) {
            $pelamar = Auth::guard('pelamar')->user()->id;
            return redirect()->route('beranda.view', ['id' => $pelamar]);
        }elseif (Auth::guard('perusahaan')->attempt(['email'=>$request->email, 'password'=>$request->password])) {
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'email' => "error",
            'password' => "error",
        ])->onlyInput('email');
    }

}
