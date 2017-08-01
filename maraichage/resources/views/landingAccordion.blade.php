@extends('layouts.landingPage')

@section('css')
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="contentLanding">

<div class="menu-list">

  <section class="menu" id="suggestions" style="background: rgb(192, 57, 43)">
    <div class="preview1"><h1 id="horizontalTitle">La suggestion du Maraicher</h1><h1 id="verticalTitle">suggestions</h1></div>
    <h1 class="name">La suggestion du Maraicher</h1>
    <div class="flexReceiver">
      <div class="containerSection"></div>
    </div>
  </section>

  <section class="menu" id="markets" style="background: rgb(105,80,101)">
    <div class="preview2"><h1 id="horizontalTitle">Les marchés</h1><h1 id="verticalTitle">marchés</h1></div>
    <h2 class="name">Les marchés</h2>
    <div class="flexReceiver">
      <div class="containerSection">

            @include('landing.stand', compact('markets'))


      </div>
      </div>

  </section>

  <section class="menu" id="farm" style="background: #3F5B67;">
    <div class="preview3"><h1 id="horizontalTitle">L'exploitation</h1><h1 id="verticalTitle">exploitation</h1></div>
    <h2 class="name">L'exploitation</h2>
    <div class="flexReceiver">
      <div class="containerSection">
        {{--  <a href="/login">Admin</a>  --}}
        @include('landing.farm')
      </div>
    </div>
  </section>
</div>
@endsection
@section('js')
     {{--  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7EtFbAhBZWZMCI_9OaOpLNPkjVRcKlGU" async defer></script>  --}}
    {{--  <script src="{{ asset('js/stand.js') }}"></script>  --}}

@endsection