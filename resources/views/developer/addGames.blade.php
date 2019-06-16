@extends('layouts.developer.app')

@section('content')

<body class="profile-page">
  <div class="wrapper">
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-plain">
              <div class="card-header">
                <h1 class="profile-title text-left">ADD Games</h1>
                <h5 class="text-on-back">{{$data->USERNAME}}</h5>
              </div>
              <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>NAME</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tim-icons icon-tablet-2"></i>
                            </div>
                          </div>
                          <input type="text" class="form-control" name="GAME_NAME" placeholder="Game Name...">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>NAME</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tim-icons icon-tablet-2"></i>
                            </div>
                          </div>
                          <select name="type" class="form-control" style="background-color:#171941">
                            <option value="no" disabled selected>Game Type</option>
                            @foreach($list as $tp)
                            <option value="{{$tp['TYPE_ID']}}">{{$tp['TYPE_NAME']}}</option>
                            @endforeach
                          </select>
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
                          <input type="text" class="form-control" name="GAME_DESCRIPTION" placeholder="Game Description...">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>PRICE</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tim-icons icon-money-coins"></i>
                            </div>
                          </div>
                          <input type="text" class="form-control" name="GAME_PRICE" placeholder="Game Price...">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label>FILES</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="tim-icons icon-upload"></i>
                          </div>
                        </div>
                        <input type="file" name="GAME_FILES" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label>REQUIRED OPERATING SYSTEM</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="tim-icons icon-settings"></i>
                          </div>
                        </div>
                        <input type="text" name="GAME_REQ_OS" class="form-control" placeholder="Required Operating System...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label>REQUIRED CPU</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="tim-icons icon-settings"></i>
                          </div>
                        </div>
                        <input type="text" name="GAME_REQ_CPU" class="form-control" placeholder="Required CPU...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label>REQUIRED RAM</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="tim-icons icon-settings"></i>
                          </div>
                        </div>
                        <input type="text" name="GAME_REQ_RAM" class="form-control" placeholder="Required RAM...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label>REQUIRED HARD DRIVE</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="tim-icons icon-settings"></i>
                          </div>
                        </div>
                        <input type="text" name="GAME_REQ_HDD" class="form-control" placeholder="Required Hard Drive...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label>REQUIRED GPU</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="tim-icons icon-settings"></i>
                          </div>
                        </div>
                        <input type="text" name="GAME_REQ_GPU" class="form-control" placeholder="Required GPU...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label>REQUIRED NETWORK</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="tim-icons icon-settings"></i>
                          </div>
                        </div>
                        <input type="text" name="GAME_REQ_NETWORK" class="form-control" placeholder="Required Network...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label>GAME LOGO</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="tim-icons icon-upload"></i>
                          </div>
                        </div>
                        <input type="file" name="GAME_LOGO" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label>GAME SCREENSHOT</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="tim-icons icon-upload"></i>
                          </div>
                        </div>
                        <input type="file" name="GAME_SS" class="form-control">
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-round" type="submit">
                    <i class="tim-icons icon-simple-add"></i> ADD GAME
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  @section('title')
  ADD Games | Developer
  @endsection

  </html>