<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|exists:pengguna,email',
            'password' => 'required',
        ]);

        $user = Pengguna::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Bad Creds',
            ], 401);
        }

        return response()->json($user);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:pengguna,email',
            'telepon' => 'required',
            'alamat' => 'required',
            'id_anggota' => 'required',
            'password' => 'required'
        ]);

        Pengguna::create([
            'nama_anggota' => $request->nama,
            'no_telp' => $request->telepon,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'id_anggota' => $request->id_anggota,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'message' => 'Akun berhasil dibuat.'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dataUser = Pengguna::where('no_anggota', $id)->first();
        return response()->json($dataUser);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
