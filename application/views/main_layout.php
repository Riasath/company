<!DOCTYPE html>
<html lang="en">
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
           <!--  --><?php //echo $title;?><!--  -->

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/fonts.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/crumina-fonts.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/normalize.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/grid.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/base.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/blocks.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/layouts.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/modules.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/widgets-styles.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ion.rangeSlider.css'); ?>">


	<!--Plugins styles-->

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/jquery.mCustomScrollbar.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/swiper.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/primary-menu.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/magnific-popup.css'); ?>">

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
					<animate attributeName="fill-opacity" begin="0s" calcMode="linear" dur="1.3s"
							 repeatCount="indefinite" values="1;0;0;0;0;0;0;0"/>
				</circle>
				<circle cx="49.063" cy="27.063" r="5" fill="none">
					<animate attributeName="fill-opacity" begin="0s" calcMode="linear" dur="1.3s"
							 repeatCount="indefinite" values="0;1;0;0;0;0;0;0"/>
				</circle>
				<circle cx="42.601" cy="42.663" r="5" fill="none">
					<animate attributeName="fill-opacity" begin="0s" calcMode="linear" dur="1.3s"
							 repeatCount="indefinite" values="0;0;1;0;0;0;0;0"/>
				</circle>
				<circle cx="27" cy="49.125" r="5" fill="none">
					<animate attributeName="fill-opacity" begin="0s" calcMode="linear" dur="1.3s"
							 repeatCount="indefinite" values="0;0;0;1;0;0;0;0"/>
				</circle>
				<circle cx="11.399" cy="42.663" r="5" fill="none">
					<animate attributeName="fill-opacity" begin="0s" calcMode="linear" dur="1.3s"
							 repeatCount="indefinite" values="0;0;0;0;1;0;0;0"/>
				</circle>
				<circle cx="4.938" cy="27.063" r="5" fill="none">
					<animate attributeName="fill-opacity" begin="0s" calcMode="linear" dur="1.3s"
							 repeatCount="indefinite" values="0;0;0;0;0;1;0;0"/>
				</circle>
				<circle cx="11.399" cy="11.462" r="5" fill="none">
					<animate attributeName="fill-opacity" begin="0s" calcMode="linear" dur="1.3s"
							 repeatCount="indefinite" values="0;0;0;0;0;0;1;0"/>
				</circle>
				<circle cx="27" cy="5" r="5" fill="none">
					<animate attributeName="fill-opacity" begin="0s" calcMode="linear" dur="1.3s"
							 repeatCount="indefinite" values="0;0;0;0;0;0;0;1"/>
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
<img src="<?= base_url('assets/images/')?>united-states-of-america.png" class="flags" alt="flag">
<select>
<option>Global</option>
<option value="2">Farmgate,Dhaka</option>
<option value="3">Bonosree,Dhaka</option>
</select>
</div>
			  <?php foreach($popup as $v_popup){?>
<div class="contact-item">
			<?php echo $v_popup->mobile;?>
</div>

<div class="contact-item">
<a href="#">
		<?php echo $v_popup->gmail;?>
</a>
</div>

<div class="contact-item">
<span>
	<?php echo $v_popup->day;?>
</span>
 	<?php echo $v_popup->time;?>
</div>
<?php }?>
</div>

<div class="login-block">
<img src="<?= base_url('assets/images/')?>signin_dark.png" class="sign-in">
<a class="js-window-popup" href="#">Sign up</a>
</div>

<div class="follow_us">
<span>Follow us:</span>
<div class="socials">

<a href="#" class="social__item">
<img src="<?= base_url('assets/images/')?>circle-facebook.svg" alt="facebook">
</a>

<a href="#" class="social__item">
<img src="<?= base_url('assets/images/')?>twitter.svg" alt="twitter">
</a>

<a href="#" class="social__item">
<img src="<?= base_url('assets/images/')?>google.svg" alt="google">
</a>

<a href="#" class="social__item">
<img src="<?= base_url('assets/images/')?>youtube.svg" alt="youtube">
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
  <?php foreach($mainlogo as $v_logo){?>
<div class="logo">
<a href="<?= base_url()?>home" class="full-block-link"></a>

<img src="<?php echo $v_logo->image?>"
style="height:50px;width:150px;" class="img-fluid" alt="RTSOFTBD">

</div>
<?php }?>

			<nav id="primary-menu" class="primary-menu">

				<a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
					<span class="mob-menu--title">Menu</span>
					<span id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: hidden">
                            <svg width="1000px" height="1000px">
                                <path id="pathD"
									  d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                <path id="pathE" d="M 300 500 L 700 500"></path>
                                <path id="pathF"
									  d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                            </svg>
                        </span>
				</a>



				<!-- menu-icon-wrapper -->
	           <ul class="primary-menu-menu">
<?php foreach ($dropdowns as $menu): ?>
  <?php if($menu->menu_id !=$menu->m_id):?>
     
	<li class="menu-item-has-children">
		<a href="<?php echo base_url().$menu->m_url;?>">
			<?php echo $menu->m_name;?>
		</a>
	</li>
	<?php else:?>


<li class=""><a href="#"><?php echo $menu->m_name;?></a>
	<ul class="dropdown">
<?php foreach ($dropdown_items as $item): ?>

	<?php if($menu->menu_id ==$item->m_id):?>
     
	<li class="menu-item-has-children">
		<a href="<?php echo base_url().$item->m_item_url;?>" class="seoicon-right-arrow">
			<?php echo $item->m_item_name;?>
		</a>
	</li>
	<?php endif;?>
		   
   <?php endforeach;?>	
		
		
	</ul>
</li>
   <?php endif;?>


<?php endforeach;?>			
					
	

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
  <?php foreach($sidebar as $v_sidebar){?>
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
		<img src="<?php echo $v_sidebar->image?>">

</div>


		</div>


<div class="widget contacts">

<h4 class="contacts-title">
			<?php echo $v_sidebar->title;?>
</h4>
<p class="contacts-text">
		<?php echo $v_sidebar->details;?>
</p>
<br>

<div class="contacts-item">
<img src="<?php echo base_url('assets/');?>images/contact4.png" alt="phone">
<div class="content">
	<a href="#" class="title">
		<?php echo $v_sidebar->mobile;?>
	</a>
	<p class="sub-title">Monday-Saturday 10am-6pm</p>
</div>
</div>

<div class="contacts-item">
<img src="<?php echo base_url('assets/');?>images/contact5.png" alt="phone">
<div class="content">
	<a href="#" class="title">
				<?php echo $v_sidebar->gmail;?>
</a>
	<p class="sub-title">online/offline support</p>
</div>
</div>

<div class="contacts-item">
<img src="<?php echo base_url('assets/');?>images/contact6.png" alt="phone">
<div class="content">
	<a href="#" class="title">
					<?php echo $v_sidebar->address;?>
	</a>
	<p class="sub-title">Address</p>
</div>
</div>

</div>

	</div>
	<?php }?>

</div>

<!-- ... End Right-menu -->


	<?php echo $content; ?>





<footer class="footer">
	<div class="container">
		<div class="row">

			<div class="info">
				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
					 <?php foreach($footer_top as $v_top){?>

					<div class="heading">
					
						<h3 class="heading-title">
							 <?php echo $v_top->footer_heading;?>
						</h3>
						<div class="heading-line">
							<span class="short-line"></span>
							<span class="long-line"></span>
						</div>
						<p class="heading-text" style="color: #ffffff;">
							<?php echo $v_top->footer_details;?>
						</p>
					</div>
					<?php }?>

					<div class="socials">
						<?php foreach($footer_icon as $v_icon){?>
						<a href="#" class="social__item">
							<img src="<?php echo $v_icon->footer_images?>"
							style="height: 30px;width:25px;">
						</a>
					<?php }?>
						
					</div>
				</div>

<div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12">
<div class="services">
<div class="heading">
	<h3 class="heading-title">Services Provided</h3>
	<div class="heading-line">
		<span class="short-line"></span>
		<span class="long-line"></span>
	</div>
</div>

<ul class="list list--primary">
	 <?php foreach($footermenu as $v_menu){?>
	<li>
		<i class="fa fa-caret-right" aria-hidden="true"></i>
		<a href="<?= base_url().$v_menu->link;?>">
			<?php echo $v_menu->title;?>
		</a>
	</li>
	<?php }?>
	
</ul>
</div>
</div>
			</div>

		</div>

		<div class="row">
			<div class="contacts">
				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
					<div class="contacts-item">
						<div class="icon js-animate-icon">
							<svg enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="  M45.1,44.2C42.9,42,39.6,40,37,42.6c-1.8,1.8-2.6,3.9-2.6,3.9s-4.3,2.3-11.7-5.2s-5.2-11.7-5.2-11.7s2.1-0.8,3.9-2.6  c2.6-2.6,0.6-5.9-1.7-8.1c-2.7-2.7-6.2-4.9-8.2-2.9c-3.7,3.7-4.4,8.4-4.4,8.4S9,35.5,18.7,45.3s20.9,11.6,20.9,11.6s4.7-0.7,8.4-4.4  C50,50.4,47.8,46.9,45.1,44.2z" fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M18.4,12.2C22.2,9.5,26.9,8,32,8c13.3,0,24,10.8,24,24c0,4-1.3,9-4.4,12.2" fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M27.3,55.6c-9.8-1.9-17.5-9.8-19.1-19.7" fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M30,21c0,0,4.4,0,5.2,0c1.2,0,1.8,0.2,1.8,1.1s0,0.7,0,1.3c0,0.6,0,1.4-1.6,2.5c-2.3,1.6-5.6,3.8-5.6,5.1c0,1.6,0.7,2,1.8,2  s5.3,0,5.3,0" fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M40,21c0,0,0,2.8,0,3.8S39.9,27,41.5,27c1.6,0,4.5,0,4.5,0v-6.1V33" fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/></svg>
						</div>
							 <?php foreach($footer_bottom as $v_bottom){?>
						<div class="content">
							<a href="#" class="title">
						<?php echo $v_bottom->mobile;?>
							</a>
							<p class="sub-title">monday-saturday 9am-6pm</p>
						</div>
                          <?php }?>

					</div>
				</div>

				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
					<div class="contacts-item">
						<div class="icon js-animate-icon">
							<svg enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" points="  54,17 32,36 10,17 " stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><line fill="none" stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="10.9" x2="26" y1="48" y2="36"/><path d="  M32.7,49H13c-2.2,0-4-1.8-4-4V19c0-2.2,1.8-4,4-4h38c2.2,0,4,1.8,4,4v15.5" fill="none" stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><circle cx="44.9" cy="43.1" fill="none" r="10.1" stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M44,41.4c0,0-1.3,3.4-0.9,5.1c0.4,1.7,2.6,2.1,3.7,1.1" fill="none" stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><g><circle cx="45.4" cy="38.3" fill="#DCE9EE" r="0.9"/><path d="M45.4,37.3c-0.5,0-0.9,0.4-0.9,0.9c0,0.5,0.4,0.9,0.9,0.9s0.9-0.4,0.9-0.9C46.4,37.8,46,37.3,45.4,37.3   L45.4,37.3z" fill="#f15b26"/></g></svg>
						</div>
							 <?php foreach($footer_bottom as $v_bottom){?>
						<div class="content">
							<a href="#" class="title">
								<?php echo $v_bottom->gmail;?>
							</a>
							<p class="sub-title">online support</p>
						</div>
					<?php }?>
					</div>
				</div>

				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
					<div class="contacts-item">
						<div class="icon js-animate-icon">
							<svg enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><polygon fill="none" points="  38.7,36.4 56,32 38.7,27.6 42,22 36.4,25.3 32,8 27.6,25.3 22,22 25.3,27.6 8,32 25.3,36.4 22,42 27.6,38.7 32,56 36.4,38.7 42,42   " stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></polygon><circle cx="32" cy="32" fill="none" r="4" stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></circle><path d="  M26.1,53.2c-7.9-2.2-13.9-8.6-15.6-16.7" fill="none" stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path><path d="  M53.5,36.9c-1.8,8.1-8.2,14.6-16.3,16.5" fill="none" stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path><path d="  M36.9,10.5c8.2,1.9,14.7,8.3,16.6,16.6" fill="none" stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path><path d="  M10.5,27.1c1.9-8.2,8.3-14.6,16.4-16.5" fill="none" stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path></svg>
						</div>
						<?php foreach ($footer_bottom as $v_bottom){?>
						<div class="content">
							<a href="#" class="title">
								<?php echo $v_bottom->address?>
							</a>
							<p class="sub-title">Address</p>
						</div>
					<?php }?>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="sub-footer">
		<div class="container">
			<div class="row">
				<?php foreach($copyright as $v_copy){?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <span>
                        Copyright © <?php echo $v_copy->year?>
                         <a href="#" class="sub-footer__link">
                         	<?php echo $v_copy->company_name?>
                         </a>
                        Designed by <a href="#">
                      <?php echo $v_copy->design?>
                    </a>
                    </span>

					<span>Developed by <a href="#">
					<?php echo $v_copy->developed?>
				</a>
				</span>
					<span>Only on <a href="#">
					<?php echo $v_copy->only_on?>
				</a></span>

					<a class="back-to-top" href="#">
						<svg class="back-to-top">
							<use xlink:href="#to-top"></use>
						</svg>
					</a>
				</div>
			<?php }?>
			</div>
		</div>
	</div>

</footer>

<!-- End Footer -->


<!-- Sign-in Form Popup -->

<div class="window-popup">
<a href="#" class="popup-close js-popup-close cd-nav-trigger">
<i class="seosight-icon seoicon-delete"></i>
</a>

<div class="sign-in-popup">
<h5 class="title">Register to RTSOFTBD</h5>
<p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magnais.</p>
<form  method="post" 
action="<?php echo base_url()?>save-signup">
<div class="row">

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<input class="input-standard-grey" name="fname" placeholder="First Name" type="text">
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<input class="input-standard-grey" name="lname"placeholder="Last Name" type="text">
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="input-standard-grey" name="gmail" placeholder="Your Email" type="email">
<input class="input-standard-grey" name="password" placeholder="Your Password" type="password">

<select name="gender">
<option name="gender" value="Male">Male</option>
<option  name="gender"value="Female">Female</option>
</select>

<div class="remember-wrap">
<div class="checkbox">
	<input id="terms" type="checkbox" name="terms" value="Accept Terms">
	<label for="terms">I accept the Terms and Conditions</label>
</div>
</div>

<button class="btn btn-large btn--primary">Complete Registration!</button> >
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
           L12,18.5 L16.5,14 L21,18.5 L20.25,19.25 L17,16 L17,22 L17,22 Z M16,22 L16,27 L17,27 L17,22 L16,22 L16,22 Z"
			  id="cloud-upload"></path>
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

<script src="<?php echo base_url('assets/') ?>js/jquery-3.4.1.js"></script>

<script src="<?php echo base_url('assets/') ?>js/js-plugins/crum-mega-menu.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/swiper.jquery.min.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/waypoints.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/jquery.drawsvg.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/jquery-countTo.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/jquery.mousewheel.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/jquery.mCustomScrollbar.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/imagesLoaded.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/jquery.magnific-popup.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/jquery.matchHeight.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/segment.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/bootstrap.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/jquery-circle-progress.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/Headroom.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/smooth-scroll.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/jquery.nice-select.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/fastClick.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/form-actions.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/velocity.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/time-line.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/ScrollMagic.min.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/animation.velocity.min.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/ajax-pagination.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/donut-chart.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/photo-gallery.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/ion.rangeSlider.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/leaflet.js"></script>
<script src="<?php echo base_url('assets/') ?>js/js-plugins/MarkerClusterGroup.js"></script>

<script src="<?php echo base_url('assets/') ?>js/main.js"></script>
<script  src="<?php echo base_url('assets/js/custom1.js');?>"></script>
		
	
	
	
	

	
	
		
	
	
	
		

		<script src="js/custom.js"></script>



<!-- ...end JS Script -->

<script>
	function ConfirmDelete()
{
  var x = confirm("Are you sure you want to delete?");
  if (x)
      return true;
  else
    return false;
}
function loadDoc1() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("testw").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "application/views/infopage/infobox1.php", true);
  xhttp.send();
}



$(document).ready(function() { $('#auto').click(); });



function loadDoc2() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("testw").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "application/views/infopage/infobox2.php", true);
  xhttp.send();
}





function loadDoc3() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("testw").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "application/views/infopage/infobox3.php", true);
  xhttp.send();
}




function loadDoc4() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("testw").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "application/views/infopage/infobox4.php", true);
  xhttp.send();
}


function loadDoc5() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("testw").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "application/views/infopage/infobox5.php", true);
  xhttp.send();
}



</script>

<script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js" ></script>

<script>
$(document).on("click", "#del", function(e) {
e.preventDefault();
var link = $(this).attr("href");
bootbox.confirm("Are you want to delete permanantly!", function(confirmed) {
if (confirmed) {

window.location.href =link;
};
});
});
</script>
<script>
	function locationPage(url) {
		window.location = url;
	}
$("#delete-button").click(function(){
    if(confirm("Are you sure you want to delete this?")){
        $("#delete-button").attr("href", "query.php?ACTION=delete&ID='1'");
    }
    else{
        return false;
    }
});
</script>
</body>


</html>
