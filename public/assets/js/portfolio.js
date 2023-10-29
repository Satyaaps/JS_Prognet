(function($) {
	'use strict';
  
	// Inisialisasi plugin Ace Responsive Menu
	$("#respMenu").aceResponsiveMenu({
	  resizeWidth: '768', // Set the same in Media query       
	  animationSpeed: 'fast', //slow, medium, fast
	  accoridonExpAll: false // Expands all the accordion menu on click
	});
  
	// Inisialisasi plugin AOS (Animate On Scroll)
	AOS.init();
  
	// Mengaktifkan tooltips & popovers (tooltip dan popover Bootstrap)
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip();
	  $('[data-toggle="popover"]').popover();
  
	  // Menutup popovers dengan mengklik di tempat lain
	  $('.popover-dismiss').popover({
		trigger: 'focus'
	  });
	});
  
	// Bootstrap Fixed Header (Header tetap saat di-scroll)
	$(function() {
	  // Cek apakah ada kelas latar belakang (background class) saat memuat
	  if ($('.js-navbar-scroll').offset().top > 150) {
		$('.js-navbar-scroll').addClass('navbar-bg-onscroll');
	  }
  
	  // Cek untuk menambahkan kelas latar belakang saat melakukan scroll
	  $(window).on('scroll', function() {
		var navbarOffset = $('.js-navbar-scroll').offset().top > 150;
		if (navbarOffset) {
		  $('.js-navbar-scroll').addClass('navbar-bg-onscroll');
		} else {
		  $('.js-navbar-scroll').removeClass('navbar-bg-onscroll');
		  $('.js-navbar-scroll').addClass('navbar-bg-onscroll--fade');
		}
	  });
	});
  
	// Scroll ke bagian tertentu pada halaman
	$(function() {
	  $('a[href*=#js-scroll-to-]:not([href=#js-scroll-to-])').on('click', function() {
		if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: target.offset().top - 10
			}, 1000);
			return false;
		  }
		}
	  });
	});
  
  }(jQuery));
  