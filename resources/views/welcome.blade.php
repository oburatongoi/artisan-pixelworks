@extends('layouts.app')
@section('header')
  @include('pages.includes._main_nav')
@endsection
@section('content')
  {{-- <div id="particles-js"></div> --}}
  <div class="welcome-banner">
    <div class="welcome-text text-shadow">
      <p>Let's <span>modernize</span> your online presence<br> and grow <span>your brand</span>.</p>
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
  {{-- <script src="{{ url('vendor/particles/particles.min.js') }}"></script>
  <script charset="utf-8">
    particlesJS.load('particles-js', '{{ url('public/vendor/particles/particlesjs.json') }}', function() {
      console.log('callback - particles.js config loaded');
    });
  </script> --}}
@endsection
