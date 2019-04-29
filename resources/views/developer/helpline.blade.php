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
                <h1 class="profile-title text-left">Helpline</h1>
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
                    GAMER ID
                  </th>  
                  <th class="header">
                    ACTION
                  </th>            
                </tr>
              </thead>
              <tbody>
              @foreach($chat as $chats)
                <tr>
                  <td>
                    {{$chats->SENDER_ID}}
                  </td>
                  <td>
                    <a class="nav-link" href="{{route('developer.chat', $chats->SENDER_ID)}}">Open</a>
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
Help Line | Developer
@endsection