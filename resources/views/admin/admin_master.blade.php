<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    @include('admin.includes.meta')

    <title>@yield('title')</title>

 @include('admin.includes.css')
  </head>

  <body>

   @include('admin.includes.sidebar')

   @include('admin.includes.header')

  @include('admin.includes.rigthbar')

    @yield('content')

   @include('admin.includes.js')
  </body>
</html>
