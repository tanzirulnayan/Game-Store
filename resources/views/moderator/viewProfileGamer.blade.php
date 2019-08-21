@extends('layouts.moderator.app')
@section('content')

<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-plain">
          <div class="card-header">
            <h1 class="profile-title text-left">Profile</h1>
          </div>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <img src="{{asset($value->G_IMAGE)}}" alt="Circle image" class="img-fluid rounded-circle shadow" style="width:200px; height:200px;">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Username:</label>
                    <h3 class="text-info">{{$value->USERNAME}}</h3>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Name:</label>
                    <h3 class="text-info">{{$value->G_NAME}}</h3>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Email:</label>
                    <h3 class="text-info">{{$value->G_EMAIL}}</h3>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Mobile Number:</label>
                    <h3 class="text-info">{{$value->G_MOBILE}}</h3>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Date of Birth:</label>
                    <h3 class="text-info">{{$value->G_DOB}}</h3>
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

@endsection

@section('title')
Profile
@endsection