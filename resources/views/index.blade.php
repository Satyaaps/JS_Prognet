<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <title>ShoeNOW! | Koleksi Sepatu Anak Muda!</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/font-awesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text.css" href="{{ asset('assets/vendors/slick-carousel/slick.css') }}">
    <link href="{{ asset('assets/vendors/ace-responsive-menu/ace-responsive-menu.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/aos/aos.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">
</head>
<body>
    <!-- Header -->
    <header class="main-header">
        <div class="container">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <h2><span>Shoe</span>NOW!</h2>
                </a>
            </div>
            <!-- Navbar -->
            <nav class="mainNav">
                <!-- Menu Toggle btn -->
                <div class="menu-toggle">
                    <h3>Menu</h3>
                    <button type="button" id="menu-btn">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Responsive Menu Structure -->
                <!-- Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
                <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                    <li>
                        <a href="{{ url('/') }}" class="active">
                            <span class="title">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}">
                            <span class="title">About Us</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/services') }}">
                            <span class="title">Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="title">Pages</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- Level Two -->
                        <ul class="sub-menu" style="display: none;">
                            <li>
                                <a href="{{ url('/pricing') }}">
                                    <span class="title">Pricing</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/portfolio') }}">
                                    <span class="title">Portfolio</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/error') }}">
                                    <span class="title">404 Page</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="title">Blog</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- Level Two -->
                        <ul class="sub-menu" style="display: none;">
                            <li>
                                <a href="{{ url('/blog') }}">Blog</a>
                            </li>
                            <li>
                                <a href="{{ url('/blog-single-post') }}">Blog Single</a>
                            </li>
                        </ul>
                    </li>
                    <li class="last">
                        <a href="{{ url('/contact') }}">
                            <span class="title">Contact Us</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- End Navbar -->

    <!-- Rest of your HTML content -->

    <!-- JS Script Files -->
    <!-- Global Vendor -->
    <script src="{{ asset('assets/vendors/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery.migrate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>

    <!-- Components Vendor -->
    <script src="{{ asset('assets/vendors/slick-carousel/slick.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/ace-responsive-menu/ace-responsive-menu.js') }}"></script>

    <!-- Plugin Initialize -->
    <script src="{{ asset('assets/js/global.js') }}"></script>
    <script src="{{ asset('assets/vendors/carousel.js') }}"></script>
    <!-- END JAVASCRIPTS -->
</body>
</html>
