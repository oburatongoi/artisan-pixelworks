<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{{{ $title or 'Artisan PixelWorks'}}}</title>
  <link href='{!! url('https://fonts.googleapis.com/css?family=Rajdhani:300') !!}' rel='stylesheet' type='text/css'>
  <link href='{!! url('https://fonts.googleapis.com/css?family=Josefin+Sans:300') !!}' rel='stylesheet' type='text/css'>
  <link href='{!! asset('css/app.css') !!}' rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
