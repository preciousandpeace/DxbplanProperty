<!doctype html>
<html lang="en">
<head>
    @yield('head')
    <title> @yield('title')</title>
</head>
<body>
@yield('header_navbar')
@yield('main')
@yield('footer')
@yield('script')
</body>
</html>