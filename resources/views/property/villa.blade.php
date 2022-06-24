@push('styles')
   <link rel="stylesheet" href={{asset('css/List_villa.css')}}>
@endpush
@extends("layout.main")
@section('content')
    <div class="section-header">
        <h1><span class="title">Lombok Vacation</span></h1>
        <h2><span class="head">{{ $title }}</span></h2>
        <a href="{{ url('add-property') }}"><button type="submit" class="btn-tambah">Tambah</button></a>
        {{-- <button class="btn-tambah" href="{{ url('add-property') }}" type="submit">Tambah</button> --}}
        
    </div>

    <img class="gambar1" src="image/Decore.png" alt="">

    <center>
        <br>
        <div class="section-body" style="width:90%;">
            <div class="table-responsive">
                <table id='myTable'>
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
                                    <form action="{{ url('property/' . $result->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ url('property/' . $result->id) }}"><button type="button" class="btn1 btn-warning"><i class="fa-solid fa-info"></i></button></a>
                                        <a href="{{ url('update-property/' . $result->id) }}"><button type="button" class="btn1 btn-success"><i class="fas fa-edit"></i></button></a>
                                        <button type="submit" class="btn1 btn-danger"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </center>
@push('script')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endpush
