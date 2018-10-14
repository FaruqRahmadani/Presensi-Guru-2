<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="icon" type="image/png" href="{{ asset('img/logo/lg2.png') }}">
    </head>
    <body>
        <main class="py-5">
            @yield('content')
        </main>
    </body>

    <script src="{{ asset('js/app.js') }}"></script>
    @if (session('alert'))
    <script>notif('{{session('tipe')}}', '{{session('judul')}}', '{{session('pesan')}}')</script>
    @endif
    @if ($errors->count())
    <script>notif('error', 'Ada Kesalahan', '{{$errors->first()}}')</script>
    @endif
</html>