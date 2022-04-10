<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="registrasi.css">
    <title>ABP PROJECT</title>
    <style>
        .model {
            position: absolute;
            width: 530px;
            left: 680px;
            top: 125px;
        }

        .Logo {
            position: absolute;
            width: 150px;
            left: -30px;
            top: -20px;
        }

        .head {
            color: #181E4B;
            position: relative;
            font-size: 50px;
            top: 130px;
            left: 130px;
        }

        .form-control {
            background-color: #FFFF;
            width: 347px;
            height: 50px;
            position: relative;
            top: 150px;
            left: 130px;
            border-radius: 8px;
        }

        .form-control::placeholder {
            color: #B0B0B0;
        }

        .btn:hover {
            color: #fff;
        }

        .btn {
            position: relative;
            left: 15px;
            top: 150px;
            width: 130px;
            height: 50px;
            background-color: #F1A501;
            color: white;
        }

        .sandi {
            position: relative;
            top: 200px;
            left: 300px;
            color: #029BC5;
            font-size: 13px;
            text-decoration: none;
        }

        .Daftar {
            position: relative;
            top: 145px;
            left: 300px;
            color: #B0B0B0;
            font-size: 13px;
            text-decoration: none;
        }

        .gambar1 {
            position: absolute;
            top: 0px;
            right: 0px;
        }

        .navbar-nav .nav-link {
            font-weight: bold;
        }

        .navbar-light .navbar-nav {
            margin-top: -500px;
            margin-left: 1100px;
            z-index: 9;
        }


    </style>
</head>

<body>
    <div class="row">
        <a href="{{ url('/') }}">
            <img class="Logo" src="/image/logo2revisi.png" alt="">
        </a>

        <h3><span class="head">Register</span></h3>
        <form method="POST" action="{{ url('register') }}">
            @csrf
            <div class="mb-4">
                <input type="text" class="form-control" placeholder="Name" name="name">
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" placeholder="Email" name="email">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" placeholder="No. HP" name="no_hp">
            </div>
            <div class="mb-4">
                <input type="password" class="form-control" id="myInput" placeholder="Password" name="password">
            </div>
            <div class="mb-4">
                <input type="password" class="form-control" id="myInput" placeholder="Password Confirmation" name="password_confirmation">
            </div>

            <a href="{{ url('login') }}" class="sandi">Login</a> <br><span class="Daftar">Sudah punya akun?</span>
            <button type="submit" class="btn">Daftar</button>
        </form>
    </div>

    <div class="col-md-6" id="kol2">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                {{-- <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                    </ul>
                </div> --}}
            </div>
        </nav>
        <div class="gambar1"><img width="680" height="500" src="/image/cover.png"></div>
        <img class="model" src="/image/Image.png" alt="">
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        function myFunction() {
            var x = document.getElementById("myInput")
            var y = document.getElementById("hide1")
            var z = document.getElementById("hide2")
            if (x.type == "password") {
                x.type = "text";
                y.style.display = "inline"
                z.style.display = "none"
            } else {
                x.type = "password";
                y.style.display = "none"
                z.style.display = "inline"
            }
        }
    </script>
</body>

</html>
