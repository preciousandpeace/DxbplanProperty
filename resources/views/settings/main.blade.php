<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
