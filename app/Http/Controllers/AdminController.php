<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Ambil data login dari form
        $credentials = $request->only('email', 'password');

        // Coba login
        if (Auth::attempt($credentials)) {
            $user = Auth::user(); // Ambil data user yang sudah login

            // Cek role user dan redirect sesuai role
            if ($user->role === 'admin') {
                return redirect()->route('dashboard_admin');
            } elseif ($user->role === 'petugas') {
                return redirect()->route('dashboard_ptgs');
            } else {
                // Jika role tidak sesuai, logout dan redirect kembali
                Auth::logout();
                return redirect()->route('/')->with('failed', 'Role tidak dikenali.');
            }
        } else {
            // Jika login gagal
            return redirect()->route('/')->with('failed', 'Email atau password salah.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('/')->with('logout', 'Berhasil Logout');
    }
}
