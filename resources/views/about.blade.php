<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <title>NeuBizz | About us | Bootstrap 4 Template by WebThemez</title>

    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie-edge">
    <meta name="keywords" content="Bootstrap Theme, Freebies, UI Kit, MIT license">
    <meta name="description" content="Bootstrap 4 Template by WebThemez">
    <meta name="author" content="webthemez.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/font-awesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/slick-carousel/slick.css') }}">
    <link href="{{ asset('assets/vendors/ace-responsive-menu/ace-responsive-menu.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/aos/aos.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">
</head>

<body>
    <div class="hidden-xs hidden-sm nav-top bg-primary py-2">
        <!-- Nav Top Content -->
    </div>

    <!-- Header and Content -->

    <footer class="wt-section bg-dark main-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md col-sm-4 col-12 col mb-4">
                    <h5 class="mb-4">Reach us</h5>
                    <p><i class="fa fa-location-arrow mr-2"></i> #123, Manhatt 7 Avenu, NYC</p>
                    <p><i class="fa fa-phone mr-2"></i> +1-1234-567-987</p>
                    <p><i class="fa fa-envelope mr-2"></i> info@yourdomain.com</p>
                </div>

                <div class="col-sm-4 col-md col-6 col mb-4">
                    <h5 class="mb-4">Site links</h5>
                    <ul class="list-inline">
                        <li class="list-block-item mx-2"><a href="{{ url('/') }}">Home</a></li>
                        <li class="list-block-item mx-2"><a href="{{ route('about') }}">About Us</a></li>
                        <li class="list-block-item mx-2"><a href="{{ route('services') }}">Services</a></li>
                        <li class="list-block-item mx-2"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                        <li class="list-block-item mx-2"><a href="{{ route('pricing') }}">Pricing</a></li>
                    </ul>
                </div>

                <div class="col-sm-4 col-md col-6 col mb-4">
                    <h5 class="mb-4">Quick links</h5>
                    <ul class="list-inline">
                        <li class="list-block-item mx-2"><a href="{{ route('blog') }}">Blog</a></li>
                        <li class="list-block-item mx-2"><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li class="list-block-item mx-2"><a href="#">Privacy Policy</a></li>
                        <li class="list-block-item mx-2"><a href="http://webthemez.com">Terms & Conditions</a></li>
                    </ul>
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
            <div class="row">
                <div class="col-md-12 pt-4">
                    <p class="text-center copyrights"><a class="text-white" href="https://webthemez.com/free-bootstrap-templates/">Bootstrap Theme</a> by WebThemez. <br>© All Rights Reserved</p>
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
