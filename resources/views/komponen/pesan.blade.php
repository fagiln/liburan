{{-- Pesan error ketika ada kesalahan saat memasukkan field --}}
@if ($errors->any())
        <div class="alert alert-danger mt-3">
            <button class="notif btn btn-close btn-sm" type="button" onclick="closeAlert()"></button>
            <ul>
                @foreach ($errors->all() as $item)
                    <li>
                        {{ $item }}
                    </li>
                @endforeach
            </ul>
        </div>
@endif

@if (Session::has('login'))
    <div class="alert alert-success mt-3">
        <button class="notif btn btn-close btn-sm" type="button" onclick="closeAlert()"></button>

        {{ Session::get('login') }}

    </div>
@endif
{{-- Pesan berhasil ketika success menambahkan data --}}
@if (Session::has('success'))
    <div class="mt-3">
        <div class="alert alert-success">
            <button class="notif btn btn-close btn-sm" type="button" onclick="closeAlert()"></button>

            {{ Session::get('success') }}

        </div>
    </div>
@endif

{{-- Memberi fungsi pada tombol close --}}
<script>
    function closeAlert() {
        var alert = document.querySelector('.alert');
        alert.style.display = 'none';
    }
</script>
