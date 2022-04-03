<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/List_hotel.css">
@extends("layout.main")
@section('content')
    <div class="row">
        <h3><span class="title">Lombok Vacation</span></h3>
        <h3><span class="head">{{$title}}</span></h3>
        <a href="{{ url('add-property') }}"><button type="submit" class="btn-tambah">Tambah</button></a>

        <div class="select">
            <h1><span class="show">Show</span></h1>
            <select name="format" id="format">
                <option selected disabled>10</option>
                <option value="#10">10</option>
                <option value="#20">20</option>
                <option value="#30">30</option>
                <option value="#40">40</option>
            </select>
            <h1><span class="entry">entries</span></h1>
        </div>
        <form>
            <div class="col-sm-3 mb-2">
                <input type="cari" class="form-control" id="myInput" placeholder="Cari">
            </div>
        </form>
    </div>

    <img class="gambar1" src="/image/Decore.png" alt="">

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
                            <a class="nav-link active" href="#">Hotel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cottage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">GuestHouse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
    </div>
    </nav>
    </div> --}}

    <div class="header_fixed">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Area</th>
                    <th>Type</th>
                    <th>Tanggal dibuat</th>
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
                        <td>{{ $result->created_at }}</td>
                        <td>Detail, edit</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
