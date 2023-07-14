@extends('layout.template')
@section('page')
   

    {{-- Start Data --}}
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        {{-- Form pencarian --}}
        {{-- <div class="pb-3">
            <form class="d-flex" action="" method="POST">
                <input class="form-control me-2" type="search" name="katakunci" value="" placeholder="Cari"
                    aria-label="Search">
                <button class="btn btn-primary" type="submit">Cari</button>
            </form>
        </div> --}}

        {{-- Tombol tambah data --}}
        <div class="pb-3">
            <a href="/warga/create" class="btn btn-outline-success " data-bs-toggle="modal"
                data-bs-target="#tambahDataModal">+ Tambah data</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-3">NIK</th>
                    <th class="col-md-4">Nama</th>
                    <th class="col-md-2">Alamat</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1234567891012132</td>
                    <td>Hannela Deyzy Annabelle</td>
                    <td>Bandung</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- End Data --}}

   @include('warga.create')
@endsection
