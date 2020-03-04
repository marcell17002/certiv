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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/update-profile.css') }}" />
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
        
       <!-- Material form contact -->
<div class="card">

<h5 class="card-header info-color white-text text-center py-4">
    <strong>Contact us</strong>
</h5>

<!--Card content-->
<div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form class="text-center" style="color: #757575;" action="#!">

        <!-- Name -->
        <div class="md-form mt-3">
            <input type="text" id="materialContactFormName" class="form-control">
            <label for="materialContactFormName">Name</label>
        </div>

        <!-- E-mail -->
        <div class="md-form">
            <input type="email" id="materialContactFormEmail" class="form-control">
            <label for="materialContactFormEmail">E-mail</label>
        </div>

        <!-- Subject -->
        <span>Subject</span>
        <select class="mdb-select">
            <option value="" disabled>Choose option</option>
            <option value="1" selected>Feedback</option>
            <option value="2">Report a bug</option>
            <option value="3">Feature request</option>
            <option value="4">Feature request</option>
        </select>

        <!--Message-->
        <div class="md-form">
            <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
            <label for="materialContactFormMessage">Message</label>
        </div>

        <!-- Copy -->
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="materialContactFormCopy">
            <label class="form-check-label" for="materialContactFormCopy">Send me a copy of this message</label>
        </div>

        <!-- Send button -->
        <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Send</button>

    </form>
    <!-- Form -->

</div>

</div>
<!-- Material form contact -->
        <div class="footer">
            <h5 style="text-align: center;color: white;"> Copyright ©2020 | Invention Udayana 2020 | Bucinangor </h5>
            <h6 style="text-align: center;color: white;"> Made with love from Jatinangor,West Java, Indonesia</h6>
        </div>
    </body>
</html>