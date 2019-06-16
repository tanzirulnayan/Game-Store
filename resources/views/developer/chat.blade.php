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
            <h1 class="profile-title text-left">{{$data->DEV_NAME}}</h1>
            <h5 class="text-on-back">{{$data->USERNAME}}</h5>
          </div>
          <div class="col-lg-6 col-md-6">
            <h1 class="profile-title text-left">{{$gamer->G_NAME}}</h1>
            <h5 class="text-on-back">{{$gamer->USERNAME}}</h5>
          </div>
          <div class="col-lg-8 col-md-6 ml-auto mr-auto">
            <div class="card card-coin card-plain">
              <div class="card-header">
                <img src="{{asset($data->DEV_LOGO)}}" class="img-center img-fluid rounded-circle">
                <h4 class="title">{{$data->DEV_NAME}}</h4>
              </div>
              <ul class="nav nav-tabs nav-tabs-primary justify-content-center">
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card-coin card-plain">
              <div class="card-header">
                <img src="{{asset($gamer->G_IMAGE)}}" class="img-center img-fluid rounded-circle">
                <h4 class="title">{{$gamer->G_NAME}}</h4>
              </div>
              <ul class="nav nav-tabs nav-tabs-primary justify-content-center">
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper">
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-plain">
              <div class="card-header">
                <h1 class="profile-title text-left">MESSAGES</h1>
                <h5 class="text-on-back">Chat</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-content tab-subcategories">
          <div class="tab-pane active" id="linka">

            @for ($i = 0; $i < count($sender); $i++) <h3 align="left"><img src="{{asset($gamer->G_IMAGE)}}" alt="Circle image" class="img-fluid rounded-circle shadow" style="width:30px"> {{$sender[$i]->MESSAGE}}</h3>

              @for ($j = 0; $j < count($receiver); $j++) <h3 align="right">{{$receiver[$j]->MESSAGE}} <img src="{{asset($data->DEV_LOGO)}}" alt="Circle image" class="img-fluid rounded-circle shadow" style="width:30px"></h3>

                @endfor
                @endfor


                <br><br>
                <ul class="nav nav-tabs nav-tabs-primary justify-content-center">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#">
                      Send Message
                    </a>
                  </li>
                </ul>
                <br>
                <form method="POST">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tim-icons icon-chat-33"></i>
                      </div>
                    </div>
                    <input type="text" class="form-control" name="MESSAGE" placeholder="Type...">
                  </div>
                  <br>
                  <button class="btn btn-primary btn-round" type="submit">
                    <i class="tim-icons icon-settings-gear-63"></i> SEND
                  </button>
                </form>
          </div>
        </div>
      </div>
    </section>
  </div>


  @endsection


  @section('title')
  Chat | Developer
  @endsection