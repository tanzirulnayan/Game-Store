@extends('layouts.developer.app')

@section('content')

<body class="profile-page">
    <section class="section">
        <div class="container">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <h2>Total Games Uploaded:</h2>
                            <h2 class="text-info">{{$game}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h2>Total Gamers:</h2>
                            <h2 class="text-info">{{$gamer}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h2>Total Developers:</h2>
                            <h2 class="text-info">{{$developer}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
    @section('title')
    Statistics | Developer
    @endsection