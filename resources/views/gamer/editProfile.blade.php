@extends('layouts.gamer.app')
@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-plain">
                    <div class="card-header">
                        <h1 class="profile-title text-left">Edit Profile</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Username:</label>
                                        <h3 class="text-info">{{$data->USERNAME}}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tim-icons icon-single-02"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" name="G_NAME" value="{{$data->G_NAME}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tim-icons icon-email-85"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" name="G_EMAIL" value="{{$data->G_EMAIL}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mobile Number:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tim-icons icon-tablet-2"></i>
                                                </div>
                                            </div>
                                            <input type="number" class="form-control" name="G_MOBILE" value="{{$data->G_MOBILE}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Date of Birth:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tim-icons icon-calendar-60"></i>
                                                </div>
                                            </div>
                                            <input type="date" class="form-control" name="G_DOB" value="{{$data->G_DOB}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-round" type="submit">
                                <i class="tim-icons icon-settings-gear-63"></i> Update
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('title')
Edit Profile
@endsection