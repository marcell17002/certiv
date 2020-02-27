@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
<!Doctype HTML>
<html>
    <head>
        <title>
            Welcome! - Certiv
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}" />
    </head>
    <body>
        <div class="topnav" id="topnav">
            <img class="logo" src={{asset('image/logo.png')}}>
            <div class="topnav-right">
                <a href="/certification" href="javascript:void(0)">Certification</a>
                <a href="#about" href="javascript:void(0)">Network</a>
                <a href="#about" href="javascript:void(0)">Article</a>
                <a href="#about" href="javascript:void(0)">Notifiation</a>
                <a href="#about" href="javascript:void(0)">Login</a>
            </div>
            </div>
        </div>
        <script>
            window.onscroll = function() {myFunction()};

            var navbar = document.getElementById("topnav");
            var sticky = navbar.offsetTop;

            function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
            }
        </script>
        <div class="home-1">
            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <div class="content-home-gs" > 
                            <h1 style="color : #1b294a;"> Find The Best Certification! </h1>
                            <h2 style="color : #2d4170;"> Boost-Up your carreer !</h2>
                            <br>
                            <button type="button" href="#" style="color : white; border-radius: 10px; background-color: #1b294a; "> Getting Started </button>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="content-home-img">
                            <img src={{asset('image/recruitment.png')}} style="width: 400px;height:400px; text-align : center;">
                        </div>
                    </div>
                </div>              
            </div>
        </div>
        <div class="home-2">
            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <div class="content-home-2-txt" > 
                            <h2 style="color : #1b294a;">Upgrade your skill </h2>
                            <p>
                            Certiv menuntunmu untuk memilih masa depanmu sesuai keinginan , minat dan kemampuanmu. Bersama kami raihlah masa depanmu yang terstruktur dan lebih percaya diri lagi di dunia karir.
                            </p>
                            <br>
                            <b style="color:#2d4170;">Saatnya kamu menjadi Agen TERBAIK Indonesia</b>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="content-home-img">
                            <img src={{asset('image/home-gs1.png')}} style="width: 500px;height:400px; text-align : center;">
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
