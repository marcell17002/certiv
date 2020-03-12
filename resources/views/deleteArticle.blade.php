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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/article.css') }}" />
    </head>
    <body>
    <div class="container">
        <h1>Delete Article</h1>
        <div class="row">
        @foreach($articles as $article)
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('image/jobhunt.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->header}}</h5>
                        <p class="card-text">{{$article->shortDesc}}</p>
                        <form method="POST" action="9291/delete/{{$article->id}}">
                        @csrf
                        <button type=""submit class="btn btn-danger">Delete</a>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </body>
</html>