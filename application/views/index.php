
<div class="content-wrapper">

	<!-- Main Slider -->
	

	<div class="container-full-width">
		<div class="swiper-container main-slider" data-effect="fade" data-autoplay="4000">

			<!-- Additional required wrapper -->

			
			<div class="swiper-wrapper">

				 <?php foreach($all_db_slider as $v_slider){?>
				<!-- Slides -->
				<div class="swiper-slide bg-primary-color main-slider-bg-dark thumb-left">



					<div class="container table">
						<div class="row table-cell">

							<div class="col-lg-5 table-cell">
								<div class="slider-content">
	<h3 class="slider-content-title" data-swiper-parallax="-100">
		<span class="c-dark">
      <?php echo $v_slider->slider_descriptions;?>
		</span>
									</h3>
									<h6 class="slider-content-text" data-swiper-parallax="-200">

										<?php echo $v_slider->slider_about;?>
									</h6>

									<div class="main-slider-btn-wrap" data-swiper-parallax="-300">

										<a href="#"
										   class="btn btn-medium btn--dark btn-hover-shadow">
											<span class="text">learn more</span>
											<span class="semicircle"></span>
										</a>


									</div>

								</div>
							</div>

							<div class="col-lg-7 table-cell">
								<div class="slider-thumb" data-swiper-parallax="-300"
									 data-swiper-parallax-duration="500">
		<img src="<?php echo base_url().$v_slider->slider_image;?>" alt="slider">
								</div>
							</div>

						</div>
					</div>

				</div>
			<?php }?>
			</div>

			<!--Prev next buttons-->

			<svg class="btn-next btn-next-black">
				<use xlink:href="#arrow-right"></use>
			</svg>

			<svg class="btn-prev btn-prev-black">
				<use xlink:href="#arrow-left"></use>
			</svg>

			<!--Pagination tabs-->

              	<div class="slider-slides" >
              			<a  id="auto" onclick="loadDoc()" href=""  class="slides-item bg-border-color main-slider-bg-light">

					<div class="content">
						<div class="text-wrap">
							<h4 class="slides-title">ENTERPRISE SOLUTION</h4>
						</div>
						<div class="slides-number">01</div>
					</div>
					
				</a>

				<a onclick="loadDoc1()" href="" class="slides-item bg-primary-color" id="button2">
					<div class="content">
						<div class="text-wrap">
							<h4 class="slides-title">Corporate solutions</h4>
							<div class="slides-sub-title">Mirum est notare quam littera.</div>
						</div>
						<div class="slides-number">02</div>
					</div>
				</a>

				<a onclick="loadDoc2()" href="#" class="slides-item bg-secondary-color" id="button3">
					<div class="content">
						<div class="text-wrap">
							<h4 class="slides-title">Mobile App & IoT</h4>
						</div>
						<div class="slides-number">03</div>
					</div>
				</a>

				<a onclick="loadDoc3()" href="" class="slides-item bg-orange-color" id="button4">
					<div class="content">
						<div class="text-wrap">
							<h4 class="slides-title">Digital Marketing</h4>
						</div>
						<div class="slides-number">04</div>
					</div>
				</a>

				<a  onclick="loadDoc4()"href="#" class="slides-item bg-green-color" id="button5">
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

       <div id="testw">
			
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
									<span data-speed="2000" data-refresh-interval="3" data-to="96"
										  data-from="2">96%</span>
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
									<span data-speed="2000" data-refresh-interval="3" data-to="10"
										  data-from="0">10</span>
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
									<span data-speed="2000" data-refresh-interval="3" data-to="70"
										  data-from="2">230+</span>
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
									<span data-speed="2000" data-refresh-interval="3" data-to="690"
										  data-from="400">690+</span>
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
								<p class="heading-text c-white">Get Excellent Unique ENTERPRISE SOLUTION with RTsoftBD
								</p>
							</div>
							<div class="signature js-animate-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="200" height="60">
									<path fill="none" stroke="#2f2c2c" stroke-width="1.4"
										  d="M24.78 42.5C11.28 41.06.96 36 1.16 26.86 1.62 11.6 16.76 3.6 28.13 3.25c5.44-.16 9.8 2.38 10.2 5.8.86 7.66-19.23 15.62-19.23 15.62s17.86-6.57 24.66 2.2c2.8 3.6-11.8 10.65-11.8 10.65s-8.8 3.35-7.65-.24c1.78-5.52 16.8-10.1 18.42-10.3 3.17-.4 7.1-.4 8 .12 1.33.78-1.7 4.14-.94 4.86.76.72 3.82-2.55 3.94-1.97.12.57-.64 2.63.58 3 1.2.38 2.3-1.1 4.28-1.5 1.97-.4 1.83-.44 3.6-.12 1.76.32 2.1.64 3.47 1.4 1.36.74.86 2.22 1.96 1.6 1.1-.6 1.43-4.16 2.44-4.04 1.02.1.03 5.38 1.63 4.5 1.6-.85 4.74-7.97 4.74-7.97s-.82 4.04 0 3.93c3.14-.4 8.12-2.57 14.48-3.36 6.37-.78 8.67-.35 11 .24 1.92.48 2.67 2.3 2.67 2.3"
										  stroke-linecap="round" stroke-linejoin="round"></path>
									<path fill="none" stroke="#2f2c2c" stroke-width="1.4"
										  d="M113.7 15.75s-1.1-2.78-3.6-2.08c-5.83 1.62-16.2 7.68-16.44 15.63-.46 16.3 21.1 11.14 22.7 11 13.6-1.2 17.38-9.96 17.36-14.48-.06-14.3-19.07-10.3-21.07-10.07-7.9.92-10.48 1.57-10.48 1.57"></path>
									<path fill="none" stroke="#2f2c2c" stroke-width="1.4"
										  d="M119.7 1.05c-2.53 13.9-5.1 27.83-2.53 41.44" stroke-linecap="round"></path>
									<path fill="none" stroke="#2f2c2c" stroke-width="1.4"
										  d="M133.6 27.8c-6.62-.42-12.6.37-17.36 3.35"></path>
									<path fill="none" stroke="#2f2c2c" stroke-width="1.4"
										  d="M131.52 32.77s3.95-.13 8.34-.93c2.4-.43 5-1.73 7.87-1.85 2.87-.12 1.74 1.44 3.6 1.38 4.62-.14 7.98-.3 14.92-.7 6.95-.4 9.76-2.76 12.86-.92 1.7 1 1.4 3.13 1.4 3.13"
										  stroke-linecap="round"></path>
									<path fill="none" stroke="#2f2c2c" stroke-width="1.4"
										  d="M153.52 31.03s2.27-2.74-.7-3.35c-3.36-.7-3.7 2.43-3.7 2.43"></path>
								</svg>
							</div>
						</div>

						<div class="col-lg-7 col-lg-offset-1 col-md-8 col-sm-12 col-xs-12">

							<div class="testimonial-item">
								<!-- Slider main container -->
								<div class="swiper-container testimonial__thumb overflow-visible" data-effect="fade"
									 data-loop="false">

									<div class="swiper-wrapper">



 	<div class="testimonial-slider-item swiper-slide">
	 <?php foreach($all_db_testimonials as $v_testimonials){?>
	
	<div class="testimonial-content">
		
		<p class="text" data-swiper-parallax="-200">
			<?php echo $v_testimonials->testi_text;?>
		</p>
		<a href="#" class="author" data-swiper-parallax="-150">
				<?php echo $v_testimonials->testi_author;?>
		</a>
		<a href="#" class="company" data-swiper-parallax="-150">
               	<?php echo $v_testimonials->testi_company;?>
		</a>

	</div>
	<div class="avatar" data-swiper-parallax="-50">
		<img src="<?= base_url('assets/images/avatar.png');?>" alt="avatar">
	</div>
		

<?php }?>
</div>





										
									
									</div>
									<!-- If we need pagination -->
									<div class="swiper-pagination"></div>

									<div class="quote">
										<i class="seoicon-quotes"></i>
									</div>
								</div>

								<div class="testimonial__thumb-img">
									<img src="<?= base_url('assets/images/testimonial1.png');?>" alt="image">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="testimonial-img">
					<img src="<?= base_url('assets/images/testimonial2.png');?>" alt="image">
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
				<div class="swiper-container top-pagination" data-show-items="2" data-scroll-items="2">

					<!-- If we need pagination -->
					<div class="swiper-pagination"></div>

					<div class="swiper-wrapper">
						<?php foreach($blog_item as $v_blog){?>
						<div class="swiper-slide">
							<article class="hentry post">

								<time class="post__date published " datetime="2016-01-30 12:00:00">
									<?php echo $v_blog->date?>
								</time>

								<div class="post__content">
									<h2 class="post__title entry-title">
										<a href="15_blog_details.html">
						<?php echo $v_blog->blog_title?>					
										</a>
									</h2>

									<p class="post__text">
						<?php echo $v_blog->blog_details?>				
									</p>

								</div>

								<div class="post__author author vcard">
									<div class="post-avatar">
				<img src="<?php echo $v_blog->avatar ?>" alt="author">
									</div>
									<span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">
						<?php echo $v_blog->posted_by?>				
									</a></span>
								</div>

							</article>
						</div>
					<?php }?>

						

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
							<p class="heading-text">Get Excellent Unique ENTERPRISE SOLUTION with RTsoftBD </p>
						</div>
					</div>
				</div>

				<div class="theme-module clients-slider-module">

					<div class="swiper-container pagination-bottom" data-show-items="4">

						<div class="swiper-wrapper">


<?php 
				foreach($all_client_image as $v_client){
?>
                 <div class="swiper-slide client-item" style="float: left;">
   
   <a href="#" class="client-image">
		<img  style="float:left;margin:20px;"src="<?php echo $v_client->client_image ?>">

		</a></div>

                 		 <?php } ?>
	



		
	
			

	
	

	

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
	<form  action="<?php echo base_url()?>save-subscribe" method="post" enctype="multipart/form-data">
<input required class="email input-standard-grey input-white" name="gmail"  placeholder="Your Email Address" type="text">
		<button  style="background:#2F2C2C;color: #ffffff;height: 50px;width: 100px;border-radius: 10px;margin-top: -100PX; "class="subscr-btn">subscribe
			<span class="semicircle--right"></span>
		</button>
</form>
		
	<div class="sub-title">Sign up for new RTSOFTBD content, updates, surveys & offers.</div>

</div>

						<div class="images-block">
							<img src="<?= base_url('assets/images/subscr-gear.png');?>" alt="gear" class="gear">
							<img src="<?= base_url('assets/images/subscr1.png');?>" alt="mail" class="mail">
							<img src="<?= base_url('assets/images/subscr-mailopen.png');?>" alt="mail" class="mail-2">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End Subscribe Form -->
</div>
