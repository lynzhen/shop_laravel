<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{  csrf_token() }}}">
    <title>shop_laravel</title>
    <link rel="stylesheet" href="{{ min(['css/app.css']) }}">
</head>
<body>
    <div id="app" class="{{ route_class() }}-page">
        @include('template.header')
        <div class="container">
            @yield('content')
        </div>
        @include('template.footer')
    </div>
    <script src="{{  min(['js/app.js']) }}"></script>
</body>
</html>