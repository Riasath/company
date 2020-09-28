
<!DOCTYPE html>
<html lang="en">
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php echo"$title";?></title>

	<link rel="stylesheet" type="text/css" href="../front-end/css/fonts.css">
	<link rel="stylesheet" type="text/css" href="../front-end/css/crumina-fonts.css">
	<link rel="stylesheet" type="text/css" href="../front-end/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../front-end/css/grid.css">
	<link rel="stylesheet" type="text/css" href="../front-end/css/base.css">
	<link rel="stylesheet" type="text/css" href="../front-end/css/blocks.css">
	<link rel="stylesheet" type="text/css" href="../front-end/css/layouts.css">
	<link rel="stylesheet" type="text/css" href="../front-end/css/modules.css">
	<link rel="stylesheet" type="text/css" href="../front-end/css/widgets-styles.css">
	<link rel="stylesheet" type="text/css" href="../front-end/css/ion.rangeSlider.css">


	<!--Plugins styles-->

	<link rel="stylesheet" type="text/css" href="../front-end/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" type="text/css" href="../front-end/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="../front-end/css/primary-menu.css">
	<link rel="stylesheet" type="text/css" href="../front-end/css/magnific-popup.css">

	<!--Styles for RTL-->

	<!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->

	<!--External fonts-->
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

</head>


<body class=" ">

<!-- Preloader -->

<div id="hellopreloader">
	<div class="preloader">
		<svg width="58" height="58">
			<g fill="none" fill-rule="evenodd" stroke="#FFF" stroke-width="1.5" transform="translate(2 1)">
				<circle cx="42.601" cy="11.462" r="5" fill="#fff">
					<animate attributeName="fill-opacity" begin="0s" calcMode="linear" dur="1.3s" repeatCount="indefinite" values="1;0;0;0;0;0;0;0"/>
				</circle>
				<circle cx="49.063" cy="27.063" r="5" fill="none">
					<animate attributeName="fill-opacity" begin="0s" calcMode="linear" dur="1.3s" repeatCount="indefinite" values="0;1;0;0;0;0;0;0"/>
				</circle>
				<circle cx="42.601" cy="42.663" r="5" fill="none">
					<animate attributeName="fill-opacity" begin="0s" calcMode="linear" dur="1.3s" repeatCount="indefinite" values="0;0;1;0;0;0;0;0"/>
				</circle>
				<circle cx="27" cy="49.125" r="5" fill="none">
					<animate attributeName="fill-opacity" begin="0s" calcMode="linear" dur="1.3s" repeatCount="indefinite" values="0;0;0;1;0;0;0;0"/>
				</circle>
				<circle cx="11.399" cy="42.663" r="5" fill="none">
					<animate attributeName="fill-opacity" begin="0s" calcMode="linear" dur="1.3s" repeatCount="indefinite" values="0;0;0;0;1;0;0;0"/>
				</circle>
				<circle cx="4.938" cy="27.063" r="5" fill="none">
					<animate attributeName="fill-opacity" begin="0s" calcMode="linear" dur="1.3s" repeatCount="indefinite" values="0;0;0;0;0;1;0;0"/>
				</circle>
				<circle cx="11.399" cy="11.462" r="5" fill="none">
					<animate attributeName="fill-opacity" begin="0s" calcMode="linear" dur="1.3s" repeatCount="indefinite" values="0;0;0;0;0;0;1;0"/>
				</circle>
				<circle cx="27" cy="5" r="5" fill="none">
					<animate attributeName="fill-opacity" begin="0s" calcMode="linear" dur="1.3s" repeatCount="indefinite" values="0;0;0;0;0;0;0;1"/>
				</circle>
			</g>
		</svg>
		<div class="text">Loading ...</div>
	</div>
</div>

<!-- ... end Preloader -->

<!-- Header -->

<div class="top-bar top-bar-dark">
	<div class="container">
		<div class="top-bar-contact">
			<div class="contact-item">
				<img src="../front-end/img/united-states-of-america.png" class="flags" alt="flag">
				<select>
					<option >All</option>
					<option value="2">Farmgate,Dhaka</option>
					<option value="3">Bonosree,Dhaka</option>
				</select>
			</div>

			<div class="contact-item">
				01775-373737
			</div>

			<div class="contact-item">
				<a href="#">info@rtsoftbd.com</a>
			</div>

			<div class="contact-item">
				<span>Mon. - Sat.</span> 10:00 - 21:00
			</div>
		</div>

		<div class="login-block">
			<img src="../front-end/img/signin_dark.png" class="sign-in">
			<a class="js-window-popup" href="#">Sign up</a>
		</div>

		<div class="follow_us">
			<span>Follow us:</span>
			<div class="socials">

				<a href="#" class="social__item">
					<img src="../front-end/svg/circle-facebook.svg" alt="facebook">
				</a>

				<a href="#" class="social__item">
					<img src="../front-end/svg/twitter.svg" alt="twitter">
				</a>

				<a href="#" class="social__item">
					<img src="../front-end/svg/google.svg" alt="google">
				</a>

				<a href="#" class="social__item">
					<img src="../front-end/svg/youtube.svg" alt="youtube">
				</a>

			</div>
		</div>

		<a href="#" class="top-bar-close" id="top-bar-close-js">
			<span></span>
			<span></span>
		</a>

	</div>
</div>

<header class="header" id="site-header">
	<a href="#" id="top-bar-js" class="top-bar-link">
		<i class="seosight-icon seoicon-arrow-to-bottom"></i>
	</a>

	<div class="container">

		<div class="header-content-wrapper">

			<div class="logo">
				<a href="index-2.html" class="full-block-link"></a>
				<img src="../front-end/custom/img/rtsoftbd_logo.png" alt="RTSOFTBD">
				
			</div>

			<nav id="primary-menu" class="primary-menu">

				<a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
					<span class="mob-menu--title">Menu</span>
					<span id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: hidden">
                            <svg width="1000px" height="1000px">
                                <path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                <path id="pathE" d="M 300 500 L 700 500"></path>
                                <path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                            </svg>
                        </span>
				</a>

				<!-- menu-icon-wrapper -->

				<ul class="primary-menu-menu">
					<li class="menu-item-has-children">
						<a href="<?php echo base_url()?>homemenu">Home</a>
					</li>
					
					<li class="has-megamenu menu-item-has-children">
						<a href="#">Software Development</a>

						<div class="megamenu" style="background-image: url('img/menu-bg.png');">
							<div class="megamenu-row">

								<div class="col3">
									<ul>
										<li class="megamenu-item-info">
											<h5 class="megamenu-item-info-title">ENTERPRISE SOLUTION</h5>
											
										</li>

										<li>
											<a href="#">ERP Solutions<i class="seoicon-right-arrow"></i></a>
										</li>
										<li>
											<a href="#">Micro finance Solutions<i class="seoicon-right-arrow"></i></a>
										</li>

										<li>
											<a href="#">Office Management Solutions
												<i class="seoicon-right-arrow"></i></a>
										</li>
										
									</ul>
								</div>
								<div class="col3">
									<ul>
										<li class="megamenu-item-info">
											<h5 class="megamenu-item-info-title">Corporate solutions</h5>
											
										</li>

										<li>
											<a href="36_slider-with-photo.html">E-commerce Solutions<i class="seoicon-right-arrow"></i></a>
										</li>
										<li>
											<a href="25_navigation-flat.html">School Management System<i class="seoicon-right-arrow"></i></a>
										</li>

										<li>
											<a href="37_navigation-with-photo.html">Point of Sale<i class="seoicon-right-arrow"></i></a>
										</li>

										<li>
											<a href="38_photo-elements.html">Storage Management System<i class="seoicon-right-arrow"></i></a>
										</li>

										<li>
											<a href="32_testimonials.html">Our Testimonials<i class="seoicon-right-arrow"></i></a>
										</li>

									</ul>
								</div>
								<div class="col3">
									<ul>

										<li class="megamenu-item-info">
											<h5 class="megamenu-item-info-title">Mobile App & IoT</h5>
											
										</li>

										<li>
											<a href="#">Mobile App development & maintenance<i class="seoicon-right-arrow"></i></a>
										</li>
										<li>
											<a href="#">IoT<i class="seoicon-right-arrow"></i></a>
										</li>
										<li>
											<a href="#">Enterprise & Cloud<i class="seoicon-right-arrow"></i></a>
										</li>
										

									</ul>
								</div>


								<div class="col3">
									<ul>
										<li>
											<div class="google-logo">
												<img src="../front-end/custom/img/basis.png" alt="logo">
												<img src="../front-end/custom/img/iso-header-logo.png" alt="logo">
											</div>

											<p class="google-text">Our company is a member of BASIS.
											and our E-commerce Solution is ISO 9001 certified.
											</p>
										</li>
									</ul>
								</div>

							</div>
						</div>
					</li>
					

					<li class="">
						<a href="03_services.html">Digital Marketing</a>
						<ul class="dropdown">
							<li class="megamenu-item-info">
								<h5 class="megamenu-item-info-title">List of Services</h5>
								<p class="megamenu-item-info-text">Choose a Service</p>
							</li>
							<li class="hover-ver2">
								<a href="05_service_details_localseo.html"><i class="seoicon-pin-map"></i>
									Local SEO
								</a>
							</li>
							<li class="hover-ver2">
								<a href="07_service_email_marketing.html"><i class="seoicon-mail-send"></i>
									Email Marketing
								</a>
							</li>
							<li class="hover-ver2">
								<a href="06_service_detail.html"><i class="seoicon-chat-comment"></i>
									Social Media Marketing
								</a>
							</li>
							<li class="menu-item-has-children hover-ver2">
								<a href="04_service_detail_seo.html">
									<i class="seoicon-search"></i>
									Search Engine Optimization
								</a>
							</li>
							<li class="hover-ver2">
								<a href="08_service_ppc_management.html"><i class="seoicon-button"></i>
									Pay Per Click Management
								</a>
							</li>
							<li class="menu-item-has-children hover-ver2">
								<a href="03_services.html">
									<i class="seoicon-pie-graph-split"></i>
									Services Promo List
								</a>
							</li>
						</ul>
					</li>

					

					<li class="">
						<a href="14_blog.html">Blog</a>
					</li>
					<li class="">
						<a href="22_contacts.html">Contacts</a>
					</li>
				</ul>
			</nav>

			<ul class="nav-add">
				<li class="cart">

					<a href="#" class="js-cart-animate">
						<i class="seoicon-basket"></i>
						<span class="cart-count">0</span>
					</a>

					<div class="cart-popup-wrap">
						<div class="popup-cart">
							<h4 class="title-cart">No products in the cart!</h4>
							<p class="subtitle">Please make your choice.</p>
							<div class="btn btn-small btn--dark">
								<span class="text">view all catalog</span>
							</div>
						</div>
					</div>

				</li>

				<li class="search search_main">
					<a href="#" class="js-open-search">
						<i class="seoicon-loupe"></i>
					</a>
				</li>
			</ul>

			<div class="user-menu open-overlay">
				<a href="#" class="user-menu-content  js-open-aside">
					<span></span>
					<span></span>
					<span></span>
				</a>
			</div>
		</div>

	</div>

</header>
<!-- ... End Header -->

<!-- Right-menu -->

<div class="mCustomScrollbar" data-mcs-theme="dark">

	<div class="popup right-menu">

		<div class="right-menu-wrap">

			<div class="user-menu-close js-close-aside">
				<a href="#" class="user-menu-content  js-clode-aside">
					<span></span>
					<span></span>
				</a>
			</div>

			<div class="logo">
				<a href="index-2.html" class="full-block-link"></a>
				<img src="../front-end/custom/img/rtsoftbd_logo.png" alt="RTSOFTBD">
				
			</div>

			

		</div>

		
		<div class="widget contacts">

			<h4 class="contacts-title">Get In Touch</h4>
			<p class="contacts-text">RTSOFTBD is an incredibly SOFTWARE Farm for corporate and creative professionals.Focused on helping clients to build a successful business on web and mobile application.
			It works on all major software sector.
			</p>
			<br>

			<div class="contacts-item">
				<img src="../front-end/img/contact4.png" alt="phone">
				<div class="content">
					<a href="#" class="title">+8801775-373737</a>
					<p class="sub-title">Mon-Sat 9am-6pm</p>
				</div>
			</div>

			<div class="contacts-item">
				<img src="../front-end/img/contact5.png" alt="phone">
				<div class="content">
					<a href="#" class="title">info@rtsoftbd.com</a>
					<p class="sub-title">online/offline support</p>
				</div>
			</div>

			<div class="contacts-item">
				<img src="../front-end/img/contact6.png" alt="phone">
				<div class="content">
					<a href="#" class="title">House # 41, Flat # B3, Road # 8, Block # E,</a>
					<p class="sub-title">Banasree, Rampura, Dhaka-1219</p>
				</div>
			</div>

		</div>

	</div>

</div>

<!-- ... End Right-menu -->

<div class="content-wrapper">

	<!-- Main Slider -->

	<div class="container-full-width">
		<div class="swiper-container main-slider" data-effect="fade" data-autoplay="4000">

			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide bg-border-color">

					<div class="container">
						<div class="row table-cell">

							<div class="col-lg-12">

								<div class="slider-content align-center">

									<h1 class="slider-content-title" data-swiper-parallax="-100">ENTERPRISE SOLUTION</h1>
									<h5 class="slider-content-text c-gray" data-swiper-parallax="-200">Power up the true potential of your business and industry!</h5>

									<div class="main-slider-btn-wrap" data-swiper-parallax="-300">

										<a href="04_service_detail_seo.html"
										   class="btn btn-medium btn--dark btn-hover-shadow">
											<span class="text">learn more</span>
											<span class="semicircle"></span>
										</a>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
									<img src="../front-end/img/slider1.png" alt="slider">
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="swiper-slide bg-primary-color main-slider-bg-dark thumb-left">

					<div class="container table">
						<div class="row table-cell">

							<div class="col-lg-5 table-cell">
								<div class="slider-content">
									<h3 class="slider-content-title" data-swiper-parallax="-100">
										<span class="c-dark">Corporate Solutions</span>
										</h3>
									<h6 class="slider-content-text" data-swiper-parallax="-200">We thrive to satisfy your organizational needs by delivering robust, scalable business-oriented solutions
									</h6>

									<div class="main-slider-btn-wrap" data-swiper-parallax="-300">

										<a href="05_service_details_localseo.html"
										   class="btn btn-medium btn--dark btn-hover-shadow">
											<span class="text">learn more</span>
											<span class="semicircle"></span>
										</a>

										

									</div>

								</div>
							</div>

							<div class="col-lg-7 table-cell">
								<div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img src="../front-end/img/slider2.png" alt="slider">
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="swiper-slide bg-secondary-color main-slider-bg-dark">

					<div class="container table">
						<div class="row table-cell">
							<div class="col-lg-6 table-cell">

								<div class="slider-content">

									<h3 class="h1 slider-content-title c-dark" data-swiper-parallax="-100">Mobile App & IoT Services
									</h3>

									<h5 class="slider-content-text" data-swiper-parallax="-200">Transform your business processes with Mobile App & IoT Services.
									</h5>

									<div class="main-slider-btn-wrap" data-swiper-parallax="-300">

										

										<a href="06_service_detail.html" class="btn btn-medium btn-border">
											<span class="text">GET STARTED</span>
											<span class="semicircle"></span>
										</a>

									</div>

								</div>

							</div>
							<div class="col-lg-6 table-cell">
								<div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img src="../front-end/img/slider3.png" alt="slider">
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="swiper-slide bg-orange-color main-slider-bg-dark">
					<div class="container table">
						<div class="row table-cell">

							<div class="col-lg-12">

								<div class="slider-content align-center">
									<h3 class="h1 slider-content-title c-dark" data-swiper-parallax="-100">Digital Marketing</h3>
									<h5 class="slider-content-text" data-swiper-parallax="-200">We take your business to the next level by incorporating a result driven digital marketing strategy with a custom designed website and mobile application, tailored for your business.
									</h5>

									<div class="main-slider-btn-wrap" data-swiper-parallax="-300">

										<a href="07_service_email_marketing.html"
										   class="btn btn-medium btn--dark btn-hover-shadow">
											<span class="text">learn more</span>
											<span class="semicircle"></span>
										</a>

									</div>

								</div>

							</div>

							<div class="col-lg-12">
								<div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
									<img src="../front-end/img/slider4.png" alt="slider">
								</div>

							</div>

						</div>
					</div>
				</div>
				<div class="swiper-slide bg-green-color main-slider-bg-dark">

					<div class="container table">
						<div class="row table-cell">

							<div class="col-lg-6 table-cell">
								<div class="slider-content">

									<h3 class="h1 slider-content-title c-dark" data-swiper-parallax="-100">QA & Test Automation
									</h3>

									<h5 class="slider-content-text" data-swiper-parallax="-200">Rest assured on the smoothness of functionality, also saving time, money, vastly increasing test coverage and software accuracy.
									Team morale improves too!
									</h5>

									<div class="main-slider-btn-wrap" data-swiper-parallax="-300">

										<a href="08_service_ppc_management.html"
										   class="btn btn-medium btn--dark btn-hover-shadow">
											<span class="text">learn more</span>
											<span class="semicircle"></span>
										</a>

										<a href="08_service_ppc_management.html"
										   class="btn btn-medium btn-border btn-hover-shadow">
											<span class="text">GET STARTED</span>
											<span class="semicircle"></span>
										</a>

									</div>

								</div>
							</div>

							<div class="col-lg-6 table-cell">
								<div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img src="../front-end/img/slider5.png" alt="slider">
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

			<!--Prev next buttons-->

			<svg class="btn-next btn-next-black">
				<use xlink:href="#arrow-right"></use>
			</svg>

			<svg class="btn-prev btn-prev-black">
				<use xlink:href="#arrow-left"></use>
			</svg>

			<!--Pagination tabs-->

			<div class="slider-slides">
				<a href="#" class="slides-item bg-border-color main-slider-bg-light">
					<div class="content">
						<div class="text-wrap">
							<h4 class="slides-title">ENTERPRISE SOLUTION</h4>
						</div>
						<div class="slides-number">01</div>
					</div>
				</a>

				<a href="#" class="slides-item bg-primary-color">
					<div class="content">
						<div class="text-wrap">
							<h4 class="slides-title">Corporate solutions</h4>
							<div class="slides-sub-title">Mirum est notare quam littera.</div>
						</div>
						<div class="slides-number">02</div>
					</div>
				</a>

				<a href="#" class="slides-item bg-secondary-color">
					<div class="content">
						<div class="text-wrap">
							<h4 class="slides-title">Mobile App & IoT</h4>
						</div>
						<div class="slides-number">03</div>
					</div>
				</a>

				<a href="#" class="slides-item bg-orange-color">
					<div class="content">
						<div class="text-wrap">
							<h4 class="slides-title">Digital Marketing</h4>
						</div>
						<div class="slides-number">04</div>
					</div>
				</a>

				<a href="#" class="slides-item bg-green-color">
					<div class="content">
						<div class="text-wrap">
							<h4 class="slides-title">Security</h4>
						</div>
						<div class="slides-number">05</div>
					</div>
				</a>
			</div>
		</div>
	</div>


	<!-- ... End Main Slider -->


	<!-- Info-Box -->

	<div class="container info-boxes pt100 pb100">

		<?php $this->load->view($view_page); ?>

	</div>

	<!-- ... End Info-Box -->


	


	<!-- Counters -->

	<div class="container-fluid">


			<div class="row bg-green-color">
			<div class="container">
				<div class="row">
					<div class="counters">
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="counter-item">
								<div class="counter-numbers counter">
									<span data-speed="2000" data-refresh-interval="3" data-to="96" data-from="2">96%</span>
									<div class="units">%</div>
								</div>
								<span class="counter-title">Client Retention</span>
								<div class="counter-line">
									<span class="short-line"></span>
									<span class="long-line"></span>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="counter-item">
								<div class="counter-numbers counter">
									<span data-speed="2000" data-refresh-interval="3" data-to="10" data-from="0">10</span>
								</div>
								<span class="counter-title">Years of Service</span>
								<div class="counter-line">
									<span class="short-line"></span>
									<span class="long-line"></span>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="counter-item">
								<div class="counter-numbers counter">
									<span data-speed="2000" data-refresh-interval="3" data-to="70" data-from="2">230+</span>
									<div class="units">+</div>
								</div>
								<span class="counter-title">Professionals</span>
								<div class="counter-line">
									<span class="short-line"></span>
									<span class="long-line"></span>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="counter-item">
								<div class="counter-numbers counter">
									<span data-speed="2000" data-refresh-interval="3" data-to="690" data-from="400">690+</span>
									<div class="units">+</div>
								</div>
								<span class="counter-title">Satisfied Clients</span>
								<div class="counter-line">
									<span class="short-line"></span>
									<span class="long-line"></span>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	
	</div>

	<!-- End Counters -->





	<!-- Testimonial-slider -->

	<div class="container-fluid">
		<div class="row">
			<div class="testimonial-slider scrollme">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="heading">
								<h4 class="h1 heading-title">Happy Clients
									About Us</h4>
								<div class="heading-line">
									<span class="short-line bg-yellow-color"></span>
									<span class="long-line bg-yellow-color"></span>
								</div>
								<p class="heading-text c-white">Claritas est etiam processus dynamicus, qui lectorum.
								</p>
							</div>
							<div class="signature js-animate-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="200" height="60">
									<path fill="none" stroke="#2f2c2c" stroke-width="1.4"
										  d="M24.78 42.5C11.28 41.06.96 36 1.16 26.86 1.62 11.6 16.76 3.6 28.13 3.25c5.44-.16 9.8 2.38 10.2 5.8.86 7.66-19.23 15.62-19.23 15.62s17.86-6.57 24.66 2.2c2.8 3.6-11.8 10.65-11.8 10.65s-8.8 3.35-7.65-.24c1.78-5.52 16.8-10.1 18.42-10.3 3.17-.4 7.1-.4 8 .12 1.33.78-1.7 4.14-.94 4.86.76.72 3.82-2.55 3.94-1.97.12.57-.64 2.63.58 3 1.2.38 2.3-1.1 4.28-1.5 1.97-.4 1.83-.44 3.6-.12 1.76.32 2.1.64 3.47 1.4 1.36.74.86 2.22 1.96 1.6 1.1-.6 1.43-4.16 2.44-4.04 1.02.1.03 5.38 1.63 4.5 1.6-.85 4.74-7.97 4.74-7.97s-.82 4.04 0 3.93c3.14-.4 8.12-2.57 14.48-3.36 6.37-.78 8.67-.35 11 .24 1.92.48 2.67 2.3 2.67 2.3"
										  stroke-linecap="round" stroke-linejoin="round"></path>
									<path fill="none" stroke="#2f2c2c" stroke-width="1.4"
										  d="M113.7 15.75s-1.1-2.78-3.6-2.08c-5.83 1.62-16.2 7.68-16.44 15.63-.46 16.3 21.1 11.14 22.7 11 13.6-1.2 17.38-9.96 17.36-14.48-.06-14.3-19.07-10.3-21.07-10.07-7.9.92-10.48 1.57-10.48 1.57"></path>
									<path fill="none" stroke="#2f2c2c" stroke-width="1.4" d="M119.7 1.05c-2.53 13.9-5.1 27.83-2.53 41.44" stroke-linecap="round"></path>
									<path fill="none" stroke="#2f2c2c" stroke-width="1.4" d="M133.6 27.8c-6.62-.42-12.6.37-17.36 3.35"></path>
									<path fill="none" stroke="#2f2c2c" stroke-width="1.4"
										  d="M131.52 32.77s3.95-.13 8.34-.93c2.4-.43 5-1.73 7.87-1.85 2.87-.12 1.74 1.44 3.6 1.38 4.62-.14 7.98-.3 14.92-.7 6.95-.4 9.76-2.76 12.86-.92 1.7 1 1.4 3.13 1.4 3.13"
										  stroke-linecap="round"></path>
									<path fill="none" stroke="#2f2c2c" stroke-width="1.4" d="M153.52 31.03s2.27-2.74-.7-3.35c-3.36-.7-3.7 2.43-3.7 2.43"></path>
								</svg>
							</div>
						</div>

						<div class="col-lg-7 col-lg-offset-1 col-md-8 col-sm-12 col-xs-12">

							<div class="testimonial-item">
								<!-- Slider main container -->
								<div class="swiper-container testimonial__thumb overflow-visible" data-effect="fade" data-loop="false">

									<div class="swiper-wrapper">
										<div class="testimonial-slider-item swiper-slide">
											<div class="testimonial-content">
												<p class="text" data-swiper-parallax="-200">Nam liber tempor cum soluta nobis eleifend option congue
													nihil imperdiet doming id quod mazim.
												</p>
												<a href="#" class="author" data-swiper-parallax="-150">Jonathan Simpson</a>
												<a href="#" class="company" data-swiper-parallax="-150">Envato Market</a>

											</div>
											<div class="avatar" data-swiper-parallax="-50">
												<img src="../front-end/img/avatar.png" alt="avatar">
											</div>
										</div>
										<div class="testimonial-slider-item swiper-slide">
											<div class="testimonial-content">
												<p class="text" data-swiper-parallax="-200">Nam liber tempor cum soluta nobis eleifend option congue
													nihil imperdiet doming id quod mazim.
												</p>
												<a href="#" class="author" data-swiper-parallax="-150">Jonathan Simpson</a>
												<a href="#" class="company" data-swiper-parallax="-150">Envato Market</a>

											</div>
											<div class="avatar" data-swiper-parallax="-50">
												<img src="../front-end/img/avatar.png" alt="avatar">
											</div>
										</div>
										<div class="testimonial-slider-item swiper-slide">
											<div class="testimonial-content">
												<p class="text" data-swiper-parallax="-200">Nam liber tempor cum soluta nobis eleifend option congue
													nihil imperdiet doming id quod mazim.
												</p>
												<a href="#" class="author" data-swiper-parallax="-150">Jonathan Simpson</a>
												<a href="#" class="company" data-swiper-parallax="-150">Envato Market</a>

											</div>
											<div class="avatar" data-swiper-parallax="-50">
												<img src="../front-end/img/avatar.png" alt="avatar">
											</div>
										</div>
									</div>
									<!-- If we need pagination -->
									<div class="swiper-pagination"></div>

									<div class="quote">
										<i class="seoicon-quotes"></i>
									</div>
								</div>

								<div class="testimonial__thumb-img">
									<img src="../front-end/img/testimonial1.png" alt="image">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="testimonial-img">
					<img src="../front-end/img/testimonial2.png" alt="image">
				</div>
			</div>
		</div>
		
	</div>

	<!-- End Testimonial-slider -->


	


	<!-- Post-slider -->

	<div class="container">

		<div class="recent-post-slider medium-padding120">

			<div class="row">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="heading">
						<h4 class="h1 heading-title">Latest Activity</h4>
						<a href="14_blog.html" class="read-more">Read Our Blog
							<i class="seoicon-right-arrow"></i>
						</a>
						<div class="heading-line">
							<span class="short-line"></span>
							<span class="long-line"></span>
						</div>
					</div>
				</div>

			</div>

			<div class="theme-module news-slider-module">
				<div class="swiper-container top-pagination" data-show-items="3" data-scroll-items="3">

					<!-- If we need pagination -->
					<div class="swiper-pagination"></div>

					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<article class="hentry post">

								<time class="post__date published " datetime="2016-01-30 12:00:00">
									January 30, 2016
								</time>

								<div class="post__content">
									<h2 class="post__title entry-title">
										<a href="15_blog_details.html">Qemonstraverunt legere lius</a>
									</h2>

									<p class="post__text">Sequitur mutationem consuetudium lectorum quam nunc putamus.</p>

								</div>

								<div class="post__author author vcard">
									<div class="post-avatar">
										<img src="../front-end/img/post-author1.png" alt="author">
									</div>
									<span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
								</div>

							</article>
						</div>

						<div class="swiper-slide">
							<article class="hentry post">

								<time class="post__date published " datetime="2016-01-30 12:00:00">
									January 30, 2016
								</time>

								<div class="post__content">
									<h2 class="post__title entry-title">
										<a href="15_blog_details.html">Qemonstraverunt legere lius</a>
									</h2>

									<p class="post__text">Sequitur mutationem consuetudium lectorum quam nunc putamus.</p>

								</div>

								<div class="post__author author vcard">
									<div class="post-avatar">
										<img src="../front-end/img/post-author2.png" alt="author">
									</div>
									<span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
								</div>

							</article>
						</div>

						<div class="swiper-slide">
							<article class="hentry post">

								<time class="post__date published " datetime="2016-01-30 12:00:00">
									January 30, 2016
								</time>

								<div class="post__content">
									<h2 class="post__title entry-title">
										<a href="15_blog_details.html">Qemonstraverunt legere lius</a>
									</h2>

									<p class="post__text">Sequitur mutationem consuetudium lectorum quam nunc putamus.</p>

								</div>

								<div class="post__author author vcard">
									<div class="post-avatar">
										<img src="../front-end/img/post-author3.png" alt="author">
									</div>
									<span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
								</div>

							</article>
						</div>

						<div class="swiper-slide">
							<article class="hentry post">

								<time class="post__date published " datetime="2016-01-30 12:00:00">
									January 30, 2016
								</time>

								<div class="post__content">
									<h2 class="post__title entry-title">
										<a href="15_blog_details.html">Qemonstraverunt legere lius</a>
									</h2>

									<p class="post__text">Sequitur mutationem consuetudium lectorum quam nunc putamus.</p>

								</div>

								<div class="post__author author vcard">
									<div class="post-avatar">
										<img src="../front-end/img/post-author1.png" alt="author">
									</div>
									<span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
								</div>

							</article>
						</div>

						<div class="swiper-slide">
							<article class="hentry post">

								<time class="post__date published " datetime="2016-01-30 12:00:00">
									January 30, 2016
								</time>

								<div class="post__content">
									<h2 class="post__title entry-title">
										<a href="15_blog_details.html">Qemonstraverunt legere lius</a>
									</h2>

									<p class="post__text">Sequitur mutationem consuetudium lectorum quam nunc putamus.</p>

								</div>

								<div class="post__author author vcard">
									<div class="post-avatar">
										<img src="../front-end/img/post-author2.png" alt="author">
									</div>
									<span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
								</div>

							</article>
						</div>

						<div class="swiper-slide">
							<article class="hentry post">

								<time class="post__date published " datetime="2016-01-30 12:00:00">
									January 30, 2016
								</time>

								<div class="post__content">
									<h2 class="post__title entry-title">
										<a href="15_blog_details.html">Qemonstraverunt legere lius</a>
									</h2>

									<p class="post__text">Sequitur mutationem consuetudium lectorum quam nunc putamus.</p>

								</div>

								<div class="post__author author vcard">
									<div class="post-avatar">
										<img src="../front-end/img/post-author3.png" alt="author">
									</div>
									<span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
								</div>

							</article>
						</div>

						<div class="swiper-slide">
							<article class="hentry post">

								<time class="post__date published " datetime="2016-01-30 12:00:00">
									January 30, 2016
								</time>

								<div class="post__content">
									<h2 class="post__title entry-title">
										<a href="15_blog_details.html">Qemonstraverunt legere lius</a>
									</h2>

									<p class="post__text">Sequitur mutationem consuetudium lectorum quam nunc putamus.</p>

								</div>

								<div class="post__author author vcard">
									<div class="post-avatar">
										<img src="../front-end/img/post-author1.png" alt="author">
									</div>
									<span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
								</div>

							</article>
						</div>

						<div class="swiper-slide">
							<article class="hentry post">

								<time class="post__date published " datetime="2016-01-30 12:00:00">
									January 30, 2016
								</time>

								<div class="post__content">
									<h2 class="post__title entry-title">
										<a href="15_blog_details.html">Qemonstraverunt legere lius</a>
									</h2>

									<p class="post__text">Sequitur mutationem consuetudium lectorum quam nunc putamus.</p>

								</div>

								<div class="post__author author vcard">
									<div class="post-avatar">
										<img src="../front-end/img/post-author2.png" alt="author">
									</div>
									<span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
								</div>

							</article>
						</div>

					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- End Post-slider -->


	<!-- Clients -->

	<div class="section">
		<div class="client-carousel medium-padding120">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
						<div class="heading align-center">
							<h4 class="h1 heading-title">Our Valuable Partners</h4>
							<div class="heading-line">
								<span class="short-line"></span>
								<span class="long-line"></span>
							</div>
							<p class="heading-text">Qui mutationem consuetudium. </p>
						</div>
					</div>
				</div>

				<div class="theme-module clients-slider-module">

					<div class="swiper-container pagination-bottom" data-show-items="4">

						<div class="swiper-wrapper">

							<div class="swiper-slide client-item">
								<a href="09_our_clients.html" class="client-image">
									<img src="../front-end/img/client1-hover.png" alt="logo" class="hover">
								</a>
							</div>

							<div class="swiper-slide client-item">
								<a href="09_our_clients.html" class="client-image">
									<img src="../front-end/img/client2-hover.png" alt="logo" class="hover">
								</a>
							</div>

							<div class="swiper-slide client-item">
								<a href="09_our_clients.html" class="client-image">
									<img src="../front-end/img/client3-hover.png" alt="logo" class="hover">
								</a>
							</div>

							<div class="swiper-slide client-item">
								<a href="09_our_clients.html" class="client-image">
									<img src="../front-end/img/client4-hover.png" alt="logo" class="hover">
								</a>
							</div>

						</div>

						<!--Prev Next Arrows-->
						<svg class="btn-next">
							<use xlink:href="#arrow-right"></use>
						</svg>

						<svg class="btn-prev">
							<use xlink:href="#arrow-left"></use>
						</svg>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End Clients -->


	<!-- Subscribe Form -->

	<div class="container-fluid bg-green-color">
		<div class="row">
			<div class="container">

				<div class="row">

					<div class="subscribe scrollme">

						<div class="col-lg-6 col-lg-offset-5 col-md-6 col-md-offset-5 col-sm-12 col-xs-12">
							<h4 class="subscribe-title">Email Newsletters!</h4>
							<form class="subscribe-form" method="post" action="http://html.crumina.net/html-seosight/import.php">
								<input class="email input-standard-grey input-white" name="email" required="required" placeholder="Your Email Address" type="email">
								<button class="subscr-btn">subscribe
									<span class="semicircle--right"></span>
								</button>
							</form>
							<div class="sub-title">Sign up for new Seosignt content, updates, surveys & offers.</div>

						</div>

						<div class="images-block">
							<img src="../front-end/img/subscr-gear.png" alt="gear" class="gear">
							<img src="../front-end/img/subscr1.png" alt="mail" class="mail">
							<img src="../front-end/img/subscr-mailopen.png" alt="mail" class="mail-2">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End Subscribe Form -->
</div>


<!-- Footer -->

<footer class="footer js-fixed-footer" id="site-footer">


</footer>

<!-- End Footer -->


<!-- Sign-in Form Popup -->

<div class="window-popup">
	<a href="#" class="popup-close js-popup-close cd-nav-trigger">
		<i class="seosight-icon seoicon-delete"></i>
	</a>

	<div class="sign-in-popup">
		<h5 class="title">Register to SeoSight</h5>
		<p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magnais.</p>
		<form class="form-validate contact-form">
			<div class="row">

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<input class="input-standard-grey" placeholder="First Name" type="text">
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<input class="input-standard-grey" placeholder="Last Name" type="text">
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<input class="input-standard-grey" placeholder="Your Email" type="email">
					<input class="input-standard-grey" placeholder="Your Password" type="password">

					<select>
						<option value="MA">Male</option>
						<option value="FE">Female</option>
					</select>

					<div class="remember-wrap">
						<div class="checkbox">
							<input id="terms" type="checkbox" name="terms" value="terms">
							<label for="terms">I accept the Terms and Conditions</label>
						</div>
					</div>

					<a href="#" class="btn btn-large btn--primary">Complete Registration!</a>
				</div>

			</div>
		</form>
	</div>
</div>

<!-- Sign-in Form Popup -->



<svg style="display:none;">
	<symbol id="arrow-left" viewBox="122.9 388.2 184.3 85">
		<path d="M124.1,431.3c0.1,2,1,3.8,2.4,5.2c0,0,0.1,0.1,0.1,0.1l34.1,34.1c1.6,1.6,3.7,2.5,5.9,2.5s4.3-0.9,5.9-2.4
		c1.6-1.6,2.4-3.7,2.4-5.9s-0.9-3.9-2.4-5.5l-19.9-19.5h11.1c1.5,0,2.7-1.5,2.7-3c0-1.5-1.2-3-2.7-3h-17.6c-1.1,0-2.1,0.6-2.5,1.6
		c-0.4,1-0.2,2.1,0.6,2.9l24.4,24.4c0.6,0.6,0.9,1.3,0.9,2.1s-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9s-1.6-0.3-2.1-0.9
		l-34.2-34.2c0,0,0,0,0,0c-0.6-0.6-0.8-1.4-0.9-1.9c0,0,0,0,0,0c0-0.2,0-0.4,0-0.6c0.1-0.6,0.3-1.1,0.7-1.6c0-0.1,0.1-0.1,0.2-0.2
		l34.1-34.1c0.6-0.6,1.3-0.9,2.1-0.9s1.6,0.3,2.1,0.9c0.6,0.6,0.9,1.3,0.9,2.1s-0.3,1.6-0.9,2.1l-24.4,24.4c-0.8,0.8-1,2-0.6,3
		c0.4,1,1.4,1.7,2.5,1.7h125.7c1.5,0,2.7-1,2.7-2.5c0-1.5-1.2-2.5-2.7-2.5H152.6l19.9-20.1c1.6-1.6,2.4-3.8,2.4-6s-0.9-4.4-2.4-6
		c-1.6-1.6-3.7-2.5-5.9-2.5s-4.3,0.9-5.9,2.4l-34.1,34.1c-0.2,0.2-0.3,0.3-0.5,0.5c-1.1,1.2-1.8,2.8-2,4.4
		C124.1,430.2,124.1,430.8,124.1,431.3C124.1,431.3,124.1,431.3,124.1,431.3z"></path>
		<path d="M283.3,427.9h14.2c1.7,0,3,1.3,3,3c0,1.7-1.4,3-3,3H175.1c-1.5,0-2.7,1.5-2.7,3c0,1.5,1.2,3,2.7,3h122.4
		c4.6,0,8.4-3.9,8.4-8.5c0-4.6-3.8-8.5-8.4-8.5h-14.2c-1.5,0-2.7,1-2.7,2.5C280.7,426.9,281.8,427.9,283.3,427.9z"></path>
	</symbol>
	<symbol id="arrow-right" viewBox="122.9 388.2 184.3 85">
		<path d="M305.9,430.2c-0.1-2-1-3.8-2.4-5.2c0,0-0.1-0.1-0.1-0.1l-34.1-34.1c-1.6-1.6-3.7-2.5-5.9-2.5c-2.2,0-4.3,0.9-5.9,2.4
		c-1.6,1.6-2.4,3.7-2.4,5.9s0.9,4.1,2.4,5.7l19.9,19.6h-11.1c-1.5,0-2.7,1.5-2.7,3c0,1.5,1.2,3,2.7,3h17.6c1.1,0,2.1-0.7,2.5-1.7
		c0.4-1,0.2-2.2-0.6-2.9l-24.4-24.5c-0.6-0.6-0.9-1.3-0.9-2.1s0.3-1.6,0.9-2.1c0.6-0.6,1.3-0.9,2.1-0.9c0.8,0,1.6,0.3,2.1,0.9
		l34.2,34.2c0,0,0,0,0,0c0.6,0.6,0.8,1.4,0.9,1.9c0,0,0,0,0,0c0,0.2,0,0.4,0,0.6c-0.1,0.6-0.3,1.1-0.7,1.6c0,0.1-0.1,0.1-0.2,0.2
		l-34.1,34.1c-0.6,0.6-1.3,0.9-2.1,0.9s-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1s0.3-1.6,0.9-2.1l24.4-24.4c0.8-0.8,1-1.9,0.6-2.9
		c-0.4-1-1.4-1.6-2.5-1.6H158.1c-1.5,0-2.7,1-2.7,2.5c0,1.5,1.2,2.5,2.7,2.5h119.3l-19.9,20c-1.6,1.6-2.4,3.7-2.4,6s0.9,4.4,2.4,5.9
		c1.6,1.6,3.7,2.5,5.9,2.5s4.3-0.9,5.9-2.4l34.1-34.1c0.2-0.2,0.3-0.3,0.5-0.5c1.1-1.2,1.8-2.8,2-4.4
		C305.9,431.3,305.9,430.8,305.9,430.2C305.9,430.2,305.9,430.2,305.9,430.2z"></path>
		<path d="M146.7,433.9h-14.2c-1.7,0-3-1.3-3-3c0-1.7,1.4-3,3-3h122.4c1.5,0,2.7-1.5,2.7-3c0-1.5-1.2-3-2.7-3H132.4
		c-4.6,0-8.4,3.9-8.4,8.5c0,4.6,3.8,8.5,8.4,8.5h14.2c1.5,0,2.7-1,2.7-2.5C149.3,434.9,148.1,433.9,146.7,433.9z"></path>
	</symbol>
	<symbol id="to-top" viewBox="0 0 32 32">
		<path d="M17,22 L25.0005601,22 C27.7616745,22 30,19.7558048 30,17 C30,14.9035809 28.7132907,13.1085075 26.8828633,12.3655101
         L26.8828633,12.3655101 C26.3600217,9.87224935 24.1486546,8 21.5,8 C20.6371017,8 19.8206159,8.19871575 19.0938083,8.55288165
         C17.8911816,6.43144875 15.6127573,5 13,5 C9.13400656,5 6,8.13400656 6,12 C6,12.1381509 6.00400207,12.275367 6.01189661,12.4115388
          L6.01189661,12.4115388 C4.23965876,13.1816085 3,14.9491311 3,17 C3,19.7614237 5.23249418,22 7.99943992,22 L16,22 L16,16 L12.75,19.25
           L12,18.5 L16.5,14 L21,18.5 L20.25,19.25 L17,16 L17,22 L17,22 Z M16,22 L16,27 L17,27 L17,22 L16,22 L16,22 Z" id="cloud-upload"></path>
	</symbol>

</svg>

<!-- Overlay Search -->

<div class="overlay_search">
	<div class="container">
		<div class="row">
			<div class="form_search-wrap">
				<form>
					<input class="overlay_search-input" placeholder="Type and hit Enter..." type="text">
					<a href="#" class="overlay_search-close">
						<span></span>
						<span></span>
					</a>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- End Overlay Search -->

<!-- JS Script -->

<script src="../front-end/js/jquery-3.4.1.js"></script>

<script src="../front-end/js/js-plugins/crum-mega-menu.js"></script>
<script src="../front-end/js/js-plugins/swiper.jquery.min.js"></script>
<script src="../front-end/js/js-plugins/waypoints.js"></script>
<script src="../front-end/js/js-plugins/jquery.drawsvg.js"></script>
<script src="../front-end/js/js-plugins/jquery-countTo.js"></script>
<script src="../front-end/js/js-plugins/jquery.mousewheel.js"></script>
<script src="../front-end/js/js-plugins/jquery.mCustomScrollbar.js"></script>
<script src="../front-end/js/js-plugins/imagesLoaded.js"></script>
<script src="../front-end/js/js-plugins/jquery.magnific-popup.js"></script>
<script src="../front-end/js/js-plugins/jquery.matchHeight.js"></script>
<script src="../front-end/js/js-plugins/segment.js"></script>
<script src="../front-end/js/js-plugins/bootstrap.js"></script>
<script src="../front-end/js/js-plugins/jquery-circle-progress.js"></script>
<script src="../front-end/js/js-plugins/Headroom.js"></script>
<script src="../front-end/js/js-plugins/smooth-scroll.js"></script>
<script src="../front-end/js/js-plugins/jquery.nice-select.js"></script>
<script src="../front-end/js/js-plugins/fastClick.js"></script>
<script src="../front-end/js/js-plugins/form-actions.js"></script>
<script src="../front-end/js/js-plugins/velocity.js"></script>
<script src="../front-end/js/js-plugins/time-line.js"></script>
<script src="../front-end/js/js-plugins/ScrollMagic.min.js"></script>
<script src="../front-end/js/js-plugins/animation.velocity.min.js"></script>
<script src="../front-end/js/js-plugins/ajax-pagination.js"></script>
<script src="../front-end/js/js-plugins/donut-chart.js"></script>
<script src="../front-end/js/js-plugins/isotope.pkgd.min.js"></script>
<script src="../front-end/js/js-plugins/photo-gallery.js"></script>
<script src="../front-end/js/js-plugins/ion.rangeSlider.js"></script>
<script src="../front-end/js/js-plugins/leaflet.js"></script>
<script src="../front-end/js/js-plugins/MarkerClusterGroup.js"></script>

<script src="../front-end/js/main.js"></script>

<!-- ...end JS Script -->

</body>


</html>