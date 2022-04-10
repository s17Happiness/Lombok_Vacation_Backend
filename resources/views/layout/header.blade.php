<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>ABP PROJECT</title>
    @stack('styles')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <img class="Logo" src="{{asset('image/logo2revisi.png')}}" alt="">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="navbar-nav mx-auto">
                            <a class="nav-link active" href="{{ url('dashboard') }}">Dashboard</a>
                            <a class="nav-link active" href="{{ url('villa') }}">Villa</a>
                            <a class="nav-link active" href="{{ url('hotel') }}">Hotel</a>
                            <a class="nav-link active" href="{{ url('cottage') }}">Cottage</a>
                            <a class="nav-link active" href="{{ url('guest-house') }}">Guest House</a>

                        </div>
                        <div class="navbar-nav ml-auto">
                            <a class="nav-link active" href="{{ url('update-profile') }}"><i class="fa-solid fa-user"></i><span style="font-weight:normal">&nbsp;{{ auth()->user()->name }}</span></a>
                        </div>
                    </div>
                </div>
            </nav>
