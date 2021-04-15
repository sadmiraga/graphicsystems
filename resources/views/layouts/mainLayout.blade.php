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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
            <div class="contact-dropdown">
                <a class="dropbtn">Contact</a>
                <div id="myDropdown" class="dropdown-content">
                    <div class="close-contact"></div>
                    <div class="container">
                        <div class="row">
                            <div class="contact-text">
                                <h5>How do you like to contact us?</h5>
                                <p>Our support team is available from Monday to Friday between 09:00 - 17:00h (CET)</p>
                            </div>
                            <div class="col-6 col-6-phone">
                                <div class="wrap">
                                    <i class="fas fa-phone"></i>
                                    <p>+49 123 123 123</p>
                                </div>
                            </div>
                            <div class="col-6 col-6-mail">
                                <div class="wrap" onclick="sendEmail();">
                                    <i class=" fas fa-envelope"></i>
                                    <p>info@graphic-systems.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/index/#index-parallax-id">Newsletter</a>
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
        <div class="container footer-container">
            <div class=" footer">
                <div class="row">
                    <div class="col-4">
                        <div class="footer-logo">
                            <a>Graphic-Systems</a>
                        </div>
                        <div class="footer-details">
                            <p class="light">Graphic Systems</p>
                            <p class="light">Address 123</p>
                            <p class="light">12345 City</p>
                            <p class="light">Country</p>

                            <p class="bold" style="margin-top: 2.5rem;">Phone: +49 123 123</p>
                            <p class="bold">Fax: +49 123 123</p>
                            <p class="bold" style="margin-top: 1rem;">E-mail: info@graphic-systems.com</p>
                        </div>
                    </div>
                    <div class="col-2">
                        <p class="bold">Information</p>

                        <a class="light" href="/stocklist/0/0">
                            <p>Stocklist</p>
                        </a>
                        <a class="light" href="">
                            <p>Services</p>
                        </a>
                        <a class="light" href="">
                            <p>Contact</p>
                        </a>
                        <a class="light" href="">
                            <p>References</p>
                        </a>
                    </div>
                    <div class="col-2">
                        <p class="bold">Terms</p>

                        <a class="light" href="">
                            <p>Privacy Policy</p>
                        </a>
                        <a class="light" href="">
                            <p>Tech guide</p>
                        </a>
                    </div>
                    <div class="col-4">
                        <p class="bold" style="margin-top: 1.4rem;">Subscribe to our Newsletter</p>
                        <input type="text" placeholder="Email Address">
                        <p class="light" style="color: #356982">We do not share your Information.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="lower-footer">
            <div class="container">
                <div class="row">
                    <div class="footer-desc">
                        <p class="light" style="color: #659299">2021 Screenshot.dev | ALL RIGHT RESERVED BY
                            GRAPHIC-SYSTEMS</p>
                    </div>
                    <div class="footer-socials">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-linkedin-in"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it


        $(document).ready(function() {
            var clicked = "false";
            var windowClick = "";
            $(".dropbtn").click(function() {
                console.log(clicked);
                if (clicked == "false") {
                    $(".dropdown-content").slideDown();
                    clicked = "true";
                    $("body").css("overflow", "hidden");
                } else {
                    $(".dropdown-content").slideUp();
                    clicked = "false";
                    $("body").css("overflow", "scroll");
                }
            });
        });

        $(window).click(function(e) {
            windowClick = e.target.className;

            if (windowClick == "close-contact") {
                $(".dropdown-content").slideUp();
                clicked = "false";
                console.log(clicked);
                $("body").css("overflow", "scroll");
            }
        });

        function sendEmail() {
            window.location = "mailto:xyz@abc.com";
        }

        function callMe() {
            window.location = "callto:123-456-7890";
        }

    </script>
</body>

</html>
