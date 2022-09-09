<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <div class="main">
        @yield('content')
    </div>
    <div class="footer">
        <div id="copyright text-right">© Copyright Théo Ramassamy</div>
    </div>
</body>
</html>