@if ($errors->any()) 
<div class="mt-3">
    <div class="alert alert-danger">
        <button class="notif btn btn-close btn-sm" type="button" onclick="closeAlert()"></button>
        <ul>
            @foreach ($errors->all() as $item)
                <li>
                    {{ $item }}
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endif

{{-- 
@if ($errors->has('login'))
    <div class="mt-3" style="width: 50%;">
        <div class="alert alert-danger">
            <button class="btn btn-close btn-sm" aria-label="Close" onclick="closeAlert()"></button>
            {{ $errors->first('login') }}
        </div>
    </div>
@endif --}}


@if (session('register'))
    <div class="mt-3">
        <div class="alert alert-success mt-3">
            <button class="btn btn-close btn-sm" onclick="closeAlert()"></button>
            {{ session('register') }}
        </div>
    </div>
@endif
{{-- 
@if ($errors->has('failed'))
    <div class="mt-3" style="width: 50%;">
        <div class="alert alert-danger" ">
        <button class="btn btn-close btn-sm" onclick="closeAlert()"></button>
        {{ $errors->first('failed') }}
    </div>
</div>
 @endif --}}

            {{-- Memberi fungsi pada tombol close --}}
            <script>
                function closeAlert() {
                    var alert = document.querySelector('.alert');
                    alert.style.display = 'none';
                }
            </script>
