<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Warga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #222d32">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler"
                aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand fs-1" href="#">SiJotos</a>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url ('warga')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link active" href="#">FAQ</a>
                    </li>
                    <li>
                        <a class="nav-link active" href="{{ url('logout') }}">Logout</a>
                    </li>
                </ul>
                <form action="" class="d-flex" method="POST">

                    @if (Auth::check())
                        <div class="col-sm-3 d-flex justify-content-center align-items-center">
                            <p class="m-0 text-white">Admin {{ Auth::user()->username }}</p>
                        </div>
                    @endif

                    <input class="form-control me-2" type="search" placeholder="Masukkan kata kunci" value=""
                        aria-label="Search" autocomplete="off">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </form>

            </div>
        </div>
    </nav>
    <main class="container">

        @include('komponen.pesan')
        @yield('page')



    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
</body>

</html>
