<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{{{ $title or 'Artisan PixelWorks'}}}</title>
  <link href='{!! url('//fonts.googleapis.com/css?family=Rajdhani:300,400,600') !!}' rel='stylesheet' type='text/css'>
  <link href='{!! url('//fonts.googleapis.com/css?family=Josefin+Slab:400,600') !!}' rel='stylesheet' type='text/css'>
  <link href='{!! asset('css/foundation.css') !!}' rel="stylesheet" type="text/css">
  <link href='{!! asset('css/artisanpw.css') !!}' rel="stylesheet" type="text/css">
  <link href='{!! asset('css/app.css') !!}' rel="stylesheet" type="text/css">
</head>
<body>
  <div class="wrapper">
    @yield('header')
    @yield('content')
    @yield('footer')
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    @yield('scripts')
  </div>
</body>
</html>
