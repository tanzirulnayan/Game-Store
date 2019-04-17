<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Signup</title>
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
            <li>
            <a class="nav-link" href="{{route('login.index')}}">Login
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="{{route('signup.index')}}">Signup</a>
            </li>
        </ul>
    </div>
  </div>
</nav>
{{--*******************Navbar Ends*******************--}}

<div class="container">
        <div class="row">
            <form class="col-md-6 offset-md-3" method="POST" enctype="multipart/form-data">
                <h3>Signup as Gamer</h3>
                <div class="form-group">
                    <label ">Username</label>
                    <input type="text" class="form-control" placeholder="Enter Username..." name="USERNAME">
                </div>
                <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" placeholder="Full Name..." name="G_NAME">
                </div>
                <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Email..." name="G_EMAIL">
                </div>
                <div class="form-group">
                        <label>Country</label>
                        <select name="G_COUNTRY" class="form-control">
                            <option value="name" disabled selected>Select Country</option>
                            @foreach($country as $cr)
                                <option value="{{$cr['country_name']}}">{{$cr['country_name']}}</option>
                            @endforeach
                        </select>
                </div>
                <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" class="form-control" placeholder="Mobile..." name="G_MOBILE">
                </div>
                <div class="form-group">
                        <label>Gender</label><br>
                            <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="male" name="G_GENDER">Male
                            </label>
                            </div>
                            <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="female" name="G_GENDER">Female
                            </label>
                            </div>
                            <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="others" name="G_GENDER">Others
                            </label>
                            </div>
                </div>
                <div class="form-group">
                        <label>Date Of Birth</label>
                        <input type="date" class="form-control" name="G_DOB">
                </div>
                <div class="form-group">
                        <label>Credit Card</label>
                        <input type="text" class="form-control" placeholder="Credit Card No..." name="G_CREDIT_CARD">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password...">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" placeholder="Confirm Paasword..." name="PASSWORD">
            </div>
                <div class="custom-file">
                    <label class="custom-file-label">Choose file</label>
                    <input type="file" class="custom-file-input" name="G_IMAGE">    
                </div>
                <br><br>
                <button type="submit" class="btn btn-outline-success">Submit</button>
            </form> 
        </div>
</div>
        
        
        <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>