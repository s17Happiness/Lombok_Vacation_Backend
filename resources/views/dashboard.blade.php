<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/Dashboard.css">
@extends("layout.main")
@section('content')
    <div class="row">
        <h3><span class="title">Lombok Vacation</span></h3>
        <h3><span class="head">Dashboard</span></h3>
        <li class="navbar">
            <a class="nav-link" href="{{ url('villa') }}"><img class="DashboardList" src="/image/dahsboard list.png" alt=""></a>
        </li>
        <li class="navbar">
            <a class="nav-link" href="{{ url('hotel') }}"><img class="DashboardList2" src="/image/dahsboard list2.png" alt=""></a>
        </li>
        <li class="navbar">
            <a class="nav-link" href="{{ url('cottage') }}"><img class="DashboardList3" src="/image/dahsboard list3.png" alt=""></a>
        </li>
        <li class="navbar">
            <a class="nav-link" href="{{ url('guest-house') }}"><img class="DashboardList4" src="/image/dahsboard list4.png" alt=""></a>
        </li>
    </div>

    <img class="gambar1" src="/image/Decore.png" alt="">
    <img class="quotes" src="/image/Subheading.png" alt="">
    </div>
@endsection
