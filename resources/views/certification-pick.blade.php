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
        @include('includes.header')
        
       <div class="container">
            <div class="row">
                <div class="col-4">
                    <image src={{asset('image/cisco.png')}} style="widht: 16%; height: 16%; margin-top:30%;margin-left:5%;">
                    <h3 style="text-align:center;margin-top:20%;padding-right:5%"> {{$details->company}} </h3>
                    <h5 style="text-align:center;padding-right:5%;"> {{$details->desc}} </h5>
                    <br>
                    <button type="button" href="/certification-pick" style="color : white; border-radius: 10px; background-color: #1b294a;width:90%;margin-left:5%;"> Apply </button>
                    <button type="button" href="/certification-pick" style="color : white; border-radius: 10px; background-color: #00ff44;width:90%;margin-left:5%; margin-top:5%;"> Contact </button>
                </div>
                <div class="col-8">
                    <h1 style="color : #1b294a; padding-top:10%;"> Judul </h1>
                    <br>
                    <p style="text-align:justify;">{{$details->desc_detail}}</p>
                </div>
            </div>
        </div>

       @include('includes/footer')
    </body>
</html>