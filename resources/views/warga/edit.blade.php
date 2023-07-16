 {{-- Edit Data Modal --}}
 {{-- <div class="modal fade" id="editDataModal" tabindex="-1" aria-labelledby="editDataModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-tittle" id="editDataModalLabel">Edit Data</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

             </div>
             <div class="modal-body"> --}}

 {{-- Start Form --}}
 @extends('layout.template')
 @section('page')
     <h3 class="text mt-3">Edit Data</h3>
     <form action="{{ url('warga/'.$data->nik) }}" method="POST">
         @csrf
         @method('PUT')
         <div class="my-3 p-3 bg-body rounded shadow-sm">

             <div class="my-3 p-3">
                 <div class="mb-3 row">
                     <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                     <div class="col-sm-10">
                         {{ $data->nik }}
                     </div>
                 </div>
                 <div class="mb-3 row">
                     <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                     <div class="col-sm-10">
                         <input tabindex="2" type="text" class="form-control" name="nama"
                             value="{{ $data->nama }}" id="nama" autocomplete="off">
                     </div>
                 </div>
                 <div class="mb-3 row">
                     <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                     <div class="col-sm-10">
                         <input tabindex="3" type="text" class="form-control" name="alamat"
                             value="{{ $data->alamat }}" id="alamat" autocomplete="off">
                     </div>
                 </div>
                 <div class="mb-3 row">
                     <label class="col-sm-2 col-form-label"></label>
                     <div class="col-sm-10 d-flex justify-content-between">
                         <button type="submit" class="btn btn-primary">Simpan</button>
                         <a href="{{url('warga')}}" type="button" class="btn btn-secondary">Kembali</a>
                     </div>
                 </div>
             </div>
         </div>
     </form>
     {{-- End Form  --}}
     {{-- </div>
             <div class="modal-footer">
                 <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="Cmodal">Tutup</button>

             </div>
         </div>
     </div>
 </div> --}}
 @endsection
