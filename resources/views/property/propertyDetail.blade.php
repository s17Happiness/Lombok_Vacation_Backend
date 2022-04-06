@push('styles')
   <link rel="stylesheet" href={{asset('css/Property_detail.css')}}>
@endpush
@extends("layout.main")
@section('content')
    <div class="row">
        <img class="Logo" src="./asset/logo2revisi.png" alt=""> 
        <h3><span class="title">Lombok Vacation Property Detail</span></h3>
        <h3><span class="head">{{ $property->property_name }}</span></h3>
        <h1><span class="content">Area : {{ $property->area }}</span></h1>
        <h1><span class="content2">Tipe : {{ $property->type }}</span></h1>
        <a href="{{ url('/property' . '/' . $id . '/add-unit') }}"><button type="submit" class="btn">Tambah</button></a>
        <!-- <h1><span class="show">Show</span></h1> -->
        <!-- <h1><span class="entry">entries</span></h1> -->

        <form>
            <div class="mb-2">
                <input type="cari" class="form-control" id="myInput" placeholder="Cari">
            </div>
        </form>
    </div>
    <img class="gambar1" src="/image/Decore.png" alt="">
    <div class="header_fixed">
        <table>
            <thead>
                <tr>
                    <th>Unit Name</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Total</th>
                    <th>Harga</th>
                    <th>Tgl Dibuat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $key => $result)
                    <tr>
                        <td>{{ $result->unit_name }}</td>
                        <td>{{ $result->unit_picture }}</td>
                        <td>{{ $result->unit_description }}</td>
                        <td>{{ $result->total_unit }}</td>
                        <td>{{ $result->price }}</td>
                        <td>{{ $result->created_at }}</td>
                        <td>
                            <form action="{{ url('property/' . $id . '/update-unit' . '/' . $result->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <a href="{{ url('property/' . $id . '/update-unit' . '/' . $result->id) }}"><button type="button" class="btn1 btn-success"><i class="fas fa-edit"></i></button></a>
                                <button type="submit" class="btn1 btn-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
