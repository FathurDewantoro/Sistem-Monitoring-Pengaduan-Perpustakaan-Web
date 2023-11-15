<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengaduanController extends Controller
{
    public function getTransaksiByIdUser($id)
    {
        $pengaduan = Pengaduan::where('no_anggota', $id)->get();
        return response()->json($pengaduan);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_pengaduan' => 'required',
            'no_anggota' => 'required',
            'nama_anggota' => 'required',
            'aduan' => 'required',
            'id_anggota' => 'required',
            'bukti_aduan' => 'required'
        ]);

        $file = $request->file("bukti_aduan");
        $foto_aduan = $file->hashName();
        Storage::put("public/images/bukti_aduan/", $file);

        Pengaduan::create([
            'jenis_pengaduan' => $request->jenis_pengaduan,
            'no_anggota' => $request->no_anggota,
            'nama_anggota' => $request->nama_anggota,
            'tgl_pengaduan' => date(now()),
            'aduan' => $request->aduan,
            'id_anggota' => $request->id_anggota,
            'status_aduan' => 'Menunggu Konfirmasi Petugas',
            'bukti_aduan' => $foto_aduan,
        ]);

        return response()->json([
            'berhasil' => 'Pengaduan Berhasil Dikirim, Terimakasih.'
        ]);
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
