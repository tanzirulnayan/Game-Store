@extends('layouts.moderator.app')
@section('content')



  {{-- -- ------------------------------------- End Navbar --------------------------------------- --}}
  <body class="profile-page">
  <div class="wrapper">
    <div class="page-header">
      <img src="{{asset('custom')}}/assets/img/dots.png" class="dots">
      <img src="{{asset('custom')}}/assets/img/path4.png" class="path">
      <div class="container align-items-center">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <h1 class="profile-title text-left">{{$data->MOD_NAME}}</h1>
            <h5 class="text-on-back">{{$data->USERNAME}}</h5>
          </div>
          <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card-coin card-plain">
              <div class="card-header">
                <img src="{{asset($data->MOD_IMAGE)}}" class="img-center img-fluid rounded-circle">
                <h4 class="title">{{$data->MOD_NAME}}</h4>
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
                <h5 class="text-on-back">{{$data->USERNAME}}</h5>
              </div>
              <div class="card-body">
                <form method="POST">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Username</label>
                        <h3 class="text-success">{{$data->USERNAME}}</h3>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Name</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tim-icons icon-single-02"></i>
                            </div>
                          </div>
                          <input type="text" class="form-control" name="MOD_NAME" 
                          value="{{$data->MOD_NAME}}">
                        </div>
                      </div>
                    </div>
                  </div>
             
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Email</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tim-icons icon-email-85"></i>
                            </div>
                          </div>
                          <input type="text" class="form-control" name="MOD_EMAIL" value="{{$data->MOD_EMAIL}}" >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tim-icons icon-square-pin"></i>
                            </div>
                          </div>
                          <input type="text" class="form-control" name="MOD_ADDRESS" value="{{$data->MOD_ADDRESS}}">
                        </div>
                      </div>
                    </div>
                  </div>
        
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Date of Birth</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tim-icons icon-money-coins"></i>
                            </div>
                          </div>
                          <input type="text" class="form-control" name="MOD_DOB" value="{{$data->MOD_DOB}}">
                        </div>
                      </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-round" type="submit">
                  <i class="tim-icons icon-settings-gear-63"></i> UPDATE
                </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>



@endsection


@section('title')
Edit Profile | Moderator
@endsection