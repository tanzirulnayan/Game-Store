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
                <h1 class="profile-title text-left">ALL Games</h1>
                <h5 class="text-on-back">{{$data->USERNAME}}</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-content tab-subcategories">
          <div class="tab-pane active" id="linka">
            <div class="table-responsive">
              <table class="table tablesorter " id="plain-table">
                <thead class=" text-primary">
                  <tr>
                    <th class="header">Game ID</th>
                    <th class="header">Game Title</th>
                    <th class="header">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($game as $gm)
                  <tr>
                    <td>{{$gm->GAME_ID}}</td>
                    <td>{{$gm->GAME_NAME}}</td>
                    <td>
                      <a class="nav-link" href="{{route('developer.viewGames', $gm->GAME_ID)}}">VIEW</a>
                      <a class="nav-link" href="{{route('developer.updateGames', $gm->GAME_ID)}}">UPDATE</a>
                      <a class="nav-link" href="{{route('developer.deleteGames', $gm->GAME_ID)}}">DELETE</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  @endsection

  @section('title')
  ALL Games | Developer
  @endsection