@extends('layouts.gamer.app')
@section('content')
<form method="POST">
  <br><br><br>
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="tim-icons icon-zoom-split"></i>
              </div>
            </div>
            <input type="text" name="search" onkeyup="gameSearch()" id="search" list="gameList" class="form-control" placeholder="Search Games..." style="height:50px">
            <datalist id="gameList">
            </datalist>
            <button class="btn btn-success" type="submit">
              <i class="tim-icons icon-zoom-split"></i> Search
            </button>
          </div>
        </div>
        <div class="col-md-12">
          @if( Session::has( 'error' ))
          <h1>{{ Session::get( 'error' ) }}😱</h1>
          @else
          <h1></h1>
          @endif
        </div>
      </div>
    </div>
  </section>
</form>

<script type="text/javascript">
  function gameSearch() {
    var search = document.getElementById("search").value;
    $.ajax({
      type: "GET",
      url: '{{route('
      search.games ')}}',
      data: {
        search: search,
      },
      dataType: 'html',
      success: function(response) {
        document.getElementById("gameList").innerHTML = response;
      }
    });
  }
</script>

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