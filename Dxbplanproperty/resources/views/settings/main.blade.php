<!doctype html>
<html lang="en">
<head>
    @yield('head')
    <title> @yield('title')</title>
</head>
<body>

@yield('header_navbar')
@yield('main')
<footer class="footer">
    <div class="container footer-inner">
            @yield('footer')
    </div>
</footer>

@yield('script')
</body>
</html>