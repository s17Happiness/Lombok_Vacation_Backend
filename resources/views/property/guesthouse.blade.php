<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/List_guesthouse.css">
    <title>ABP PROJECT</title>
</head>

<body>
    <div class="row">
        <img class="Logo" src="image/logo2revisi.png" alt="">
        <h3><span class="title">Lombok Vacation Guest House List</span></h3>
        <h3><span class="head">Guest House List</span></h3>
        <a href=""><button type="submit" class="btn">Tambah</button></a>
        <h1><span class="show">Show</span></h1>
        <h1><span class="entry">entries</span></h1>

        <form>
            <div class="mb-2">
                <input type="cari" class="form-control" id="myInput" placeholder="Cari">
            </div>
        </form>

        <div class="select">
            <select name="format" id="format">
                <option selected disabled>10</option>
                <option value="#10">10</option>
                <option value="#20">20</option>
                <option value="#30">30</option>
                <option value="#40">40</option>
            </select>
        </div>
    </div>

    <img class="gambar1" src="/image/Decore.png" alt="">

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
                            <a class="nav-link" aria-current="page" href="#">Villa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hotel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cottage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">GuestHouse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
    </div>
    </nav>
    </div>

    <div class="header_fixed">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Area</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $key => $result)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $result->property_name }}</td>
                        <td>{{ $result->area }}</td>
                        <td>{{ $result->type }}</td>
                        <td>Detail, edit</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
