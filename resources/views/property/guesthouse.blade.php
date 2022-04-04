<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/List_guesthouse.css">
@extends("layout.main")
@section('content')
    <div class="row">
        <h3><span class="title">Lombok Vacation Guest House List</span></h3>
        <h3><span class="head">{{ $title }}</span></h3>
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
                        <td>
                            <form action="{{ url('property/' . $key + 1) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <a href=""><button type="button" class="btn1 btn-warning"><i class="fa-solid fa-info"></i></button></a>
                                <a href="{{ url('update-property/' . $key + 1) }}"><button type="button" class="btn1 btn-success"><i class="fas fa-edit"></i></button></a>
                                <button type="submit" class="btn1 btn-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
