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
        <br>
        <h2 style="text-align: center;color : #1b294a;"><b>Find and Compare Your Skill With Others</b></h2>
        
        <!-- Search form -->
        <div class="active-cyan-4 mb-4" style="margin-left: 20%;margin-right:20%;">
            <form action="/action_page.php">
                <input class="form-control" type="text" placeholder="Search..." aria-label="Search">
            </form>
        </div>
        <br>
        <div class ="container">
            <div class ="row">
            <!-- FOREACH LOOP FROM DB -->
                <div class="col-4">
                <div class="img-left">
                </div>
                    <img src={{asset('image/human.png')}} alt="Avatar" style="width:500px;height:450px;">
                    <button type="button" class="btn btn-info" href="#" style=" background-color: #1b294a;margin-left:20%;">View My Profile</button>
                </div>
                <div class="col-8">
                    <div class="row">
                        <div class="col-3">
                            <img src={{asset('image/marcell.jpg')}} style="width: 110px;height:110px;border-radius: 100%; text-align : center;margin-top:10px;">
                        </div>
                        <div class="col-7">
                            <h3><b>Antony Akbar </b></h3>
                            <p style="color: #bababa"> Statistical Consultant at Jatinangor Research Center</p>
                            <p style="color: #bababa"> Get 10 Sertification</p>
                        </div>
                        <div class="col-2">
                        <br>
                            <button type="button" class="btn btn-primary">Connect</button>
                        </div>
                        <br>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <img src={{asset('image/marcell.jpg')}} style="width: 110px;height:110px;border-radius: 100%; text-align : center;margin-top:10px;">
                        </div>
                        <div class="col-7">
                            <h3><b>Antony Akbar </b></h3>
                            <p style="color: #bababa"> Statistical Consultant at Jatinangor Research Center</p>
                            <p style="color: #bababa"> Get 10 Sertification</p>
                        </div>
                        <div class="col-2">
                        <br>
                            <button type="button" class="btn btn-primary">Connect</button>
                        </div>
                        <br>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <img src={{asset('image/marcell.jpg')}} style="width: 110px;height:110px;border-radius: 100%; text-align : center;margin-top:10px;">
                        </div>
                        <div class="col-7">
                            <h3><b>Antony Akbar </b></h3>
                            <p style="color: #bababa"> Statistical Consultant at Jatinangor Research Center</p>
                            <p style="color: #bababa"> Get 10 Sertification</p>
                        </div>
                        <div class="col-2">
                        <br>
                            <button type="button" class="btn btn-primary">Connect</button>
                        </div>
                        <br>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <img src={{asset('image/marcell.jpg')}} style="width: 110px;height:110px;border-radius: 100%; text-align : center;margin-top:10px;">
                        </div>
                        <div class="col-7">
                            <h3><b>Antony Akbar </b></h3>
                            <p style="color: #bababa"> Statistical Consultant at Jatinangor Research Center</p>
                            <p style="color: #bababa"> Get 10 Sertification</p>
                        </div>
                        <div class="col-2">
                        <br>
                            <button type="button" class="btn btn-primary">Connect</button>
                        </div>
                        <br>
                    </div>
                </div>
         </div>
        </div>
        <br>
        
        <div class="footer">
            <h5 style="text-align: center;color: white;"> Copyright ©2020 | Invention Udayana 2020 | Bucinangor </h5>
            <h6 style="text-align: center;color: white;"> Made with love from Jatinangor,West Java, Indonesia</h6>
        </div>
    </body>
</html>