@extends('layouts.gamer.app')
@section('content')
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
    @endsection
@section('title')
Developer Details
@endsection
