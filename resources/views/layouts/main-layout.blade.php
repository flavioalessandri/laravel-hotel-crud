<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>

    <title>DbHotel</title>


  </head>
  <body>
    <div class="container">

      @include('partials.header')

      @yield('content')

      @include('partials.footer')

    </div>

  </body>
</html>
