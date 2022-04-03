<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/Dashboard.css">
@extends("layout.main")
@section('content')
    <div class="row">
        <h3><span class="title">Lombok Vacation</span></h3>
        <h3><span class="head">Dashboard</span></h3>
        <li class="navbar">
            <a class="nav-link" href="#"><img class="DashboardList" src="/image/dahsboard list.png" alt=""></a>
        </li>
        <li class="navbar">
            <a class="nav-link" href="#"><img class="DashboardList2" src="/image/dahsboard list2.png" alt=""></a>
        </li>
        <li class="navbar">
            <a class="nav-link" href="#"><img class="DashboardList3" src="/image/dahsboard list3.png" alt=""></a>
        </li>
        <li class="navbar">
            <a class="nav-link" href="#"><img class="DashboardList4" src="/image/dahsboard list4.png" alt=""></a>
        </li>
    </div>

    <img class="gambar1" src="/image/Decore.png" alt="">
    <img class="quotes" src="/image/Subheading.png" alt="">

    {{-- <div class="col-md-6" id="kol2">
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
                            <a class="nav-link" href="#">GuestHouse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div> --}}
@endsection
