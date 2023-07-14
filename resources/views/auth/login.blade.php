<!DOCTYPE html>
<html style="height: 100%;">

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body style="background-color: #222d32; height: 100%; ">

    <div class="global-container" style="height:100%; flex-direction: column;   display: flex; align-items: center; justify-content: center;">
        <div class="mt-4 text-sm text-center">
            <h1 class="mb-5" style="color: white; font-size: 70px;">L O G I N</h1>
        </div>
       
        @include('komponen.pesanAuth')
    <div class="form p-5" style="background-color: #172024;width: 30%; border-radius: 10px; ">

        <form action="{{route ('login')}}" method="post">
            @csrf

            <div class="mb-3 mr-3">
                <label class="form-label " style="color: white;">Email</label>
                <input class="form-control form-control-lg" type="email" name="email" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <label class="form-label" style=" color: white;">Password</label>
                <input class="form-control form-control-lg" type="password" name="password" placeholder="Password" required autocomplete="new-password">
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-lg mt-3">Login</button>
            </div>
            <div class="d-flex justify-content-center mt-3 " style=" width: 100%; color: white;">
                <p>Tidak punya akun <a href="/register">Register</a> ?</p>
            </div>
        </form>
    </div>
    </div>

</body>

</html>