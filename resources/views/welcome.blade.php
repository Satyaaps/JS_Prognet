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
    <!-- End Navbar -->

    <section class="wt-section hero-large position-relative overflow-hidden mt-md-2"> 
				<div class="hero-img bg-overlay" data-overlay="0" style="background-image: url(assets/img/intro/shoe_store_02.jpg);" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="50"></div>
				<div class="container">
				<div class="row align-items-center my-5">
					<div class="col-md-6 py-5" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="100">
						<!-- heading -->
						<h1 class="text-uppercase mb-3 display-4 font-weight-bolder">
							TOKO SEPATU ANAK MUDA!
						</h1>
						<p class="mb-4 h5">Ubah Egomu, Tunjukan Gayamu!</p> 
						<div class=" mb-0">
							<a href="#" class="btn btn-pill btn-primary mr-3 mb-md-0 mb-3">
								Lihat produk kami!
							</a>
						</div>
					</div> 
				</div>
			</div>
		</section>  
    <!-- End Header -->

    <main role="main"> 
	<section class="wt-section">
        <div class="container">
		<div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
          <div class="col-md-8 text-center w-md-50 mx-auto mb-0 ">
            <h2 class="mb-md-2">Our Services</h2>
            <p class="lead text-muted">Ini adalah pelayanan utama kami yang dapat membantu anda untuk menjelajahi situs ini!</p>
          </div>
		</div> 
          <div class="row">  
			<div class="col-md-4">
                <div class="bg-white p-4 mb-4 text-center border rounded-md py-5" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="50">
						<div class="mb-4"><img src="assets/img/services/1.svg" width="200px" alt=""/></div> 
                        <h5 class="mb-2">Consulting!</h5>
                        <p class="text-muted">Kamu dapat berkonsultasi dengan kami mengenai sepatu apa yang cocok dengan kamu ataupun fashion kamu saat ini!</p>
                        <a href="#" class="btn btn-pill btn-primary mt-4">Read More</a> 
                </div>
            </div>
					<div class="col-md-4">
                <div class="bg-white p-4 mb-4 text-center border rounded-md py-5" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="150">
                      <div class="mb-4"><img src="assets/img/services/2.png" width="200px" alt=""/></div> 
                        <h5 class="mb-2">Cheaper!</h5>
                        <p class="text-muted">Kami juga tidak lupa untuk menyediakan barang dengan harga yang terjangkau untuk semua pelanggan kami.</p>
                        <a href="#" class="btn btn-pill btn-primary mt-4">Read More</a> 
                </div>
            </div>
			
			<div class="col-md-4">
                <div class="bg-white p-4 mb-4 text-center border rounded-md py-5" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="200">
						<div class="mb-4"><img src="assets/img/services/3.png" width="200px" alt=""/></div> 
                        <h5 class="mb-2">Up-to-date!</h5>
                        <p class="text-muted">Kami menyediakan barang dengan kualitas bagus tetapi tidak selalu itu-itu aja loh! kami juga selalu update apa aja yang baru dan menyarankannya ke seluruh pelanggan kami.</p>
                        <a href="#" class="btn btn-pill btn-primary mt-4">Read More</a> 
                </div>
            </div>
          </div>  
        </div>
      </section>
	  
	<section class="wt-section bg-light">
    <div class="container">
        <div class="row justify-content-md-center text-center">
            <div class="col-md-8" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="50">
                <h1 class="mb-md-4">Here's all type of your shoes!</h1>
                <p class="lead text-muted">Kami menyediakan beragam kategori untuk kamu lihat! kamu dapat mengecek semua kategorinya dengan menekan tombol dibawah!</p>

                <div class="mt-md-5">
                    <a href="#" class="btn btn-primary btn-pill">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="wt-section">
    <div class="container"> 
        <div class="row justify-content-md-center align-items-center text-center mb-lg-5 mb-4 pb-lg-5" data-aos="fade-left" data-aos-easing="linear" data-aos-delay="50">
            <div class="col-md-6 px-md-5"> 
                <h2 class="mb-md-4 mt-3">We have local product tho!</h2>
                <p class="text-muted">Produk yang kita sediakan tidak hanya berasal dari luar negri alias impor loh, tetapi ada juga brand lokal yang tidak mau kalah saing dan kami sudah menyediakan yang terbaik untuk anda, yuk di cek!</p>
                <div class="mb-md-5 mb-4">
                    <a href="#" class="btn btn-primary btn-pill">Read More</a>
                </div>
            </div>
            <div class="col-md-6">
                <img class="rounded mw-100" src="assets/img/intro/selling.jpg"width="400px" alt="">
            </div>
        </div> 
        
    </div>
</section>
<div class="card bg-primary border-0 rounded-0 p-5">
    <div class="container">
      <div class="row justify-content-between align-items-center text-center text-md-left" data-aos="fade-in" data-aos-easing="linear" data-aos-delay="50">
                    <div class="col-md-8">
                        <h5 class="mb-1">Ayo berikan kritikmu!</h5>
                        <p class="mb-0">Kami masih harus terus berkembang dan memperbaiki apapun yang kurang dari situs kami dan kami mohon bantuan dan masukan dari kamu untuk kami berbenah diri lagi!</p>
                    </div>
                    <div class="col-md-4 text-lg-right mt-md-0 mt-3">
                        <a href="contact.html" class="btn btn btn-outline-light btn-pill">Request Comment</a>
                    </div>
                </div> 
    </div>
</div> 
  <div class="wt-section pb-0">
    <div class="container">
        <div class="row justify-content-between align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="50">
            <div class="col-md-5"> 
                <h2 class="mb-4">Sejarah industri e-commerce di Indonesia</h2>
                <p class="text-muted">Penjualan online di Indonesia telah mengalami transformasi signifikan selama beberapa tahun terakhir, dengan pertumbuhan e-commerce yang pesat dan pengaruh positif dari adopsi teknologi dan perangkat seluler. Dengan munculnya berbagai marketplace online dan aplikasi e-commerce yang populer, konsumen di Indonesia sekarang memiliki akses yang lebih mudah untuk membeli berbagai produk dan layanan dari kenyamanan rumah mereka. Pandemi COVID-19 juga mempercepat peralihan ke belanja online, yang semakin menjadi norma dalam kehidupan sehari-hari. Hal ini telah menciptakan peluang besar bagi para penjual dan pelaku bisnis untuk memanfaatkan pasar yang terus tumbuh di negara ini.</p>
            </div>
            <div class="col-md-6">
                <img src="assets/img/intro/e-commerce.svg" class="w-100" alt="">
            </div>
        </div>
    </div>
</div> 
 
      <section class="wt-section bg-light">
        <div class="container">
          <header class="text-center w-md-50 mx-auto mb-5">
            <h2 class="h1 mb-0">Our Partner's</h2>
          </header>

          <div class="row justify-content-between align-items-center" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="50">
            <div>
              <img class="wt-clients__image" src="assets/img/clients/img1.png" alt="Image Description">
            </div> 
			<div>
              <img class="wt-clients__image" src="assets/img/clients/img4.png" alt="Image Description">
            </div>
            <div>
              <img class="wt-clients__image" src="assets/img/clients/img2.png" alt="Image Description">
            </div>
            <div>
              <img class="wt-clients__image" src="assets/img/clients/img3.png" alt="Image Description">
            </div>
            <div>
              <img class="wt-clients__image" src="assets/img/clients/img7.jpg" alt="Image Description">
            </div>           
            <div>
              <img class="wt-clients__image" src="assets/img/clients/img5.png" alt="Image Description">
            </div>
            <div>
              <img class="wt-clients__image" src="assets/img/clients/img6.png" alt="Image Description">
            </div>
            <div>
              <img class="wt-clients__image" src="assets/img/clients/img8.png" alt="Image Description">
            </div>
          </div>
        </div>
      </section> 
    </main>

    <!-- Footer --> 
<footer class="wt-section bg-dark main-footer">
<div class="container">
<div class="row">

<div class="col-sm-4 col-md  col-6 col mb-4">
<h5 class="mb-4">Site links</h5>

<ul class="list-inline">
<li class="list-block-item mx-2"><a href="#">Home</a></li>
<li class="list-block-item mx-2"><a href="#">About Us</a></li>
<li class="list-block-item mx-2"><a href="#">Services</a></li>
<li class="list-block-item mx-2"><a href="#">Portfolio</a></li>
<li class="list-block-item mx-2"><a href="#">Pricing</a></li>
</ul>

</div>


<div class="col-sm-4 col-md  col-6 col mb-4">
<h5 class="mb-4">Quick links</h5>

<ul class="list-inline">
<li class="list-block-item mx-2"><a href="#">Blog</a></li>
<li class="list-block-item mx-2"><a href="#">Contact Us</a></li>
<li class="list-block-item mx-2"><a href="#">Privacy Policy</a></li>

</div>

<div class=" col-sm-4 col-md col-sm-4 col-12 col mb-4">
<h5 class="mb-4">Reach us</h5>
 
<p><i class="fa fa-location-arrow mr-2"></i> Jl. Pulau Bangka No.15, Denpasar, Bali </p>
<p><i class="fa fa-phone mr-2"></i>  +62 858 8529 0085  </p>
<p><i class="fa fa fa-envelope mr-2"></i> shoenow@help.id  </p>


</div>


<div class="col-sm-4 col-md  col-12 col mb-4">
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
</div> 
</div> 
</footer>
    <!-- End Footer --> 


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
    <script>
    AOS.init();
    </script>
    <!-- END JAVASCRIPTS -->
</body>
</html>
