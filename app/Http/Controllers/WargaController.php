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
        $data = warga::orderBy('updated_at', 'desc')->paginate(5);
        return view('warga.index')->with('data', $data);
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
        // agar ketika salah mengisi filed, isi field tidak hilang
        Session::flash('nik', $request->nik);
        Session::flash('nama', $request->nama);
        Session::flash('alamat', $request->alamat);

        // memberikan validasi
        $request->validate(
            [
                'nik' => 'required|numeric|regex:/^\d{16}$/|unique:warga,nik',
                'nama' => 'required',
                'alamat' => 'required',
            ],
            [
                'nik.required' => 'NIK harus di isi',
                'nik.numeric' => 'NIM harus angka',
                'nik.regex' => 'NIM harus 16 digit',
                'nik.unique' => 'NIM sudah terdaftar',
                'nama.required' => 'Nama harus di isi',
                // 'nama.alpha'=>'Nama harus berupa huruf',
                'alamat.required' => 'Alamat harus di isi',
            ],
        );

        // melakukan request POST create data
        $data = [
            'nik' => $request->nik, //untuk tabel nik di isi oleh field dengan nama nik
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ];
        warga::create($data);
        return redirect()
            ->to('warga')
            ->with('success', 'Berhasil melakukan CREATE data');
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
        $data = warga::where('nik', $id)->first();
        return view('warga.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama' => 'required',
                'alamat' => 'required',
            ],
            [
                'nama.required' => 'Nama harus di isi',
                // 'nama.alpha'=>'Nama harus berupa huruf',
                'alamat.required' => 'Alamat harus di isi',
            ],
        );

        $data = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ];
        warga::where('nik', $id)->update($data);
        return redirect('warga')->with('success', 'Berhasil melakukan UPDATE data pada '.$request->nama);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
