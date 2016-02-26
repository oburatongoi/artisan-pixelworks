@extends('layouts.app')
@section('header')
  @include('pages.includes._main_nav')
@endsection
@section('content')
  {{-- <div id="particles-js"></div> --}}
  <div class="welcome-banner">
    <div class="welcome-text text-shadow">
      {{-- <p><span class="type-me">Let's modernize your online presence<br> and grow your audience.</span></p> --}}
      <p><span class="type-me">I create products that thrive on the web.</span></p>
    </div>
    <div id="bg-img" style="background: linear-gradient(-110deg, rgba(72,34,125,0.85) 0%, rgba(47,86,156,0.85) 100%), url('img/cover-8.jpeg'); background-repeat: no-repeat, no-repeat; background-position: center, center; background-size: cover;">
    </div>
  </div>
@endsection
@section('footer')
  <div class="footer">
    <p class="copyright">&copy; {!! date('Y') !!} artisan.pw  All rights reserved.</p>
  </div>
@endsection
@section('scripts')
  <script src="{{ url('vendor/typed.min.js') }}"></script>
@endsection
