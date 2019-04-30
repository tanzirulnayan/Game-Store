@extends('layouts.gamer.app')
@section('content')
<body class="profile-page">
    <section class="section">
        <div class="container">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Total Games:</label>
                            <h3 class="text-info">{{$game}}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Total Gamers:</label>
                            <h3 class="text-info">{{$gamer}}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Total Developers:</label>
                            <h3 class="text-info">{{$developer}}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Total Users:</label>
                            <h3 class="text-info">{{$user}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
@section('title')
Statistics
@endsection
