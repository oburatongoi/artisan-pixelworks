<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{{{ $title or 'Artisan PixelWorks'}}}</title>
  <link href='{!! url('//fonts.googleapis.com/css?family=Rajdhani:300,600') !!}' rel='stylesheet' type='text/css'>
  <link href='{!! url('//fonts.googleapis.com/css?family=Josefin+Slab:400,600') !!}' rel='stylesheet' type='text/css'>
  <link href='{!! asset('css/app.css') !!}' rel="stylesheet" type="text/css">
</head>
<body>
  <div class="wrapper">
    <div class="inner-wrapper">
      @yield('header')
      @yield('content')
    </div>
    @yield('footer')
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    @yield('scripts')
  </div>
</body>
</html>
