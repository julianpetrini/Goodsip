<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <!-- here the value is filled in from the "title" section of a blade template,
    which this layout "extended" -->
    <title>@yield('title')</title>
    <!-- MY OLD CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- SASS & BOOTSTRAP -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>

    <!-- the value of the "title" section of a blade template is also filled in here,
    which this layout "extended"-->
    <h1 class="prueba"><a href="/messages">@yield('title')</a></h1>
    <!-- here the value is filled in from the "content" section of a blade template,
    which this layout "extended"-->
    @yield('content')
    <!-- here the php function date() is called with the format pattern 'd.m.Y'
     and output in html-->
    <div class="p-3 text-center">
        made with ♥ <br>
        <b>{{ date('d.m.Y') }}</b>
    </div>





</body>

</html>
