<link rel="stylesheet" href="/css/add_property.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

@extends("layout.main")
@section('content')
    <div class="gambar1"><img width="550" height="600" src="/image/Decore-property.png"></div>
    <h6 style="color: gray; font-size: small;">Lombok Vacation Property</h6>
    <h3><span class="head">{{ $title }}</span></h3>
    <div style='margin-top: 30px'>
        <form method="POST" action="{{ url('add-property') }}">
            @csrf
            <label style="margin-left: 75px; margin-top: 35px; font-size: small; color: #181E4B;" for="pname">Nama Property</label>
            <br>
            <input style="height:50px; width:500px; margin-left: 75px;" type="text" id="pname" name="name" placeholder="Masukkan nama property...">
            <br>
            <label style="margin-left: 75px; margin-top: 10px; font-size: small; color: #181E4B;" for="area">Pilih Area</label>
            <br>
            <select style="height:50px; width:500px; margin-left: 75px;" id="area" name="area">
                <option value="lombok barat">Lombok Barat</option>
                <option value="lombok utara">Lombok Utara</option>
                <option value="lombok timur">Lombok Timur</option>
                <option value="mataram">Kota Mataram</option>
                <option value="lombok tengah">Lombok Tengah</option>
                <option value="gili">Gili</option>
            </select>
            <br>
            <label style="margin-left: 75px; margin-top: 20px; font-size: small; color: #181E4B;" for="type">Pilih Type</label>
            <br>
            <select style="height:50px; width:500px; margin-left: 75px;" id="type" name="type">
                <option value="villa">Villa</option>
                <option value="hotel">Hotel</option>
                <option value="guest_house">Guest House</option>
                <option value="cottage">Cottage</option>
            </select>
            <br>
            <a href=""><button type="submit" class="btn" style="background-color: #F1A501; border-radius: 8px; font-weight: bold;">Tambah</button></a>
        </form>
    </div>
@endsection
