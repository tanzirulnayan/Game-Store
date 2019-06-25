@extends('layouts.developer.app')

@section('content')

<body class="profile-page">
  <div class="wrapper">
    <div class="page-header">
      <img src="{{asset('custom')}}/assets/img/dots.png" class="dots">
      <img src="{{asset('custom')}}/assets/img/path4.png" class="path">
      <div class="container align-items-center">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <h1 class="profile-title text-left">{{$game->GAME_NAME}}</h1>
            <h5 class="text-on-back">Games</h5>
            <h3>{{$game->GAME_DESCRIPTION}}</h3>
          </div>
          <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card-coin card-plain">
              <div class="card-header">
                <img src="{{asset($game->GAME_LOGO)}}" class="img-center img-fluid rounded-circle">
                <h4 class="title">{{$game->GAME_NAME}}</h4>
              </div>
              <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-primary justify-content-center">
                  <li class="nav-item">
                    <a class="nav-link active" game-toggle="tab" href="#linka">ScreenShot</a>
                  </li>
                </ul>
                <div class="tab-content tab-subcategories">
                  <div class="tab-pane active" id="linka">
                    <img src="{{asset($game->GAME_SS)}}" class="img-fluid rounded shadow-lg">
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
                <form>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Game ID</label>
                        <h3 class="text-success">{{$game->GAME_ID}}</h3>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Name</label>
                        <h3 class="text-info">{{$game->GAME_NAME}}</h3>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Type</label>
                        <h3 class="text-info">{{$type->TYPE_NAME}}</h3>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Price</label>
                        <h3 class="text-success">{{$game->GAME_PRICE}}</h3>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <h3 class="text-primary">{{$game->GAME_DESCRIPTION}}</h3>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Required OS</label>
                        <h3 class="text-info">{{$game->GAME_REQ_OS}}</h3>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Required CPU</label>
                        <h3 class="text-warning">{{$game->GAME_REQ_CPU}}</h3>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Required RAM</label>
                        <h3 class="text-success">{{$game->GAME_REQ_RAM}}</h3>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Required HDD</label>
                        <h3 class="text-info">{{$game->GAME_REQ_HDD}}</h3>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Required GPU</label>
                        <h3 class="text-primary">{{$game->GAME_REQ_GPU}}</h3>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Required Network</label>
                        <h3 class="text-info">{{$game->GAME_REQ_NETWORK}}</h3>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Game Status</label>
                        <h3 class="text-success">{{$game->GAME_STATUS}}</h3>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Files</label>
                        <h3 class="text-info">
                          <a href="{{asset($game->GAME_FILES)}}">{{$game->GAME_FILES}}</a>
                        </h3>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Upload Date & Time</label>
                        <h3 class="text-success">{{$game->created_at}}</h3>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>ScreenShot</label>
                        <br>
                        <img src="{{asset($game->GAME_SS)}}" class="img-fluid rounded shadow-lg">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    @endsection

    @section('title')
    View Game | Developer
    @endsection