@extends('layouts.app')
@section('header')
  <div class="row">
    <div class="top-bar">
      <div class="top-bar-left">
        <div class="row tm-60">
          <div class="logo small-12 columns">
            <a href="{!! url('/') !!}" class="logo-main text-shadow"><span>Artisan</span><br> pixelworks</a>
            <p class="logo-tagline">A Digital Strategy &amp; Creative Lab by <a href="{{ url('//:tongoi.com') }}" class="bold text-shadow duration">@oburatongoi</a>
            </p>
          </div>
        </div>
      </div>
      <div class="top-bar-right">
        <ul class="main-nav small-12 small-centered columns text-center tm-60 bm-40">
          <li class="nav-link-white selected"><a href="{{ url('philosophy') }}">My Philosophy</a></li>
          <li class="nav-link-white"><a href="{{ url('work') }}">My Work</a></li>
          <li class="nav-link-white"><a href="{{ url('contact') }}">Contact Me</a></li>
        </ul>
      </div>
    </div>
  </div>
@endsection
@section('content')
  <div class="row philosophy-banner">
    <div class="paragraph text-shadow small-12 medium-8 large-6 small-centered columns">
      <p>A pixel, well placed, wields great power.<br>Give each a purpose, and watch a website come alive&#8212;inviting curiosity, evoking emotion, and inspiring action; all as its natural self-expression.</p><p>I am meticulous about design, and obsess over every pixel to create products that both deliver and delight.</p>
    </div>
    <!-- <div class="small-12 medium-6 columns center">
      <video id="bg-vid" preload="true" src="{!! url('img/design.mov') !!}" preload="auto" autoplay muted>
          <source src="design.mp4" type="video/mp4" >
          <source src="design.ogv" type="video/ogv" >
         <source src="design.webm" type="video/webm" >
      </video>
      <script>
      var vid = document.getElementById("bg-vid");
      vid.playbackRate = 1.5;
      </script>
    </div> -->
    <div id="bg-img" style="background-image: url('img/cover-1.jpeg');"></div>
    <div id="bg-dark"></div>
  </div>
@endsection
@section('footer')
  <div class="row">
    <hr>
    <div class="footer">
      <p class="copyright">&copy; {!! date('Y') !!} artisan.pw  All rights reserved.</p>
    </div>
  </div>
@endsection
