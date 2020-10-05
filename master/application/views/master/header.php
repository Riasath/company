<!DOCTYPE html>
<html lang="en">
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php echo $title;?></title>


	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/fonts.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/crumina-fonts.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/normalize.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/grid.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/base.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/blocks.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/layouts.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/modules.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/widgets-styles.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ion.rangeSlider.css');?>">


	<!--Plugins styles-->

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/jquery.mCustomScrollbar.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/swiper.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/primary-menu.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/magnific-popup.css');?>">

	<!--Styles for RTL-->

	<!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->

	<!--External fonts-->
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

</head>


<body class=" ">
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
				<img src="<?= base_url('assets/images/united-states-of-america.png');?>" class="flags" alt="flag">
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
			<img src="<?= base_url('assets/images/signin_dark.png');?>" class="sign-in">
			<a class="js-window-popup" href="#">Sign up</a>
		</div>

		<div class="follow_us">
			<span>Follow us:</span>
			<div class="socials">

				<a href="#" class="social__item">
					<img src="<?= base_url('assets/images/circle-facebook.svg');?>" alt="facebook">
				</a>

				<a href="#" class="social__item">
					<img src="<?= base_url('assets/images/twitter.svg');?>" alt="twitter">
				</a>

				<a href="#" class="social__item">
					<img src="<?= base_url('assets/images/google.svg');?>" alt="google">
				</a>

				<a href="#" class="social__item">
					<img src="<?= base_url('assets/images/youtube.svg');?>" alt="youtube">
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
				<a href="#" class="full-block-link"></a>
				<img src="<?= base_url('assets/images/rtsoftbd_logo.png');?>" alt="RTSOFTBD">
				
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
						<a href="#">Home</a>
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
											<a href="#">E-commerce Solutions<i class="seoicon-right-arrow"></i></a>
										</li>
										<li>
											<a href="#">School Management System<i class="seoicon-right-arrow"></i></a>
										</li>

										<li>
											<a href="#">Point of Sale<i class="seoicon-right-arrow"></i></a>
										</li>

										<li>
											<a href="#">Storage Management System<i class="seoicon-right-arrow"></i></a>
										</li>

										<li>
											<a href="#">Our Testimonials<i class="seoicon-right-arrow"></i></a>
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
												<img src="<?= base_url('assets/images/basis.png');?>" alt="logo">
												<img src="<?= base_url('assets/images/iso-header-logo.png');?>" alt="logo">
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
						<a href="#">Digital Marketing</a>
						<ul class="dropdown">
							<li class="megamenu-item-info">
								<h5 class="megamenu-item-info-title">List of Services</h5>
								<p class="megamenu-item-info-text">Choose a Service</p>
							</li>
							<li class="hover-ver2">
								<a href="#"><i class="seoicon-pin-map"></i>
									Local SEO
								</a>
							</li>
							<li class="hover-ver2">
								<a href="#"><i class="seoicon-mail-send"></i>
									Email Marketing
								</a>
							</li>
							<li class="hover-ver2">
								<a href="#"><i class="seoicon-chat-comment"></i>
									Social Media Marketing
								</a>
							</li>
							<li class="menu-item-has-children hover-ver2">
								<a href="#">
									<i class="seoicon-search"></i>
									Search Engine Optimization
								</a>
							</li>
							<li class="hover-ver2">
								<a href="#"><i class="seoicon-button"></i>
									Pay Per Click Management
								</a>
							</li>
							<li class="menu-item-has-children hover-ver2">
								<a href="#">
									<i class="seoicon-pie-graph-split"></i>
									Services Promo List
								</a>
							</li>
						</ul>
					</li>

					

					<li class="">
						<a href="#">Blog</a>
					</li>
					<li class="">
						<a href="#">Contacts</a>
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
				<a href="#" class="full-block-link"></a>
				<img src="<?= base_url('assets/images/rtsoftbd_logo.png');?>" alt="RTSOFTBD">
				
			</div>

			

		</div>

		
		<div class="widget contacts">

			<h4 class="contacts-title">Get In Touch</h4>
			<p class="contacts-text">RTSOFTBD is an incredibly SOFTWARE Farm for corporate and creative professionals.Focused on helping clients to build a successful business on web and mobile application.
			It works on all major software sector.
			</p>
			<br>

			<div class="contacts-item">
				<img src="<?= base_url('assets/images/contact4.png');?>" alt="phone">
				<div class="content">
					<a href="#" class="title">+8801775-373737</a>
					<p class="sub-title">Mon-Sat 9am-6pm</p>
				</div>
			</div>

			<div class="contacts-item">
				<img src="<?= base_url('assets/images/contact5.png');?>" alt="phone">
				<div class="content">
					<a href="#" class="title">info@rtsoftbd.com</a>
					<p class="sub-title">online/offline support</p>
				</div>
			</div>

			<div class="contacts-item">
				<img src="<?= base_url('assets/images/contact6.png');?>" alt="phone">
				<div class="content">
					<a href="#" class="title">House # 41, Flat # B3, Road # 8, Block # E,</a>
					<p class="sub-title">Banasree, Rampura, Dhaka-1219</p>
				</div>
			</div>

		</div>

	</div>

</div>