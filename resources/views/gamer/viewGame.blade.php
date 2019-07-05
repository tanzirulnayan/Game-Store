@extends('layouts.gamer.app')
@section('content')

<body class="profile-page">
    <section class="section">
        <div class="container">
            <div class="card-body">
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
                            <label>Description</label>
                            <h3 class="text-info">{{$game->GAME_DESCRIPTION}}</h3>
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
                            <h3 class="text-info">{{$game->GAME_REQ_CPU}}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Required RAM</label>
                            <h3 class="text-info">{{$game->GAME_REQ_RAM}}</h3>
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
                            <h3 class="text-info">{{$game->GAME_REQ_GPU}}</h3>
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
                    <div>
                        <div class="form-group">
                            <label>Screenshot</label>
                            <br>
                            <img src="{{asset($game->GAME_SS)}}" class="img-fluid rounded shadow-lg" style="max-width:40%; max-height:20%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="card-body">
                @if($comment != "")
                @foreach($comment as $cmnt)
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" align="left">
                            <img src="{{asset($cmnt->G_IMAGE)}}" class="img-center img-fluid rounded-circle" style="height:35px; width:35px;" align="left">
                            <h3 class="text-info">{{$cmnt->USERNAME}}</h3>
                            <label style="color:white;">{{$cmnt->COMMENT}}</label>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                <form method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <img src="{{asset($data->G_IMAGE)}}" align="left" class="img-center img-fluid rounded-circle" style="height:50px; width:50px;">
                                <h3 class="text-info">{{$data->USERNAME}}</h3>
                                <input type="text" class="form-control" name="COMMENT" placeholder="Type your comment">
                                <button class="btn btn-info btn-round" type="submit">
                                    <i class="tim-icons icon-send"></i> Send
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    @endsection
    @section('title')
    Game Details
    @endsection