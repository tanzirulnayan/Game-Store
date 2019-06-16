<@extends('layouts.developer.app') @section('content') <body class="profile-page">
  <div class="wrapper">
    <div class="page-header">
      <form method="POST" enctype="multipart/form-game">
        <img src="{{asset('custom')}}/assets/img/dots.png" class="dots">
        <img src="{{asset('custom')}}/assets/img/path4.png" class="path">
        <div class="container align-items-center">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <h1 class="profile-title text-left">{{$game->GAME_NAME}}</h1>
              <h5 class="text-on-back">Games</h5>
              <h3 class="text-warning">⚠ Update the information or leave it as it is to remain unchanged.</h3>
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
                        <input type="hidden" class="form-control" name="GAME_LOGO_OLD" value="{{$game->GAME_LOGO}}">
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
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Game ID</label>
                <h3 class="text-success">{{$game->GAME_ID}}</h3>
                <input type="hidden" class="form-control" name="GAME_ID" value="{{$game->GAME_ID}}" placeholder="Game Name...">
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
                  <input type="text" class="form-control" name="GAME_NAME" value="{{$game->GAME_NAME}}" placeholder="Game Name...">
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
                  <input type="text" class="form-control" name="GAME_PRICE" value="{{$game->GAME_PRICE}}" placeholder="Game Price...">
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
                  <input type="text" class="form-control" name="GAME_DESCRIPTION" value="{{$game->GAME_DESCRIPTION}}" placeholder="Game Description...">
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
                  <input type="text" name="GAME_REQ_OS" class="form-control" value="{{$game->GAME_REQ_OS}}" placeholder="Required Operating System...">
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
                  <input type="text" name="GAME_REQ_CPU" class="form-control" value="{{$game->GAME_REQ_CPU}}" placeholder="Required CPU...">
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
                  <input type="text" name="GAME_REQ_RAM" class="form-control" value="{{$game->GAME_REQ_RAM}}" placeholder="Required RAM...">
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
                  <input type="text" name="GAME_REQ_HDD" class="form-control" value="{{$game->GAME_REQ_HDD}}" placeholder="Required Hard Drive...">
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
                  <input type="text" name="GAME_REQ_GPU" class="form-control" value="{{$game->GAME_REQ_GPU}}" placeholder="Required GPU...">
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
                  <input type="text" name="GAME_REQ_NETWORK" class="form-control" value="{{$game->GAME_REQ_NETWORK}}" placeholder="Required Network...">
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
              <label class="text-info">OR KEEP IT !</label>
              <br>
              <h5 class="text-primary"> {{$game->GAME_FILES}}</h5>
              <input type="hidden" class="form-control" name="GAME_FILES_OLD" value="{{$game->GAME_FILES}}">
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
              <label class="text-info">OR KEEP IT !</label>
              <br>
              <img src="{{asset($game->GAME_SS)}}" name="GAME_SS_OLD" value="{{$game->GAME_SS}}" class="img-fluid rounded shadow-lg">
              <input type="hidden" class="form-control" name="GAME_SS_OLD" value="{{$game->GAME_SS}}">
            </div>
          </div>
          <br><br>
          <button class="btn btn-primary btn-round" type="submit">
            <i class="tim-icons icon-settings-gear-63"></i> UPDATE
          </button>
        </div>
      </div>
    </section>
  </div>

  </form>


  @endsection


  @section('title')
  Update Game | Developer
  @endsection