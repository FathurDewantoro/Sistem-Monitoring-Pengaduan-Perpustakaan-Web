<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Pengguna::get();
        return view('user.table_user', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.tambah_user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'id_anggota' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'email' => 'required|email|unique:pengguna,email',
            'password' => 'required',
        ]);

        Pengguna::create([
            'nama_anggota' => $request->get('nama'),
            'id_anggota' => $request->get('id_anggota'),
            'no_telp' => $request->get('telepon'),
            'alamat' => $request->get('alamat'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);

        return redirect('/user')->with('info', 'Berhasil membuat akun baru');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Pengguna::where('no_anggota', $id)->first();
        return view('user.edit_user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $no_anggota)
    {
        // dd($request);
        $request->validate([
            'nama' => 'required',
            'id_anggota' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'email' => 'required',
        ]);

        $user = Pengguna::find($no_anggota);

        if ($request->password == null) {
            $user->update([
                'nama_anggota' => $request->get('nama'),
                'id_anggota' => $request->get('id_anggota'),
                'no_telp' => $request->get('telepon'),
                'alamat' => $request->get('alamat'),
                'email' => $request->get('email'),
            ]);
        } else {
            $user->update([
                'nama_anggota' => $request->get('nama'),
                'id_anggota' => $request->get('id_anggota'),
                'no_telp' => $request->get('telepon'),
                'alamat' => $request->get('alamat'),
                'email' => $request->get('email'),
                'password' => Hash::make($request->get('password')),
            ]);
        }

        return redirect('/user')->with('info', 'Berhasil membuat memperbarui akun');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $no_anggota)
    {
        $user = Pengguna::find($no_anggota);

        $user->delete();

        return redirect('/user')->with('info', 'Berhasil menghapus akun');
    }
}
