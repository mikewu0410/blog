<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('page-name')
            <h3>This page is：</h3>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
