@extends('layouts.gamer.app')
@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-plain">
                    <div class="card-header">
                        <h1 class="profile-title text-left">Change Password</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            @if ($errors->has('old_password'))
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Current Password:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tim-icons icon-lock-circle"></i>
                                                </div>
                                            </div>
                                            <input type="password" class="form-control" name="old_password" placeholder="{{$errors->getBag('default')->first('old_password')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Current Password:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tim-icons icon-lock-circle"></i>
                                                </div>
                                            </div>
                                            <input type="password" class="form-control" name="old_password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if ($errors->has('new_password'))
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>New Password:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tim-icons icon-lock-circle"></i>
                                                </div>
                                            </div>
                                            <input type="password" class="form-control" name="new_password" placeholder="{{$errors->getBag('default')->first('new_password')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>New Password:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tim-icons icon-lock-circle"></i>
                                                </div>
                                            </div>
                                            <input type="password" class="form-control" name="new_password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if ($errors->has('con_password'))
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Confirm New Password:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tim-icons icon-lock-circle"></i>
                                                </div>
                                            </div>
                                            <input type="password" class="form-control" name="con_password" placeholder="{{$errors->getBag('default')->first('con_password')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Confirm New Password:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tim-icons icon-lock-circle"></i>
                                                </div>
                                            </div>
                                            <input type="password" class="form-control" name="con_password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
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
@endsection

@section('title')
Change Password
@endsection