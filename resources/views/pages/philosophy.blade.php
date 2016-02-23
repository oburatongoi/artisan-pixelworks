@extends('layouts.app')
@section('header')
  @include('pages.includes._main_nav')
@endsection
@section('content')
  <div class="row philosophy-banner">
    <div class="paragraph text-shadow small-12 medium-8 large-6 small-centered columns">
      <p>A pixel, well placed, wields great power.<br>Give each a purpose, and watch a website come alive&#8212;inviting curiosity, evoking emotion, and inspiring action; all as its natural self-expression.</p><p>I am meticulous about design, and obsess over every pixel to create products that both deliver and delight.</p>
    </div>
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
