<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Graphic Systems</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- META TAGS -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js">
    </script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <!-- select picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
            <a>Graphic-Systems</a>
        </div>
        <div class="navbar-links">
            <a href="">Categories <i class="fas fa-angle-down"></i></a>
            <a href="">Stocklist</a>
            <a href="">Services</a>
            <a href="">About us</a>
            <a href="">Contact</a>
            <a href="">Newsletter</a>
            <a href="">References</a>
            <a href=""><img src="/images/country-icons/uk-flag.png"></a>
        </div>
        <div class="navbar-search">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Search..">
        </div>
    </div>

    @yield('content')


    <!-- Footer -->
    <div class="footer">
        <div class="footer-links">

        </div>
        <div class="lower-footer">
            <div class="footer-logo">
                <a>Graphic-Systems</a>
            </div>
            <div class="footer-desc">
                <a href="">Address 123</a>
                <a href="">City</a>
                <a href="">Phone +123 123 123</a>
                <a href="">Fax +123 123 123</a>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>

</html>
