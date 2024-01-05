<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function checkLogin(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|exists:admin,email',
            'password' => 'required',
        ]);

        $user = Admin::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect('/login');
        }
        $request->session()->put('login', true);
        $request->session()->put('nama-admin', $user->nama_admin);
        $request->session()->flash('status', 'Selamat datang admin ' . $user->nama_admin);
        return redirect('/pengaduan');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('login');
        return redirect('/login');
    }
}
