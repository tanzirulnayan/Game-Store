@extends('layouts.developer.app')

@section('content')

<body class="register-page">
  {{-- -- ------------------------------------- Cards -------------------------------------- --}}
  <div id="square1" class="square square-1"></div>
  <div id="square2" class="square square-2"></div>
  <div id="square3" class="square square-3"></div>
  <div id="square4" class="square square-4"></div>
  <div id="square5" class="square square-5"></div>
  <div id="square6" class="square square-6"></div>
  <div id="square7" class="square square-7"></div>
  <div id="square8" class="square square-8"></div>
  {{-- -- ------------------------------------- End Cards -------------------------------------- --}}
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

  @endsection

  @section('title')
  Home | Developer
  @endsection