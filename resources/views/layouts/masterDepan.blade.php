<!doctype html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Laravel</title>
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
      <link rel="icon" type="image/png" href="{{ asset('img/logo/lg2.png') }}">
   </head>
   @yield('content')
   <script src="{{ asset('js/app.js') }}"></script>
   @yield('js-content')
</html>