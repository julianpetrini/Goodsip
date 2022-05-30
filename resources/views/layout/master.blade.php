<!DOCTYPE html>
<html lang="en"><head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- here the value is filled in from the "title" section of a blade template,
    which this layout "extended" -->
   <title>@yield('title')</title>
</head>
<body>
   <!-- the value of the "title" section of a blade template is also filled in here,
    which this layout "extended"-->
   <h1><a href="/messages">@yield('title')</a></h1>
   <!-- here the value is filled in from the "content" section of a blade template,
    which this layout "extended"-->
   @yield('content')
   <!-- here the php function date() is called with the format pattern 'd.m.Y'
     and output in html-->
   <div><b>Local time: {{date('d.m.Y')}}</b></div>   
</body>
</html>