<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('custom')}}/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{asset('custom')}}/assets/img/favicon.png">
  <title>
    Login
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{asset('custom')}}/assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{asset('custom')}}/assets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('custom')}}/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="index-page">
  {{-- ------------------------------------- Navbar ------------------------------------- --}}
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
      <div class="container">
        <div class="navbar-translate">
          <a class="navbar-brand" href="{{route('landingPage.index')}}" rel="tooltip" title="Explore the Gaming World" data-placement="bottom" target="_blank">
            <span>Game•</span> Store
          </a>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('landingPage.index')}}">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('login.index')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('signup.index')}}">Signup</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    {{-- -- ------------------------------------- End Navbar --------------------------------------- --}}
  <div class="wrapper">

    <div class="main">
      <div class="section section-signup">
        <div class="container">
          <div class="squares square-1"></div>
          <div class="squares square-2"></div>
          <div class="squares square-3"></div>
          <div class="squares square-4"></div>
          <div class="row row-grid justify-content-between align-items-center">
            <div class="col-lg-6">

            </div>
            <div class="col-lg-6 mb-lg-auto">
              <div class="card card-register">
                <div class="card-header">
                  <img class="card-img" src="assets/img/square1.png" alt="Card image">
                  <h4 class="card-title">Login</h4>
                </div>
                <div class="card-body">
                  <form class="form" method="POST">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-single-02"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="USERNAME" placeholder="Username..." >
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-lock-circle"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="PASSWORD" placeholder="Password...">
                    </div>
                    <button class="btn btn-primary btn-round" type="submit">
                        <i class="tim-icons icon-controller"></i> Login
                      </button>
                  </form>
                  <br>
                  <label class="form-check-label">
                      <span class="form-check-sign"></span>
                      <p class="text-success">Need an account? </p>
                      <a href="{{route('signup.index')}}">Signup</a>
                   </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h1 class="title">BLK•</h1>
          </div>
          <div class="col-md-3">
            <ul class="nav">
              <li class="nav-item">
                <a href="{{asset('custom')}}/index.html" class="nav-link">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('custom')}}/examples/landing-page.html" class="nav-link">
                  Landing
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('custom')}}/examples/register-page.html" class="nav-link">
                  Register
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('custom')}}/examples/profile-page.html" class="nav-link">
                  Profile
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul class="nav">
              <li class="nav-item">
                <a href="https://creative-tim.com/contact-us" class="nav-link">
                  Contact Us
                </a>
              </li>
              <li class="nav-item">
                <a href="https://creative-tim.com/about-us" class="nav-link">
                  About Us
                </a>
              </li>
              <li class="nav-item">
                <a href="https://creative-tim.com/blog" class="nav-link">
                  Blog
                </a>
              </li>
              <li class="nav-item">
                <a href="https://opensource.org/licenses/MIT" class="nav-link">
                  License
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3 class="title">Follow us:</h3>
            <div class="btn-wrapper profile">
              <a target="_blank" href="https://twitter.com/creativetim" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                <i class="fab fa-twitter"></i>
              </a>
              <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Like us">
                <i class="fab fa-facebook-square"></i>
              </a>
              <a target="_blank" href="https://dribbble.com/creativetim" class="btn btn-icon btn-neutral  btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                <i class="fab fa-dribbble"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer> --}}
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('custom')}}/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="{{asset('custom')}}/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="{{asset('custom')}}/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="{{asset('custom')}}/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{asset('custom')}}/assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{asset('custom')}}/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- Chart JS -->
  <script src="{{asset('custom')}}/assets/js/plugins/chartjs.min.js"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="{{asset('custom')}}/assets/js/plugins/moment.min.js"></script>
  <script src="{{asset('custom')}}/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('custom')}}/assets/demo/demo.js"></script>
  <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('custom')}}/assets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      blackKit.initDatePicker();
      blackKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>