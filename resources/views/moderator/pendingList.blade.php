@extends('layouts.moderator.app')

@section('content')

<body class="profile-page">
  <div class="wrapper">
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-plain">
              <div class="card-header">
                <h1 class="profile-title text-left">Pending List</h1>
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
                    <th class="header">Username</th>
                    <th class="header">User Type</th>
                    <th class="header">Status</th>
                    <th class="header">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($list as $list)
                  <tr>
                    <td>{{$list->USERNAME}}</td>
                    <td>{{$list->USER_TYPE}}</td>
                    <td>{{$list->STATUS}}</td>
                    <td>
                      <a class="nav-link" href="{{route('moderator.pendingListToDB', $list->USERNAME)}}">CHANGE</a>
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
  Pending List | Moderator
  @endsection