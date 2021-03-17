<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My shop - @yield('title')</title>
    @stack('styles')
</head>
<body>
     @yield('page')
     @stack('scripts')
</body>
</html>