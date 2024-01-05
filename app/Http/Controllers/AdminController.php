<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = Admin::get();
        return view('admin.table_admin', compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah_admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_admin' => 'required',
            'email' => 'required|email|unique:admin,email',
            'password' => 'required',
        ]);

        $admin = new Admin([
            'nama_admin' => $request->get('nama_admin'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);

        $admin->save();

        return redirect('/admin')->with('info', 'Admin berhasil ditambahkan');
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
    public function edit($no_admin)
    {
        $admin = Admin::find($no_admin);

        if (!$admin) {
            return redirect('/admin')->with('info', 'Admin tidak ditemukan');
        }

        return view('admin.edit_admin', ['admin' => $admin]); // Gantilah 'admin.edit' sesuai dengan nama view Anda
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $no_admin)
    {
        $request->validate([
            'nama_admin' => 'required',
            'email' => 'required|email|unique:admin,email,' . $no_admin . ',no_admin',

        ]);

        $admin = Admin::find($no_admin);

        if (!$admin) {
            return redirect('/admin')->with('info', 'Admin tidak ditemukan');
        }

        if ($request->password == null){
            $admin->update([
                'nama_admin' => $request->get('nama_admin'),
                'email' => $request->get('email'),
            ]);
        }else{
            $admin->update([
                'nama_admin' => $request->get('nama_admin'),
                'email' => $request->get('email'),
                'password' => Hash::make($request->get('password')),
            ]);
        }

        return redirect('/admin')->with('info', 'Admin berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $no_admin)
    {
        $admin = Admin::find($no_admin);

        if (!$admin) {
            return redirect('/admin')->with('info', 'Admin tidak ditemukan');
        }

        $admin->delete();

        return redirect('/admin')->with('info', 'Admin berhasil dihapus');
    }
}
