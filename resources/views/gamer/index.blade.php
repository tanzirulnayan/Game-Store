@extends('layouts.gamer.app')
@section('content')
<body class="profile-page">
  <div class="wrapper">
    <section class="section">
      <div class="container">
        <div class="tab-content tab-subcategories">
          <div class="tab-pane active" id="linka">
            <div class="table-responsive">
              <table class="table tablesorter " id="plain-table">
                <thead class=" text-primary">
                  <tr>
                    <th class="header">
                      Icon
                    </th>
                    <th class="header">
                     Title
                    </th>
                    <th class="header">
                      Developer
                   </th>
                   <th>
                      Action
                   </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($game as $gm)
                  <tr>
                    <td>
                      <img src="{{asset($gm->GAME_LOGO)}}" class="img-center img-fluid rounded-circle" style="height:100px; width:100px;">
                    </td>
                    <td>
                      {{$gm->GAME_NAME}}
                    </td>
                    <td>
                      {{$gm->USERNAME}}
                    </td>
                    <td>
                      <a class="nav-link" href="{{route('gamer.ViewGame', $gm->GAME_ID)}}">Game Details</a>
                      <a class="nav-link" href="{{route('gamer.ViewDeveloper', $gm->USERNAME)}}">Developer Details</a>
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
</body>
@endsection

@section('title')
Index
@endsection
