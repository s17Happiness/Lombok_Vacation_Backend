{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
@push('styles')
    <link rel="stylesheet" href={{ asset('css/update_unit.css') }}>
@endpush
{{-- <link rel="stylesheet" href="/css/update_unit.css"> --}}
@extends("layout.main")
@section('content')
    <div class="gambar1"><img width="550" height="550" src="/image/Decore-property.png"></div>

    <h6 style="color: gray; font-size: small;">Lombok Vacation Property Unit</h6>
    <h3><span class="head">{{ $title }}</span></h3>
    <a href="#" id="tambahFacilities" data-toggle="modal" data-target="#tambahModal"><button type="button" class="btn1 btn-success" style="margin-left:70px">Tambah Unit Facility</button></a>

    <div>
        <form action="{{ url('property/' . $id . '/update-unit' . '/' . $unit_id) }}" method="POST">
            @csrf
            <label style="margin-left: 75px; margin-top: 5px; font-size: small; color: #181E4B;" for="uname">Nama Unit</label>
            <br>
            <input style="height:40px; width:500px; margin-left: 75px;" type="text" id="uname" name="name" value="{{ $unit->unit_name }}">
            <br>
            <label style="margin-left: 75px; margin-top: 0px; font-size: small; color: #181E4B;" for="tunit">Jumlah Unit</label>
            <br>
            <input style="height:40px; width:500px; margin-left: 75px;" type="text" id="tunit" name="total_unit" value="{{ $unit->total_unit }}">
            <br>
            <label style="margin-left: 75px; margin-top: 0px; font-size: small; color: #181E4B;" for="price">Harga</label>
            <br>
            <input style="height:40px; width:500px; margin-left: 75px;" type="text" id="price" name="price" value="{{ $unit->price }}">
            <br>
            <label style="margin-left: 75px; margin-top: 0px; font-size: small; color: #181E4B;" for="price">Deskripsi Unit</label>
            <br>
            <input style="height:40px; width:500px; margin-left: 75px;" type="text" id="desc" name="desc" value="{{ $unit->unit_description }}">
            <br>
            <label style="margin-left: 75px; margin-top: 0px; font-size: small; color: #181E4B;" for="pict">Foto Unit</label>
            <input style="margin-left: 75px; margin-top: 5px;" type="file" id="myFile" name="filename">
            <button type="submit" class="btn" style="background-color: #F1A501; border-radius: 8px; font-weight: bold;margin-top:50px">Edit</button>
        </form>
    </div>

    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Fasilitas</h5>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ url('property/' . $id . '/' . $unit_id . '/add-facilities') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="fasilitas-tersedia" class="col-form-label">Fasilitas Tersedia:</label>
                            <br>
                            @foreach ($unitHasFacilities as $key => $facility)
                                <label for="fasilitas-tersedia" class="col-form-label">{{ $facility->facility->facility_name }}</label>
                            @endforeach
                        </div>
                        <div class="form-group row mb-3" style="height: 70px">
                            <label for="tambah-fasilitas" class="col-sm-1 col-form-label">Tambah Fasilitas:</label>

                            <div class="col-sm-8">
                                <select class="form-select" name="facility" id="cars">
                                    @foreach ($facilities as $key => $facility)
                                        <option value="{{ $facility->id }}">{{ $facility->facility_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
