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
                <h1 class="profile-title text-left">Gamer List</h1>
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
                  <th class="header">
                    USERNAME
                  </th>
                  <th class="header">
                    GAMER NAME
                  </th>
                
                  <th class="header">
                      ACTION
                  </th>
                </tr>
              </thead>
              <tbody>
              @foreach($list as $list)
                <tr>
                  <td>
                    {{$list->USERNAME}}
                  </td>
                  <td>
                    {{$list->G_NAME}}
                  </td>
             
                  <td>
                    <a class="nav-link" href="{{route('moderator.viewProfileGamer', $list->USERNAME)}}">View Profile</a>
                    <a class="nav-link" href="{{route('moderator.deleteGamerToDB', $list->USERNAME)}}">Remove Account</a>
                         
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
Gamer List | Moderator
@endsection