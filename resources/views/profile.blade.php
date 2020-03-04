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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}" />
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
        
        <div class="profile-top">
        <h5 style="color:#ffcc24; text-align: center;margin-left:900px;"> Your Newest Emblem</h5>
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <img src={{asset('image/marcell.jpg')}} style="width: 150px;height:150px;border-radius: 100%; text-align : center;margin-left:40%;margin-top:5%;">
                    </div>
                    <div class="col-7" style="padding-left:10%;">
                        <h3 style="color:white;"><b>Marcell Antonius</b></h3>
                        <h6 style="color:white;">Enterprise Application Intern di PT.ANGKASA PURA I</h6>
                        <p style="color:#f5f5f5;font-size:12px;">I am an experienced college student over one year experience in handling multi-case program or issue on many courses. My professional experiences stems from months of providing excellent work with any team, creative problem solving , An excellent oral presentation and building customer loyalty.I am very interested in linux, web-dev, data. Of course I am also interested in web development back end programs. </p>
                    </div>
                    <div class="col-3">
                        <img src={{asset('image/emblem.png')}} style="width: 130px;height:130px;border-radius: 100%; text-align : center;margin-left:30%;margin-top:5%  ;">  
                    </div>
                </div>
            </div>
        </div>
        <br>
        <h2 style="text-align: center;color:#1b294a"><b>See My Resume and Compare with Your Skills</b></h2>
        <br>

        <div class="profile-3">
        <div class="container">
            <h3 style="color:#1b294a;"> Sertification </h3>
            <div class="row">
                <div class="col-6">
                    <img src={{asset('image/cisco.png')}} alt="Avatar" style="width:100px;height:100px;border-radius:100%">
                </div>
                <div class="col-6">
                    <h5>Cisco</h5>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    <img src={{asset('image/emblem.png')}} alt="Avatar" style="width:100px;height:100px;border-radius:100%">
                </div>
                <div class="col-6">
                    <h5>Cisco</h5>
                </div>
            </div>
        </div>
        </div>

        <div class="profile-0" >
        <div class="container">
            <h3 style="color:#1b294a;"> Education </h3>
            <div class="row">
                <div class="col-6">
                    <h5>Universitas Padjadjaran</h5>
                </div>
                <div class="col-4">
                    <p>2017-2021</p>
                </div>
            </div>
        </div>
        </div>
        
        <div class="profile-3" >
        <div class="container">
            <h3 style="color:#1b294a;"> Skills </h3>
            <div class="row">
                <div class="col-6">
                    <h5>Coding</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h5>Coding</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h5>Coding</h5>
                </div>
            </div>
        </div>
        </div>

        <div class="profile-4">
        <div class="container">
            <h3 style="color:#1b294a;"> Organisations </h3>
            <div class="row">
                <div class="col-6">
                    <img src={{asset('image/cisco.png')}} alt="Avatar" style="width:100px;height:100px;border-radius:100%">
                </div>
                <div class="col-6">
                    <h5>Cisco</h5>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    <img src={{asset('image/emblem.png')}} alt="Avatar" style="width:100px;height:100px;border-radius:100%">
                </div>
                <div class="col-6">
                    <h5>Cisco</h5>
                </div>
            </div>
        </div>
        </div>

        <div class="container">
            <div class="row">
                <button type="button" class="btn btn-info" href="/update-profile" style="margin-left:85%;">Update My Skills</button>
            </div>
            <br>
        </div>
        
        
        <div class="footer">
            <h5 style="text-align: center;color: white;"> Copyright ©2020 | Invention Udayana 2020 | Bucinangor </h5>
            <h6 style="text-align: center;color: white;"> Made with love from Jatinangor,West Java, Indonesia</h6>
        </div>
    </body>
</html>