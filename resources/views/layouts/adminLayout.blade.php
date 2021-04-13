<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>



    <!-- Theme style -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <script src="{{ asset('js/alert.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/adminlte.js') }}"></script>


    <!-- overlayScrollbars -->

</head>

<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>




            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">

                <span class="brand-text font-weight-light">Grpahic Systems</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <!-- NEW MACHINE -->
                        <li onclick="location.href='/new-machine'" class="nav-item">
                            <a href="/new-machine" class="nav-link">
                                <i class="fas fa-plus-circle"></i>
                                <p>New Machine</p>
                            </a>
                        </li>

                        <!-- MY MACHINES -->
                        <li class=" nav-item">
                            <a href="/listings" class="nav-link">
                                <i class="fas fa-list-alt"></i>
                                <p>Listings</p>
                            </a>
                        </li>

                        <!-- SUBSCRIBERS -->
                        <li class=" nav-item">
                            <a href="/subscribers" class="nav-link">
                                <i class="fa fa-users"></i>
                                <p>Subscribers</p>
                            </a>
                        </li>

                        <!-- NEWSLETTER -->
                        <li class=" nav-item">
                            <a href="/newsletter" class="nav-link">
                                <i class="far fa-newspaper"></i>
                                <p>Newsletter</p>
                            </a>
                        </li>

                        <!-- CATEGORIES -->
                        <li onclick="location.href='/categories'" class=" nav-item">
                            <a href="/categories" class="nav-link">
                                <i class="fa fa-cogs"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class=" content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">

            @yield('content')
        </div>



        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

</body>

</html>
