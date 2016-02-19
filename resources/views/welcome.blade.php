@extends('layouts.app')
@section('header')
  <div class="row">
    <div class="top-bar">
      <div class="top-bar-left">
        <div class="row tm-60">
          <div class="logo small-12 columns">
            <a href="{!! url('/') !!}" class="logo-main"><span>Artisan</span><br> pixelworks</a>
            <p class="logo-tagline">A Digital Strategy &amp; Creative Lab by <a href="{{ url('//:tongoi.com') }}" class="bold text-shadow duration">@oburatongoi</a>
            </p>
          </div>
        </div>
      </div>
      <div class="top-bar-right">
        <ul class="main-nav small-12 small-centered columns text-center tm-60 bm-40">
          <li class="nav-link-white"><a href="{{ url('philosophy') }}">My Philosophy</a></li>
          <li class="nav-link-white"><a href="{{ url('work') }}">My Work</a></li>
          <li class="nav-link-white"><a href="{{ url('contact') }}">Contact Me</a></li>
        </ul>
      </div>
    </div>
  </div>
@endsection
@section('content')
  <div class="row philosophy-banner">
    <div class="welcome-text text-shadow small-12 medium-8 large-6 small-centered columns">
      <p>Let's modernize your online presence and grow your brand.</p>
    </div>
    <div id="bg-img" style="background-image: url('img/cover-8.jpeg');"></div>
    {{-- <div id="bg-dark"></div> --}}
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
