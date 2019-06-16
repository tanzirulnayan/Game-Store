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
          <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card-coin card-plain">
              <div class="card-header">
                <img src="{{asset($data->DEV_LOGO)}}" class="img-center img-fluid rounded-circle">
                <h4 class="title">{{$data->DEV_NAME}}</h4>
              </div>
              <ul class="nav nav-tabs nav-tabs-primary justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#">
                    Change Logo
                  </a>
                </li>
              </ul>
              <form method="POST" enctype="multipart/form-data">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="tim-icons icon-upload"></i>
                    </div>
                  </div>
                  <input type="file" name="DEV_LOGO" class="form-control">
                </div>
                <button class="btn btn-primary btn-round" type="submit">
                  <i class="tim-icons icon-settings-gear-63"></i> CHANGE
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection


  @section('title')
  Change Logo | Developer
  @endsection