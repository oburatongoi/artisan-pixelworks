@extends('layouts.app')
@section('header')
  @include('pages.includes._main_nav')
@endsection
@section('content')
  <div class="welcome-banner">
    <div class="welcome-text text-shadow">
      <p class="tagline"><span class="type-me">I create products that thrive on the web.</span></p>
      <p class="action-button">
        <a href="/hire">Hire Me</a>
      </p>
    </div>
    <div id="bg-img"></div>
  </div>
@endsection
@section('footer')
  <div class="footer fixed-footer">
    <p class="copyright">&copy; {!! date('Y') !!} artisan.pw  All rights reserved.</p>
  </div>
@endsection
@section('scripts')
  <script src="{{ url('vendor/typed.min.js') }}"></script>
@endsection
