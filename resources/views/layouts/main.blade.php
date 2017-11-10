<!doctype html>
<html lang="nl">
    <head>
      @include('partials._head')
      @yield('customCss')
    </head>
    <body>
      @include('partials._navbar')
      @include('partials._header_homepage')
      @yield('content')
      @yield('script')
      @include('partials._javascript')
    </body>
</html>
