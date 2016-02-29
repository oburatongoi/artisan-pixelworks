@extends('layouts.app')
@section('header')
  @include('pages.includes._main_nav')
@endsection
@section('content')
  <div class="philosophy-banner">
    <div class="paragraph text-shadow">
      <p>A pixel, well placed, wields great power.<br>Give each a purpose, and watch a website come alive&#8212;inviting curiosity, evoking emotion, and inspiring action; all as its natural self-expression.</p><p>I am meticulous about design, and obsess over every pixel to create products that both deliver and delight.</p>
      <p class="action-button">
        <a href="/hire">Hire Me</a>
      </p>
    </div>
  </div>
  <div id="philosophy-background"></div>
@endsection
@section('footer')
  <div class="footer">
    <p class="copyright">&copy; {!! date('Y') !!} artisan.pw  All rights reserved.</p>
  </div>
@endsection
