 
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

	<!-- End Subscribe Form -->
</div>
