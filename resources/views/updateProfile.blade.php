<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/update_profile.css">
@extends("layout.main")
@section('content')
<body>
    <div class="gambar1"><img width="680" height="500" src="/image/cover.png"></div>
    <img class="model" src="/image/Image.png" alt="">

    <br>
    <br>
    <h6 style="color: gray; font-size: small;">Lombok Vacation</h6>
    <h3><span class="head">{{$title}}</span></h3>
    <div>
        <form method="POST" action="{{ url('update-profile') }}">
            @csrf
            <input style="height:50px; width:500px; margin-left: 75px;" type="text" id="pname" name="name" value="{{ auth()->user()->name }}">
            <br>
            <input style="height:50px; width:500px; margin-left: 75px;" type="text" id="email" name="email" value="{{ auth()->user()->email }}">
            <br>
            <input style="height:50px; width:500px; margin-left: 75px;" type="text" id="no_hp" name="no_hp" value="{{ auth()->user()->no_hp }}">
            <br>
            <button type="submit" class="btn" style="background-color: #F1A501; border-radius: 8px; font-weight: bold;">Edit</button>
        </form>
    </div>
@endsection
