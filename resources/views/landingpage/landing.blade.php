<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="landingpage.css">
    <title>ABP PROJECT</title>
    <style>
        .Logo {
            position: absolute;
            width: 150px;
            left: -30px;
            top: -20px;
        }

        .title {
            color: #df6951;
            position: relative;
            font-size: 11px;
            top: 120px;
            left: 134px;
            font-weight: bold;
        }

        .head {
            color: #181e4b;
            position: relative;
            font-size: 50px;
            top: 130px;
            left: 130px;
        }

        .deskripsi {
            color: #5e6282;
            position: relative;
            font-size: 16px;
            top: 150px;
            left: 130px;
        }

        .deskripsi2 {
            color: #5e6282;
            position: relative;
            font-size: 16px;
            top: 130px;
            left: 130px;
        }

        .form-control {
            background-color: #ffff;
            width: 347px;
            height: 50px;
            position: relative;
            top: 150px;
            left: 130px;
            border-radius: 8px;
        }

        .btn {
            position: relative;
            left: 130px;
            top: 170px;
            width: 130px;
            height: 50px;
            background-color: #f1a501;
            color: white;
        }

        .sandi {
            position: relative;
            top: 200px;
            left: 300px;
            color: #029bc5;
            font-size: 13px;
            text-decoration: none;
        }

        .Daftar {
            position: relative;
            top: 145px;
            left: 300px;
            color: #b0b0b0;
            font-size: 13px;
            text-decoration: none;
        }

        .gambar1 {
            position: absolute;
            top: -100px;
            right: -35px;
            width: 700px;
        }

        .model {
            position: absolute;
            width: 530px;
            left: 680px;
            top: 125px;
        }

        .navbar-nav .nav-link {
            font-weight: bold;
        }

        .navbar-light .navbar-nav {
            margin-top: -730px;
            margin-left: 1080px;
            z-index: 9;
        }

    </style>
</head>

<body>
    <div class="row">
        <a href="{{ url('/') }}">
            <img class="Logo" src="/image/logo2revisi.png" alt="">
        </a>
        <h3><span class="title">PROPERTY TERBAIK DI LOMBOK</span></h3>
        <h3><span class="head">Lombok</span><br><span class="head">Vacation</span><br><span class="head">Property</span>
        </h3>
        <form>
            <div class="mb-4">
                <h1><span class="deskripsi">Lombok merupakan kota yang indah terletak di daerah</span><br><span class="deskripsi2">Nusa Tenggara Barat Indonesia</span></h1>
                <a href=""><button type="submit" class="btn">Find Out More</button></a>
        </form>
    </div>

    <div class="col-md-6" id="kol2">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('register') }}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('login') }}">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <img class="gambar1" src="/image/cover.png" alt="">
        <img class="model" src="/image/Image.png" alt="">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
