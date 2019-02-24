<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="{{url('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{url('css/app.css')}}">

    <title>{{config('app.name', 'Moja strona')}}</title>
</head>

<body>
    @include('inc/navbar')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
