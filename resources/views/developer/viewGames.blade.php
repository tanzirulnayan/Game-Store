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
            <h1 class="profile-title text-left">{{$data->GAME_NAME}}</h1>
            <h5 class="text-on-back">Games</h5>
            <h3>{{$data->GAME_DESCRIPTION}}</h3>
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
                    ScreenShot
                  </a>
                </li>
              </ul>
              <div class="tab-content tab-subcategories">
                <div class="tab-pane active" id="linka">
                  <img src="{{asset($data->GAME_SS)}}" class="img-fluid rounded shadow-lg">
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
                        <h3 class="text-success">{{$data->GAME_ID}}</h3>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Name</label>
                        <h3 class="text-info">{{$data->GAME_NAME}}</h3>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>TYPE</label>
                          <h3 class="text-info">{{$type->TYPE_NAME}}</h3>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>PRICE</label>
                          <h3 class="text-success">{{$data->GAME_PRICE}}</h3>
                        </div>
                      </div>
                    </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>DESCRIPTION</label>
                        <h3 class="text-primary">{{$data->GAME_DESCRIPTION}}</h3>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>REQUIRED OS</label>
                        <h3 class="text-info">{{$data->GAME_REQ_OS}}</h3>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label>REQUIRED CPU</label>
                          <h3 class="text-warning">{{$data->GAME_REQ_CPU}}</h3>
                        </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>REQUIRED RAM</label>
                          <h3 class="text-success">{{$data->GAME_REQ_RAM}}</h3>
                        </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label>REQUIRED HARD DRIVE</label>
                            <h3 class="text-info">{{$data->GAME_REQ_HDD}}</h3>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>REQUIRED GPU</label>
                        <h3 class="text-primary">{{$data->GAME_REQ_GPU}}</h3>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label>REQUIRED NETWORK</label>
                          <h3 class="text-info">{{$data->GAME_REQ_NETWORK}}</h3>
                        </div>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Game STATUS</label>
                          <h3 class="text-success">{{$data->GAME_STATUS}}</h3>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>FILES</label>
                          <h3 class="text-info">
                              <a href="{{asset($data->GAME_FILES)}}">{{$data->GAME_FILES}}</a> 
                          </h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>UPLOAD DATE & TIME</label>
                          <h3 class="text-success">{{$data->created_at}}</h3>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>SCREENSHOT</label>
                            <br>
                           <img src="{{asset($data->GAME_SS)}}" class="img-fluid rounded shadow-lg"> 
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

    @section('title')
    View Game | Developer
    @endsection