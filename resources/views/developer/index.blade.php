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

{{-- <section class="section section-lg">
<div class="col-md-12">
  <div class="card card-chart card-plain">
    <div class="card-header">
      <div class="row">
        <div class="col-sm-6 text-left">
          <hr class="line-primary">
          <h5 class="card-category">Total Investments</h5>
          <h2 class="card-title">Performance</h2>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="chart-area">
        <canvas id="chartBig"></canvas>
      </div>
    </div>
  </div>
</div>
</section> --}}

@endsection


@section('title')
Home | Developer
@endsection
