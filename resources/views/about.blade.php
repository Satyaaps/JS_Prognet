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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
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
                            <a href="{{ url('/market') }}">
                                <span class="title">Market</span>
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
		<div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
            <div class="col-md-8 text-center w-md-50 mx-auto mb-0 ">
              <h2 class="mb-md-2">Our Services</h2>
              <p class="lead text-muted">Ini adalah pelayanan utama kami yang dapat membantu anda untuk menjelajahi situs ini!</p>
            </div>
          </div> 
    </div>

    <!-- Header and Content -->

    <footer class="wt-section bg-dark main-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md col-sm-4 col-12 col mb-4">
                    <h5 class="mb-4">Reach us</h5>
                    <p><i class="fa fa-location-arrow mr-2"></i> Jl. Pulau Bangka No.15, Denpasar, Bali </p>
                    <p><i class="fa fa-phone mr-2"></i>  +62 858 8529 0085  </p>
                    <p><i class="fa fa fa-envelope mr-2"></i> shoenow@help.id  </p>
                </div>

                <div class="col-sm-4 col-md col-6 col mb-4">
                    <h5 class="mb-4">Site links</h5>
                    <ul class="list-inline">
                        <li class="list-block-item mx-2"><a href="#">Home</a></li>
                        <li class="list-block-item mx-2"><a href="#">About Us</a></li>
                        <li class="list-block-item mx-2"><a href="#">Services</a></li>
                        <li class="list-block-item mx-2"><a href="#">Portfolio</a></li>
                        <li class="list-block-item mx-2"><a href="#">Pricing</a></li>
                        </ul>
                </div>

                <div class="col-sm-4 col-md col-6 col mb-4">
                    <h5 class="mb-4">Quick links</h5>
                    <ul class="list-inline">
                        <li class="list-block-item mx-2"><a href="#">Blog</a></li>
                        <li class="list-block-item mx-2"><a href="#">Contact Us</a></li>
                        <li class="list-block-item mx-2"><a href="#">Privacy Policy</a></li>
                </div>

                <div class="col-sm-4 col-md col-12 col mb-4">
                    <h5 class="mb-4">Follow us</h5>
                    <ul class="social_footer_ul list-inline text-left mb-0">
                        <li class="list-inline-item mx-2"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item mx-2"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item mx-2"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li class="list-inline-item mx-2"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

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
