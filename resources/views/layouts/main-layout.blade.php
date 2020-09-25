<!DOCTYPE html>
<html lang="en" dir="ltr">

    @include('partials.head')

  <body>
    <div class="container">

      @include('partials.header')

      @yield('content')

      @include('partials.footer')

    </div>

  </body>
</html>
