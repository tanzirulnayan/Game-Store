<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Log In</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" >
    </head>
    <body>
{{--*******************Navbar Starts*******************--}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="{{route('landingPage.index')}}"> Game Store</a>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            <a class="nav-link" href="{{route('login.index')}}">Login
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('signup.index')}}">Signup</a>
            </li>
        </ul>
    </div>
  </div>
</nav>
{{--*******************Navbar Ends*******************--}}

<div class="container">
    <div class="row">
        <form class="col-md-6 offset-md-3" method="POST">
            <br><br><br><br><br>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Enter Username" name="USERNAME">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control " placeholder="Password" name="PASSWORD">
            </div>
            <button type="submit" class="btn btn-outline-success">Sign in</button>
        </form> 
    </div>
</div>
        
        
        <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>