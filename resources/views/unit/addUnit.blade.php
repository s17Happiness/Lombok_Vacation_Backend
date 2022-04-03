<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/add_unit.css">
@extends("layout.main")
@section('content')

    <div class="gambar1"><img width="550" height="550" src="/image/Decore-property.png"></div>

    <h6 style="color: gray; font-size: small;">Lombok Vacation Property Unit</h6>
    <h3><span class="head">{{$title}}</span></h3>
    <div>
        <form action="{{ url('property/' . $id . '/add-unit') }}" method="POST">
            @csrf
            <label style="margin-left: 75px; margin-top: 5px; font-size: small; color: #181E4B;" for="uname">Nama Unit</label>
            <br>
            <input style="height:40px; width:500px; margin-left: 75px;" type="text" id="uname" name="name" placeholder="Masukkan nama unit...">
            <br>
            <label style="margin-left: 75px; margin-top: 0px; font-size: small; color: #181E4B;" for="tunit">Jumlah Unit</label>
            <br>
            <input style="height:40px; width:500px; margin-left: 75px;" type="text" id="tunit" name="total_unit" placeholder="Masukkan jumlah unit...">
            <br>
            <label style="margin-left: 75px; margin-top: 0px; font-size: small; color: #181E4B;" for="price">Harga</label>
            <br>
            <input style="height:40px; width:500px; margin-left: 75px;" type="text" id="price" name="price" placeholder="Masukkan harga unit...">
            <br>
            <label style="margin-left: 75px; margin-top: 0px; font-size: small; color: #181E4B;" for="price">Deskripsi Unit</label>
            <br>
            <input style="height:40px; width:500px; margin-left: 75px;" type="text" id="desc" name="desc" placeholder="Tambahkan deskripsi unit...">
            <br>
            <label style="margin-left: 75px; margin-top: 0px; font-size: small; color: #181E4B;" for="pict">Foto Unit</label>
            <input style="margin-left: 75px; margin-top: 5px;" type="file" id="myFile" name="filename">
            <button type="submit" class="btn" style="background-color: #F1A501; border-radius: 8px; font-weight: bold;">Tambah</button>
        </form>
    </div>
@endsection