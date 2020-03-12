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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/certification.css') }}" />
    </head>
    <body>
        
        <div class ="container">
        <h1>Delete Certification</h1>
        <a href="/"><h1>Back to landing</h1></a>
            <div class ="row">
            @foreach ($certifications as $certification)
                <div class="col-3">
                    <div class="card">
                        <img src={{asset('image/cisco.png')}} alt="Avatar" style="width:100%;height:50%;padding: 10px 10px;">
                        <div class="container1">
                            <h4 style="text-align:center;border-top:2px;"><b>{{$certification->certif_name}}</b></h4> 
                            <p style="text-align:center;">{{$certification->desc}}</p> 
                            <form action="9290/delete/{{$certification->certif_id}}" method="POST">
                            @csrf
                                <button class="btn btn-danger" style="color : white; border-radius: 0px;width:100%;" type="submit"> Delete </a>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach    
         </div>
        </div>
    </body>
</html>