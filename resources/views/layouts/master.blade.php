<!DOCTYPE html>
<html lang="en">

    <head>
        @include('layouts.head-tag')
        @yield('head-tag')
    </head>

    <body>
        @include('layouts.header')
        @yield('content')


        @yield('script')
    </body>

</html>
