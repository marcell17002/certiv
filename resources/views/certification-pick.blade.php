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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/certification-pick.css') }}" />
    </head>
    <body>
        <div class="topnav">
            <img class="logo" src={{asset('image/logo.png')}}>
            <div class="topnav-right">
                <a href="/certification">Certification</a>
                <a href="#about">Network</a>
                <a href="#about">Article</a>
                <a href="#about">Notifiation</a>
                <a href="#about">Login</a>
            </div>
            </div>
        </div>
        
       <div class="container">
            <div class="row">
                <div class="col-4">
                    <image src={{asset('image/cisco.png')}} style="widht: 16%; height: 16%; margin-top:30%;margin-left:5%;">
                    <h3 style="text-align:center;margin-top:20%;padding-right:5%"> Nama Lembaga </h3>
                    <h5 style="text-align:center;padding-right:5%;"> Minimum Desc. </h5>
                    <br>
                    <button type="button" href="/certification-pick" style="color : white; border-radius: 10px; background-color: #1b294a;width:90%;margin-left:5%;"> Apply </button>
                    <button type="button" href="/certification-pick" style="color : white; border-radius: 10px; background-color: #00ff44;width:90%;margin-left:5%; margin-top:5%;"> Contact </button>
                </div>
                <div class="col-8">
                    <h1 style="color : #1b294a; padding-top:10%;"> Judul </h1>
                    <br>
                    <p style="text-align:justify;"> Eos cumque optio dolores excepturi rerum temporibus magni recusandae eveniet, totam omnis consectetur maxime quibusdam expedita dolorem dolor nobis dicta labore quaerat esse magnam unde, aperiam delectus! At maiores, itaque.Eos cumque optio dolores excepturi rerum temporibus magni recusandae eveniet, totam omnis consectetur maxime quibusdam expedita dolorem dolor nobis dicta labore quaerat esse magnam unde, aperiam delectus! At maiores, itaque.Eos cumque optio dolores excepturi rerum temporibus magni recusandae eveniet, totam omnis consectetur maxime quibusdam expedita dolorem dolor nobis dicta labore quaerat esse magnam unde, aperiam delectus! At maiores, itaque.</p>
                </div>
            </div>
        </div>

        <div class="footer">
            <h5 style="text-align: center;color: white;"> Copyright ©2020 | Invention Udayana 2020 | Bucinangor </h5>
            <h6 style="text-align: center;color: white;"> Made with love from Jatinangor,West Java, Indonesia</h6>
        </div>
    </body>
</html>