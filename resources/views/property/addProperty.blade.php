<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ABP PROJECT</title>
    <style>
        .Logo {
            position: absolute;
            width: 120px;
            left: -15px;
            top: -20px;
        }

        .head {
            color: #181E4B;
            position: relative;
            font-size: 35px;
            left: 75px;
            font-family: serif;
            font-weight: bold;
        }

        .btn:hover {
            color: #fff;
        }

        .btn {
            margin-left: 76px;
            margin-top: 30px;
            width: 90px;
            height: 40px;
        }

        .gambar1 {
            position: absolute;
            top: 0px;
            right: 0px;
        }

        .navbar-light .navbar-nav .nav-link.active {
            color: black;
            font-weight: bold;
            font-family: serif;
            margin-left: 35px;
            margin-top: 10px;
            z-index: 9;
            font-size: medium;
        }

        .navbar-light .navbar-nav .nav-link.active:hover {
            color: rgb(163, 159, 159);
            text-decoration: none;
        }

        h6 {
            margin-left: 80px;
            margin-top: 20px;
        }

        input[type=text],
        select {
            width: 100%;
            height: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-left: 70px;
        }

    </style>
</head>

<body>
    <img class="Logo" src="image/logo2revisi.png" alt="">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link active" href="{{ url('dashboard') }}">Dashboard</a>
                    <a class="nav-link active" href="{{ url('villa') }}">Villa</a>
                    <a class="nav-link active" href="{{ url('hotel') }}">Hotel</a>
                    <a class="nav-link active" href="{{ url('cottage') }}">Cottage</a>
                    <a class="nav-link active" href="{{ url('guest-house') }}">Guest House</a>

                </div>
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" href="{{ url('update-profile') }}"><i class="glyphicon glyphicon-user"></i><span style="font-weight:normal">&nbsp;{{ auth()->user()->name }}</span></a>

                </div>
            </div>
        </div>
        </div>
    </nav>
    <div class="gambar1"><img width="550" height="600" src="/image/Decore-property.png"></div>

    <h6 style="color: gray; font-size: small;">Lombok Vacation Property</h6>
    <h3><span class="head">Add Property</span></h3>
    <div>
        <form method="POST" action="{{ url('add-property') }}">
            @csrf
            <label style="margin-left: 75px; margin-top: 35px; font-size: small; color: #181E4B;" for="pname">Nama Property</label>
            <br>
            <input style="height:50px; width:500px; margin-left: 75px;" type="text" id="pname" name="name" placeholder="Masukkan nama property...">
            <br>
            <label style="margin-left: 75px; margin-top: 10px; font-size: small; color: #181E4B;" for="area">Pilih Area</label>
            <br>
            <select style="height:50px; width:500px; margin-left: 75px;" id="area" name="area">
                <option value="lombok barat">Lombok Barat</option>
                <option value="lombok utara">Lombok Utara</option>
                <option value="lombok timur">Lombok Timur</option>
                <option value="mataram">Kota Mataram</option>
                <option value="lombok tengah">Lombok Tengah</option>
                <option value="gili">Gili</option>
            </select>
            <br>
            <label style="margin-left: 75px; margin-top: 20px; font-size: small; color: #181E4B;" for="type">Pilih Type</label>
            <br>
            <select style="height:50px; width:500px; margin-left: 75px;" id="type" name="type">
                <option value="villa">Villa</option>
                <option value="hotel">Hotel</option>
                <option value="guest_house">Guest House</option>
                <option value="cottage">Cottage</option>
            </select>
            <br>
            <a href=""><button type="submit" class="btn" style="background-color: #F1A501; border-radius: 8px; font-weight: bold;">Tambah</button></a>
        </form>
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
