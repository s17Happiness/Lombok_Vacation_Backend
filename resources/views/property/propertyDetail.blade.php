@push('styles')
    <link rel="stylesheet" href={{ asset('css/Property_detail.css') }}>
@endpush
@extends("layout.main")
@section('content')
    <div class="row">
        {{-- <img class="Logo" src="./asset/logo2revisi.png" alt=""> --}}
        <h3><span class="title">Lombok Vacation Property Detail</span></h3>
        <h3><span class="head">{{ $property->property_name }}</span></h3>
        <h1><span class="content">Area : {{ $property->area }}</span></h1>
        <h1><span class="content2">Tipe : {{ $property->type }}</span></h1>
        <a href="{{ url('/property' . '/' . $id . '/add-unit') }}"><button type="submit" class="btn">Tambah</button></a>

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
                                <a href="{{ url('property/' . $id . '/update-unit' . '/' . $result->id) }}"><button type="button" class="btn1 btn-warning"><i class="fas fa-edit"></i></button></a>
                                <button type="submit" class="btn1 btn-danger"><i class="far fa-trash-alt"></i></button>
                                {{-- <a href="{{ url('property/' . $id . '/update-unit' . '/' . $result->id) }}"><button type="button" class="btn1 btn-success"><i class="fa-solid fa-plus"></i></button></a> --}}
                                <a href="#" id="tambahFacilities" data-toggle="modal" data-target="#tambahModal"><button type="button" class="btn1 btn-success"><i class="fa-solid fa-plus"></i></button></a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div>
        <select name="cars" id="cars">
            @foreach ($facilities as $key => $facility)
                <option value="{{ $facility->facility_name }}">{{ $facility->facility_name }}</option>
            @endforeach
        </select>
    </div>
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
@endsection
