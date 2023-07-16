@extends('layout.template')
@section('page')
    {{-- Start Data --}}
    <div class="my-3 p-3 bg-body rounded shadow-sm">

        <div class="pb-3">
            <a href="/warga/create" class="btn btn-outline-success " data-bs-toggle="modal" data-bs-target="#tambahDataModal">+
                Tambah data</a>
        </div>
        <div class="table-responsive">
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
                    <?php
                    $i = $data->firstItem();
                    ?>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>
                                <a href="{{ url('warga/' . $item->nik . '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{ url('warga/' . $item->id . '') }}" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $data->links() }}
    {{-- End Data --}}

    @include('warga.create')
@endsection
