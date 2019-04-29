@extends('layouts.gamer.app')
@section('content')

@endsection
<body class="profile-page">
    <section class="section">
        <div class="container">
            <div class="card-body">
                <form>
                    <div class="row">
                    <div class="col-md-4">
                            <div class="form-group">
                                <img src="{{asset($game->GAME_LOGO)}}" class="img-center img-fluid rounded-circle" style="height:100px; width:100px;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Name</label>
                                <h3 class="text-info">{{$game->GAME_NAME}}</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <a href="{{asset($game->GAME_FILES)}}">
                                <button class="btn btn-info btn-round" type="button">
                                    <i class="tim-icons icon-cloud-download-93"></i> Download
                                </button>
                                </a> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>DESCRIPTION</label>
                                <h3 class="text-info">{{$game->GAME_DESCRIPTION}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>REQUIRED OS</label>
                                <h3 class="text-info">{{$game->GAME_REQ_OS}}</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>REQUIRED CPU</label>
                                <h3 class="text-info">{{$game->GAME_REQ_CPU}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>REQUIRED RAM</label>
                                <h3 class="text-info">{{$game->GAME_REQ_RAM}}</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>REQUIRED HARD DRIVE</label>
                                <h3 class="text-info">{{$game->GAME_REQ_HDD}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>REQUIRED GPU</label>
                                <h3 class="text-info">{{$game->GAME_REQ_GPU}}</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>REQUIRED NETWORK</label>
                                <h3 class="text-info">{{$game->GAME_REQ_NETWORK}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div>
                            <div class="form-group">
                                <label>SCREENSHOT</label>
                                <br>
                                <img src="{{asset($game->GAME_SS)}}" class="img-fluid rounded shadow-lg"> 
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@section('title')
Game Details
@endsection
