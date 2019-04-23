<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('custom')}}/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{asset('custom')}}/assets/img/favicon.png">
  <title>
      Update Game | Developer
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

<body class="profile-page">
  {{-- ------------------------------------- Navbar ------------------------------------- --}}
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{route('developer.index')}}" rel="tooltip" title="Explore the Gaming World" data-placement="bottom">
          <span>Game•</span> Store
        </a>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="{{route('developer.index')}}">HOME</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <p>
                GAMES
              </p>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{route('developer.allGames')}}">VIEW Games</a>
                <a class="dropdown-item" href="{{route('developer.addGames')}}">ADD Games</a>
                <a class="dropdown-item" href="{{route('developer.allGames')}}">UPDATE Games</a>
                <a class="dropdown-item" href="{{route('developer.allGames')}}">DELETE Games</a>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('developer.helpline')}}">Helpline</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('developer.developerAdvertisement')}}">Advertisement</a>
      </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <p>
                <img src="{{asset($dev->DEV_LOGO)}}" alt="Circle image" class="img-fluid rounded-circle shadow" style="width:25px;">Profile
              </p>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{route('developer.viewProfile')}}">VIEW Profile</a>
              <a class="dropdown-item" href="{{route('developer.editProfile')}}">EDIT Profile</a>
              <a class="dropdown-item" href="{{route('developer.changePicture')}}">CHANGE Logo</a>
              <a class="dropdown-item" href="{{route('developer.changePassword')}}">CHANGE Password</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('logout.index')}}">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  {{-- -- ------------------------------------- End Navbar --------------------------------------- --}}
  <div class="wrapper">
    <div class="page-header">
        <form method="POST" enctype="multipart/form-data">
      <img src="{{asset('custom')}}/assets/img/dots.png" class="dots">
      <img src="{{asset('custom')}}/assets/img/path4.png" class="path">
      <div class="container align-items-center">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <h1 class="profile-title text-left">{{$data->GAME_NAME}}</h1>
            <h5 class="text-on-back">Games</h5>
            <h3 class="text-warning">⚠ Update the information or leave it as it is to remain unchanged.</h3>
          </div>
          <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card-coin card-plain">
              <div class="card-header">
                <img src="{{asset($data->GAME_LOGO)}}" class="img-center img-fluid rounded-circle">
                <h4 class="title">{{$data->GAME_NAME}}</h4>
              </div>
              <div class="card-body">
              <ul class="nav nav-tabs nav-tabs-primary justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#linka">
                    Change Logo
                  </a>
                </li>
              </ul>
              <div class="tab-content tab-subcategories">
                <div class="tab-pane active" id="linka">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tim-icons icon-upload"></i>
                      </div>
                    </div>
                    <input type="file" name="GAME_LOGO" class="form-control">
                    <input type="hidden" class="form-control" name="GAME_LOGO_OLD" value="{{$data->GAME_LOGO}}">
                  </div>
                  <button class="btn btn-primary btn-round" type="submit">
                    <i class="tim-icons icon-settings-gear-63"></i> CHANGE
                  </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-plain">
              <div class="card-header">
                <h1 class="profile-title text-left">Information</h1>
                <h5 class="text-on-back">Games</h5>
              </div>
              <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Game ID</label>
                        <h3 class="text-success">{{$data->GAME_ID}}</h3>
                        <input type="hidden" class="form-control" name="GAME_ID" value="{{$data->GAME_ID}}" placeholder="Game Name...">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Name</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tim-icons icon-tablet-2"></i>
                            </div>
                          </div>
                          <input type="text" class="form-control" name="GAME_NAME" value="{{$data->GAME_NAME}}" placeholder="Game Name...">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>TYPE</label>
                          <select name="type" class="form-control" style="background-color:#171941">
                            <option value="no" disabled selected>Game Type</option>
                            <option value="{{$type->TYPE_ID}}" selected>{{$type->TYPE_NAME}}</option>
                            @foreach($types as $tp)
                                <option value="{{$tp['TYPE_ID']}}">{{$tp['TYPE_NAME']}}</option>
                            @endforeach
                        </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>PRICE</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="tim-icons icon-money-coins"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control" name="GAME_PRICE" value="{{$data->GAME_PRICE}}" placeholder="Game Price...">
                          </div>
                        </div>
                      </div>
                    </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>DESCRIPTION</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tim-icons icon-notes"></i>
                            </div>
                          </div>
                          <input type="text" class="form-control" name="GAME_DESCRIPTION" value="{{$data->GAME_DESCRIPTION}}" placeholder="Game Description...">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>REQUIRED OS</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tim-icons icon-settings"></i>
                            </div>
                          </div>
                          <input type="text" name="GAME_REQ_OS" class="form-control" value="{{$data->GAME_REQ_OS}}" placeholder="Required Operating System...">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label>REQUIRED CPU</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="tim-icons icon-settings"></i>
                              </div>
                            </div>
                            <input type="text" name="GAME_REQ_CPU" class="form-control" value="{{$data->GAME_REQ_CPU}}" placeholder="Required CPU...">
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>REQUIRED RAM</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="tim-icons icon-settings"></i>
                              </div>
                            </div>
                            <input type="text" name="GAME_REQ_RAM" class="form-control" value="{{$data->GAME_REQ_RAM}}" placeholder="Required RAM...">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label>REQUIRED HARD DRIVE</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <i class="tim-icons icon-settings"></i>
                                </div>
                              </div>
                              <input type="text" name="GAME_REQ_HDD" class="form-control" value="{{$data->GAME_REQ_HDD}}" placeholder="Required Hard Drive...">
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>REQUIRED GPU</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tim-icons icon-settings"></i>
                            </div>
                          </div>
                          <input type="text" name="GAME_REQ_GPU" class="form-control" value="{{$data->GAME_REQ_GPU}}" placeholder="Required GPU...">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>REQUIRED NETWORK</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tim-icons icon-settings"></i>
                            </div>
                          </div>
                          <input type="text" name="GAME_REQ_NETWORK" class="form-control" value="{{$data->GAME_REQ_NETWORK}}" placeholder="Required Network...">
                        </div>
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-md-12">
                        <label>CHANGE FILES</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tim-icons icon-upload"></i>
                            </div>
                          </div>
                          <input type="file" name="GAME_FILES" class="form-control">
                        </div>
                        <label class="text-info" >OR KEEP IT !</label>       
                        <br>                   
                        <h5 class="text-primary"> {{$data->GAME_FILES}}</h5>
                        <input type="hidden" class="form-control" name="GAME_FILES_OLD" value="{{$data->GAME_FILES}}">
                    </div>
                  </div>
                    <div class="row">
                      <div class="col-md-12">
                          <label>CHANGE SCREENSHOT</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="tim-icons icon-upload"></i>
                              </div>
                            </div>
                            <input type="file" name="GAME_SS" class="form-control">
                          </div>
                          <label class="text-info" >OR KEEP IT !</label>       
                          <br>                   
                          <img src="{{asset($data->GAME_SS)}}" name="GAME_SS_OLD" 
                          value="{{$data->GAME_SS}}" class="img-fluid rounded shadow-lg">
                          <input type="hidden" class="form-control" name="GAME_SS_OLD" value="{{$data->GAME_SS}}">
                      </div>
                    </div>
                    <br><br>
                    <button class="btn btn-primary btn-round" type="submit">
                      <i class="tim-icons icon-settings-gear-63"></i> UPDATE
                    </button>
                  </form>
        </div>
    </section>
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
</body>

</html>