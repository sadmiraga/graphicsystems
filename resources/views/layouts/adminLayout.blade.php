<!DOCTYPE html>
<html class=''>

<head>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/alert.js') }}"></script>


    <meta charset='UTF-8'>

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>

</head>

<body>

    <body class="sidebar-is-reduced">

        <div class="l-sidebar">
            <div class="logo">


                <div class="c-header-icon js-hamburger">
                    <div class="hamburger-toggle">
                        <span class="bar-top"></span>
                        <span class="bar-mid"></span>
                        <span class="bar-bot"></span>
                    </div>
                </div>
            </div>
            <div class="l-sidebar__content">
                <nav class="c-menu js-menu">
                    <ul class="u-list">


                        <!-- website -->
                        <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Website">
                            <div class="c-menu__item__inner"><i class="fa fa-home"></i>
                                <div class="c-menu-item__title"><span>Website</span></div>
                            </div>
                        </li>

                        <!-- add machine -->
                        <li onclick="location.href='/new-machine'" class="c-menu__item has-submenu"
                            data-toggle="tooltip" title="New machine">
                            <div class="c-menu__item__inner"><i class="fa fa-plus-circle"></i>
                                <div class="c-menu-item__title"><span>New Machine</span></div>
                            </div>
                        </li>

                        <!-- machines -->
                        <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Listing">
                            <div class="c-menu__item__inner"><i class="fas fa-list-alt"></i>
                                <div class="c-menu-item__title"><span>Listings</span></div>
                            </div>
                        </li>

                        <!-- subscribers -->
                        <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Subscribers">
                            <div class="c-menu__item__inner"><i class="fa fa-users"></i>
                                <div class="c-menu-item__title"><span>Subscribers</span></div>
                            </div>
                        </li>

                        <!-- categories -->
                        <li onclick="location.href='/categories'" class="c-menu__item has-submenu" data-toggle="tooltip"
                            title="Categories">
                            <div class="c-menu__item__inner"><i class="fa fa-cogs"></i>
                                <div class="c-menu-item__title"><span>Categories</span></div>
                            </div>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </body>
    <main class="l-main">
        <div class="content-wrapper content-wrapper--with-bg">
            @yield('adminContent')
        </div>
    </main>
    <script
        src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'>
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='https://use.fontawesome.com/2188c74ac9.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script>
        "use strict";

        var Dashboard = function() {
            var global = {
                tooltipOptions: {
                    placement: "right"
                },
                menuClass: ".c-menu"
            };

            var menuChangeActive = function menuChangeActive(el) {
                var hasSubmenu = $(el).hasClass("has-submenu");
                $(global.menuClass + " .is-active").removeClass("is-active");
                $(el).addClass("is-active");

                // if (hasSubmenu) {
                // 	$(el).find("ul").slideDown();
                // }
            };

            var sidebarChangeWidth = function sidebarChangeWidth() {
                var $menuItemsTitle = $("li .menu-item__title");

                $("body").toggleClass("sidebar-is-reduced sidebar-is-expanded");
                $(".hamburger-toggle").toggleClass("is-opened");

                if ($("body").hasClass("sidebar-is-expanded")) {
                    $('[data-toggle="tooltip"]').tooltip("destroy");
                } else {
                    $('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
                }
            };

            return {
                init: function init() {
                    $(".js-hamburger").on("click", sidebarChangeWidth);

                    $(".js-menu li").on("click", function(e) {
                        menuChangeActive(e.currentTarget);
                    });

                    $('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
                }
            };
        }();

        Dashboard.init();
        //# sourceURL=pen.js

    </script>
</body>

</html>
