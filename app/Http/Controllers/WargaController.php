<?php

namespace App\Http\Controllers;

use App\Models\warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('warga.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nik', $request->nik);
        Session::flash('nama', $request->nama);
        Session::flash('alamat', $request->alamat);

        $request->validate([
            'nik'=>'required|numeric|regex:/^\d{16}$/|unique:warga,nik',
            'nama'=>'required',
            'alamat'=>'required'
        ],[
            'nik.required'=>'NIK harus di isi',
            'nik.numeric'=>'NIM harus angka',
            'nik.regex'=>'NIM harus 16 digit',
            'nik.unique'=>'NIM sudah terdaftar',
            'nama.required'=>'Nama harus di isi',
            // 'nama.alpha'=>'Nama harus berupa huruf',
            'alamat.required'=>'Alamat harus di isi'

        ]);
        $data=[
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'alamat'=>$request->alamat
        ];
        warga::create($data);
        return redirect()->to('warga')->with('success', 'Tambah Data Berhasil');
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
