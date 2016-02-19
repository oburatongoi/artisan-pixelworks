@extends('layouts.app')
@section('header')
  <div class="logo">
    <p class="logo-small"><span>Artisan</span>.pw</p>
  </div>
  <ul class="menu main-nav tm-30">
    <li class="nav-link selected"><a href="{!! url('/') !!}">Home</a></li>
    <li class="nav-link"><a href="{!! url('philosophy') !!}">My Philosophy</a></li>
    <li class="nav-link"><a href="{!! url('work') !!}">My Work</a></li>
    <li class="nav-link"><a href="{!! url('contact') !!}">Contact Me</a></li>
</ul>
@endsection

<video id="bg-vid" preload="true" src="{!! url('img/waterdrop.mp4') !!}" preload="auto" autoplay loop muted>
    <source src="design.mp4" type="video/mp4" >
    <source src="design.ogv" type="video/ogv" >
   <source src="design.webm" type="video/webm" >
</video>
<script>
var vid = document.getElementById("bg-vid");
vid.playbackRate = 0.5;
</script>
