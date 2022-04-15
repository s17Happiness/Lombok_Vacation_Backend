@push('styles')
    <link rel="stylesheet" href={{ asset('css/Property_detail.css') }}>
@endpush
@extends("layout.main")
@section('content')
    <div class="section-header">
        {{-- <img class="Logo" src="./asset/logo2revisi.png" alt=""> --}}
        <h3><span class="title">Lombok Vacation Property Detail</span></h3>
        <h3><span class="head">{{ $property->property_name }}</span></h3>
        <h1><span class="content">Area : {{ $property->area }}</span></h1>
        <h1><span class="content2">Tipe : {{ $property->type }}</span></h1>
        <a href="{{ url('/property' . '/' . $id . '/add-unit') }}">
            <button type="submit" class="btn-tambah">Tambah</button>
        </a>
        <center>
            <div class="section-body" style="width:90%;">
                <div class="table-responsive">
                    <table id="myTable">
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
                                    <td><img width="100" src="{{ asset('assets/images/unit/' . $result->unit_picture) }}" alt="test"></td>
                                    <td>{{ $result->unit_description }}</td>
                                    <td>{{ $result->total_unit }}</td>
                                    <td>{{ $result->price }}</td>
                                    <td>{{ $result->created_at }}</td>
                                    <td>
                                        <form action="{{ url('property/' . $id . '/update-unit' . '/' . $result->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{ url('property/' . $id . '/update-unit' . '/' . $result->id) }}"><button type="button" class="btn1 btn-warning"><i class="fas fa-edit"></i></button></a>
                                            <button type="submit" class="btn1 btn-danger"><i class="far fa-trash-alt"></i></button>
                                            {{-- <a href="{{ url('property/' . $id . '/update-unit' . '/' . $result->id) }}"><button type="button" class="btn1 btn-success"><i class="fa-solid fa-plus"></i></button></a> --}}
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </center>
    <img class="gambar1" src="/image/Decore.png" alt="">
    @push('script')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
    @endpush
@endsection
