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
            <h3 class="text-danger">Are you sure You want to DELETE this game ?</h3>
            <form method="POST">
              <button class="btn btn-danger" type="submit">YES</button>
              <a class="btn btn-success" href="{{route('developer.allGames')}}">NO</a>
            </form>
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
                    <a class="nav-link active" game-toggle="tab" href="#linka">
                      ScreenShot
                    </a>
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
  </div>
  @endsection

  @section('title')
  Delete Game | Developer
  @endsection