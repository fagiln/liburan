 {{-- Create Data Modal --}}
 <div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="tambahDataModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-tittle" id="tambahDataModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">

                {{-- Start Form --}}
                <form action="{{ url('warga') }}" method="POST">
                    @csrf

                    <div class="my-3 p-3">
                        <div class="mb-3 row">
                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input tabindex="1" type="text" class="form-control" name="nik" value="{{Session::get('nik')}}" id="nik"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input tabindex="2" type="text" class="form-control" name="nama" value="{{Session::get('nama')}}" id="nama"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input tabindex="3" type="text" class="form-control" name="alamat" value="{{Session::get('alamat')}}" id="alamat"
                                    autocomplete="off">
                            </div>
                        </div>

                    </div>
                    {{-- End Form  --}}
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="Cmodal">Tutup</button>
                </form>

            </div>
        </div>
    </div>
</div>