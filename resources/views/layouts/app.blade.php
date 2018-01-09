<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"...>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sheep</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
@include('partials.menus.main')
@include('partials.flash')
@yield('content')

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="{{asset('js/app.js')}}">
    window.$ = window.jQuery = require('jquery');

</script>


@yield('scripts')
</body>

</html>