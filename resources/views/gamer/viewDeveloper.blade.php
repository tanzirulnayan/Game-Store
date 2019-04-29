@extends('layouts.gamer.app')
@section('content')

@endsection
<body class="profile-page">
    <section class="section">
        <div class="container">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group" style="align:left;">
                            <img src="{{asset($dev->DEV_LOGO)}}" class="img-center img-fluid rounded-circle" style="height:100px; width:100px;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Name</label>
                            <h3 class="text-info">{{$dev->DEV_NAME}}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>DESCRIPTION</label>
                            <h3 class="text-info">{{$dev->DEV_DESCRIPTION}}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>ADDRESS</label>
                            <h3 class="text-info">{{$dev->DEV_ADDRESS}}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>WEBSITE</label>
                            <h3 class="text-info">{{$dev->DEV_EMAIL}}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>WEBSITE</label>
                            <h3 class="text-info">{{$dev->DEV_WEBSITE}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="card-body">
            @if ($comment != "")
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
                                <h3 class="text-info">{{$cmnt->USERNAME}}</h3>
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
@section('title')
Developer Details
@endsection
