<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href=" {{asset('css/app.css')}} ">
  <title>Comics</title>
</head>
<body>

  @include('partial.header')

  @yield('content')
  
  @include('partial.footer')
  
</body>
</html>